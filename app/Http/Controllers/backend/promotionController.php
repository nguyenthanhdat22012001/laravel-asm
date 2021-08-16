<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\promotionRequest;
use App\Models\promotion;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class promotionController extends Controller
{
    protected $folder = 'backend.promotion.';

   public function index(){
        $promotions = promotion::orderByDesc('id')->get();
        $viewData = [
            "promotions" => $promotions,
        ];
        return view($this->folder.'index',$viewData);
    }

    function create(){

    }

    public  function store(promotionRequest $request){
        $data = request()->except(['_token']);
       $data['created_at']  = Carbon::now();

       if ($request->has('promo_active')) {
        $data['promo_active'] = 1;
        }else{
            $data['promo_active'] = 0;
        }

       $id = promotion::insertGetId($data);
        //send mail
        $this->sendPromotion($id);

      return back()
      ->with('success','Tạo Khuyến Mãi Thành Công')
      ->withInput();
    }

    public function sendPromotion($id){
        $emails = array();
        $users = User::select('email')->get();
        foreach ($users as $item) {
            array_push($emails,$item->email);
        }
        //dd($emails);
        $promotion = promotion::find($id);

            Mail::send($this->folder.'sendMailPromotion',['promotion' => $promotion], function($message) use ($emails) {
                // $message->from('shoppo-nguyenthanhcong@gmail.com');
                $message->to($emails);
                $message->subject('Shoppo Tặng Bạn Mã Khuyến Mãi');
             });
        
    }

    public function edit($id){
        $promotions = promotion::orderByDesc('id')->get();
        $promotion = promotion::find($id);
        $viewData = [
            "promotions" => $promotions,
            "promotion" => $promotion,
        ];
        return view($this->folder.'update',$viewData);
    }

    public function update(promotionRequest $request , $id){
        $data = request()->except(['_token']);
        $data['updated_at']  = Carbon::now();
 
        if ($request->has('promo_active')) {
         $data['promo_active'] = 1;
         }else{
             $data['promo_active'] = 0;
         }
 
         promotion::find($id)->update($data);
          return back()
           ->with('update_success','Cập nhật Phương Thức Thanh Toán Thành Công');
    }
    
    public function delete($id){
        DB::table('promotions')->where('id',$id)->delete();
        return redirect()
        ->route('get_backend.promotion.index')
        ->with('delete_success','Đã Xóa Khuyến Mãi #'.$id);
    }
}
