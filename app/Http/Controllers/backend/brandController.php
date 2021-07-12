<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\brandRequest;
use App\Models\brand;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class brandController extends Controller
{
    protected $folder = 'backend.brand.';

    function index(){
        $brands = brand::orderByDesc('id')->get();
        $viewData = [
            "brands" => $brands,
        ];
        return view($this->folder.'index',$viewData);
    }

    function create(){

    }

    function store(brandRequest $request){
       $data = $request->except(['_tokent','br_avatar']);
       $data['br_slug'] = Str::slug($request->br_name);
       $data['created_at']  = Carbon::now();

       if ($request->hasFile('br_avatar')) {
        $br_avatar = $request->file('br_avatar');
        $storedPath = $br_avatar->move('images/brand', $br_avatar->getClientOriginalName());
        $data['br_avatar']  = $br_avatar->getClientOriginalName();
      }

       if ($request->has('br_active')) {
        $data['br_active'] = 1;
        }else{
            $data['br_active'] = 0;
        }


        brand::create($data);

      return back()
      ->with('success','Tạo Thương Hiệu Thành Công')
      ->withInput();
    }

    function edit($id){
        $brands = brand::orderByDesc('id')->get();
        $brand = brand::find($id);
        $viewData = [
            "brands" => $brands,
            "brand" => $brand,
        ];
        return view($this->folder.'update',$viewData);
    }

    function update(brandRequest $request , $id){
        $data = $request->except(['_tokent','br_avatar']);
        $data['br_slug'] = Str::slug($request->br_name);
        $data['created_at']  = Carbon::now();
 
        if ($request->hasFile('br_avatar')) {
            $br_avatar = $request->file('br_avatar');
            $storedPath = $br_avatar->move('images/brand', $br_avatar->getClientOriginalName());
            $data['br_avatar']  = $br_avatar->getClientOriginalName();
          }

        if ($request->has('br_active')) {
         $data['br_active'] = 1;
         }else{
             $data['br_active'] = 0;
         }
 
        
         brand::find($id)->update($data);
          return back()
           ->with('update_success','Cập nhật Thương Hiệu Thành Công');
    }
    
    function delete($id){
        DB::table('brands')->where('id',$id)->delete();
        return redirect()
        ->route('get_backend.brand.index')
        ->with('delete_success','Đã Xóa Thương Hiệu #'.$id);
    }
}
