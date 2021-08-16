<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\checkOutRequest;
use App\Models\product;
use App\Models\order;
use App\Models\orderDetail;
use App\Models\payment;
use App\Models\discount;
use App\Cart;
use Session;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderShipped;

class orderController extends Controller
{
    protected $folder = 'frontend.order.';

    public function cart(){
        return view($this->folder.'cart');
    }

    public function checkOut(){
        $payments = payment::orderByDesc('id')->get();
        $viewData = [
            "payments" => $payments,
        ];
        return view($this->folder.'checkOut',$viewData);
    }

    public function postCheckOut(checkOutRequest $request){
        $getSeesionCart = Session::get('Cart');
        // if(!Auth::user()->id){
        //     return back()
        // ->with('error','Đăng Nhập Để Thực Hiện Chức Năng Này.');
        // }
        $data = $request->except(['_token']);
        $data['created_at']  = Carbon::now();
        $data['or_u_id'] =  Auth::user()->id;
        $data['or_pay_id'] =   intval($request->or_pay_id);

        $payment =  payment::find($data['or_pay_id']);
        $data['or_total'] =  $getSeesionCart->totalPrice + $payment->pay_fee_shipping;
        
        if($data['or_email'] == null){
            $data['or_email'] =  Auth::user()->email;
        }
       $orderId =  order::insertGetId($data);
        if($orderId){

            $myCart = $getSeesionCart->products;
            //lưu đơn hàng chi tiết
            foreach($myCart as $key => $item){
                orderDetail::insert([
                    'orD_or_id' => $orderId,
                    'orD_p_id' => $key,
                    'orD_p_sku' => $item['productInfor']->p_sku,
                    'orD_p_name' => $item['productInfor']->p_name,
                    'orD_p_avatar' => $item['productInfor']->p_avatar,
                    'orD_p_price' => $item['productInfor']->p_price,
                    'orD_p_sale' => $item['productInfor']->sale,
                    'orD_qty' => $item['quanty'],
                    'orD_p_subTotal' => $item['subTotalPrice'],
                    'created_at' => Carbon::now(),
                ]);
                   // cập nhật lượt mua
                product::find($key)->increment('p_pay');  
                //gửi mail hóa đơn cho khách hàng
                $order = order::with('get_orderDetail','fk_order_payment')->where('id',$orderId)->orderByDesc('id')->first(); 
                Mail::send($this->folder.'formOrderSuccess',['order' => $order], function($message) use ($order) {
                    // $message->from('shoppo-nguyenthanhcong@gmail.com');
                    $message->to($order->or_email);
                    $message->subject('Xác nhận đơn hàng #'.$order->id);
                 });
                // Mail::to($order->or_email)->queue($orderMail);
                // Mail::to($order->or_email) ->later(now()->addMinutes(10), new OrderShipped($order));
            }
            $request->session()->forget('Cart');
        }
        return redirect()
        ->route('get.orderSuccess',$orderId)
        ->with('success','Đơn hàng của bạn đã được mua thành công');
    }

    public function methodPaymentVnpay(checkOutRequest $request ){
        $getSeesionCart = Session::get('Cart');
        
        $data = $request->except(['_token']);
        $data['created_at']  = Carbon::now();
        $data['or_u_id'] =  Auth::user()->id;
        $data['or_pay_id'] =   intval($request->or_pay_id);

        $payment =  payment::find($data['or_pay_id']);
        $data['or_total'] =  $getSeesionCart->totalPrice + $payment->pay_fee_shipping;
        
        if($data['or_email'] == null){
            $data['or_email'] =  Auth::user()->email;
        }
       $or_id =  order::insertGetId($data);
       $viewData = [
            'or_id' => $or_id,
            'or_total' =>  $data['or_total'],
       ];
        return view($this->folder.'vnpay.index',$viewData);
    }

    public function postPaymentvnpay(Request $request){
       
        $vnp_TxnRef = 170002 ;//$request['order_id']; //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderInfo = $request['order_desc'];
        $vnp_OrderType = $request['order_type'] ;
        $vnp_Amount = $request['amount'] * 100;
        $vnp_Locale = $request['language'];
        $vnp_BankCode = $request['bank_code'] ;
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];

        $inputData = array(
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => env('VNP_TMN_CODE'),
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => route('get.vnpayReturn'),
            "vnp_TxnRef" => $vnp_TxnRef,
        );
   
        if(isset($vnp_BankCode) && $vnp_BankCode !=""){
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
     //   dd($inputData);
        ksort($inputData);
       // dd($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }
        
        $vnp_Url = env('VNP_URL') . "?" . $query;
        if (env('VNP_HASH_SECRET')) {
            $vnpSecureHash =   hash_hmac('sha512', $hashdata, env('VNP_HASH_SECRET'));//  
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }
        //dd($vnp_Url);
            return redirect($vnp_Url);
    }

    public function vnpayReturn(Request $request){
        dd($request->toArray());
    }

    public function success($id){
        $order = order::with('get_orderDetail','fk_order_payment')->where('id',$id)->orderByDesc('id')->first();
        //dd($order);
        $viewData = [
            "order" => $order,
        ];
        return view($this->folder.'success', $viewData );
    }

    public function search(){
        return view($this->folder.'search');
    }

    public function addCart(Request $request ,$id){
     $product =   product::find($id);
     $discount = discount::find($product->p_discount_id);
     if($discount->d_number > 0){
         $product->p_price_sale = priceNew($product->p_price,$discount->d_number);
         $product->sale = $discount->d_number;
     }else{
        $product->p_price_sale = -1;
     }
     if( $product != null){
         $getSeesionCart = Session::get('Cart') ? Session::get('Cart') : null;
        $oldCart = $getSeesionCart ;
        $newCart = new Cart($oldCart);
        $newCart->addCart($product,$id);
        $request->session()->put('Cart',$newCart);
     }
    return view('frontend.menuTop.cart');
    }

    public function deleteItemCart(Request $request ,$id){
        $getSeesionCart = Session::get('Cart') ? Session::get('Cart') : null;
        $oldCart = $getSeesionCart ;
        $newCart = new Cart($oldCart);
        $newCart->deleteItemCart($id);
        if(count($newCart->products) > 0){
            $request->session()->put('Cart',$newCart);
        }else{
            $request->session()->forget('Cart');
        }
        return view('frontend.menuTop.cart');
    }

    public function updateCartMenu(Request $request){
        $getSeesionCart = Session::get('Cart') ? Session::get('Cart') : null;
        if($getSeesionCart == null){
            return view('frontend.menuTop.cart');
        }
        $oldCart = $getSeesionCart ;
        $newCart = new Cart($oldCart);
        $request->session()->put('Cart',$newCart);
        return view('frontend.menuTop.cart');
    }

    public function deleteItempageCart(Request $request ,$id){
        $getSeesionCart = Session::get('Cart') ? Session::get('Cart') : null;
        $oldCart = $getSeesionCart ;
        $newCart = new Cart($oldCart);
        $newCart->deleteItemCart($id);
        if(count($newCart->products) > 0){
            $request->session()->put('Cart',$newCart);
        }else{
            $request->session()->forget('Cart');
        }
        return view($this->folder.'list-cart');
    }

    public function updateItemPageCart(Request $request ,$id,$quanty){
        $getSeesionCart = Session::get('Cart') ? Session::get('Cart') : null;
        $oldCart = $getSeesionCart ;
        $newCart = new Cart($oldCart);
        $newCart->updateItemCart($id,$quanty);
        $request->session()->put('Cart',$newCart);

        return view($this->folder.'list-cart');
    }

  
}
