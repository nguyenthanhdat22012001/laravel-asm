<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\paymentRequest;
use App\Models\payment;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
class paymentController extends Controller
{
    protected $folder = 'backend.payment.';

    function index(){
        $payments = payment::orderByDesc('id')->get();
        $viewData = [
            "payments" => $payments,
        ];
        return view($this->folder.'index',$viewData);
    }

    function create(){

    }

    function store(paymentRequest $request){
       $data = $request->except(['_tokent']);
       $data['pay_slug'] = Str::slug($request->c_name);
       $data['created_at']  = Carbon::now();

       if ($request->has('pay_active')) {
        $data['pay_active'] = 1;
        }else{
            $data['pay_active'] = 0;
        }

        payment::create($data);

      return back()
      ->with('success','Tạo Thức Thanh Toán Thành Công')
      ->withInput();
    }

    function edit($id){
        $payments = payment::orderByDesc('id')->get();
        $payment = payment::find($id);
        $viewData = [
            "payments" => $payments,
            "payment" => $payment,
        ];
        return view($this->folder.'update',$viewData);
    }

    function update(paymentRequest $request , $id){
        $data = $request->except(['_tokent']);
        $data['pay_slug'] = Str::slug($request->c_name);
        $data['created_at']  = Carbon::now();
 
        if ($request->has('pay_active')) {
         $data['pay_active'] = 1;
         }else{
             $data['pay_active'] = 0;
         }
 
         payment::find($id)->update($data);
          return back()
           ->with('update_success','Cập nhật Phương Thức Thanh Toán Thành Công');
    }
    
    function delete($id){
        DB::table('payments')->where('id',$id)->delete();
        return redirect()
        ->route('gepay_backend.payment.index')
        ->with('delete_success','Đã Xóa Thức Thanh Toán #'.$id);
    }
}
