<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\discountRequest;
use App\Models\discount;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class discountController extends Controller
{
    protected $folder = 'backend.discount.';

    function index(){
        $discounts = discount::orderByDesc('id')->get();
        $viewData = [
            "discounts" => $discounts,
        ];
        return view($this->folder.'index',$viewData);
    }

    function create(){

    }

    function store(discountRequest $request){
       $data = $request->except(['_tokent']);
       $data['created_at']  = Carbon::now();

       if ($request->has('d_active')) {
        $data['d_active'] = 1;
        }else{
            $data['d_active'] = 0;
        }

        discount::create($data);

      return back()
      ->with('success','Tạo Giảm Giá Thành Công')
      ->withInput();
    }

    function edit($id){
        $discounts = discount::orderByDesc('id')->get();
        $discount = discount::find($id);
        $viewData = [
            "discounts" => $discounts,
            "discount" => $discount,
        ];
        return view($this->folder.'update',$viewData);
    }

    function update(discountRequest $request , $id){
        $data = $request->except(['_tokent']);
        $data['created_at']  = Carbon::now();
 
        if ($request->has('d_active')) {
         $data['d_active'] = 1;
         }else{
             $data['d_active'] = 0;
         }
        
         discount::find($id)->update($data);
          return back()
           ->with('update_success','Cập nhật Giảm Giá Thành Công');
    }
    
    function delete($id){
        DB::table('discounts')->where('id',$id)->delete();
        return redirect()
        ->route('get_backend.discount.index')
        ->with('delete_success','Đã Xóa Giảm Giá #'.$id);
    }
}
