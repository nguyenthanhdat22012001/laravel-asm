<?php

namespace App\Http\Controllers\frontend\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Carbon;
use App\Models\order;
use App\Models\orderDetail;
use App\Models\payment;
use App\Models\discount;

class userController extends Controller
{
    protected $folder = 'frontend.form.';

    function index(){
        $idUser = Auth::id();
        $user = User::find($idUser);
        $viewData = [
            "user" => $user,
        ];
        return view($this->folder.'profile.myInfor',$viewData);
    }

    function updateUser(Request $request){
        $idUser = Auth::id();

        $request->validate(
            [
                'name' => ['required', 'string', 'max:255'],
                'phone' => 'regex:/^0[0-9]{9}$/',
            ],
            [
                'name.required' => 'Nhập họ Tên',
                'phone.regex' => 'Không đúng dạng số điện thoại',
            ],
    );


        $data = $request->except(['_token']);
        $data['updated_at']  = Carbon::now();
        $check = $this->update($data);
        return back()
        ->with('success','Cập Nhật Thành Công');

    }

    function update(array $data){
        $idUser = Auth::id();
        User::where('id', $idUser)
            ->update($data);
    }

    //đơn hàng 
    public function listOrder(){
        $idUser = Auth::id();
        $order = order::where('or_u_id',$idUser)->orderByDesc('id')->get();
       // dd($order);
        $viewData = [
            "order" => $order,
        ];
        return view($this->folder.'profile.myOrder',$viewData);
    }

    public function OrderDetail($id){
        $idUser = Auth::id();
        $order = order::with('get_orderDetail','fk_order_payment')
        ->where('id',$id,)
        ->where('or_u_id',$idUser)
        ->orderByDesc('id')->first();
        $viewData = [
            "order" => $order,
        ];
        return view($this->folder.'profile.myOrderDetail',$viewData);
    }

}
