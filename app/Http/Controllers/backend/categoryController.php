<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\categoryRequest;
use App\Models\category;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;



class categoryController extends Controller
{
    protected $folder = 'backend.category.';

    function index(){
        $categories = category::with('category_parent:id,c_name')->orderByDesc('id')->get();
        $viewData = [
            "categories" => $categories,
        ];
        return view($this->folder.'index',$viewData);
    }

    function create(){
        $categories = category::orderByDesc('id')->get();
        $viewData = [
            "categories" => $categories,
        ];
        return view($this->folder.'create',$viewData);
    }

    function store(categoryRequest $request){
       $data = $request->except(['_tokent','c_avatar','c_banner']);
       $data['c_slug'] = Str::slug($request->c_name);
       $data['created_at']  = Carbon::now();

       if ($request->hasFile('c_avatar')) {
          $c_avatar = $request->file('c_avatar');
          $storedPath = $c_avatar->move('images/icon', $c_avatar->getClientOriginalName());
          $data['c_avatar']  = $c_avatar->getClientOriginalName();
        }

        if ($request->hasFile('c_banner')) {
            $c_banner = $request->file('c_banner');
            $storedPath = $c_banner->move('images/banner', $c_banner->getClientOriginalName());
            $data['c_banner']  = $c_banner->getClientOriginalName();
        }

        category::create($data);

      return back()
      ->with('success','Tạo Danh Mục Thành Công')
      ->withInput();
    }

    function edit($id){
        $categories = category::orderByDesc('id')->get();
        $category = category::find($id);
        $viewData = [
            "category" => $category,
            "categories" => $categories,
        ];
        return view($this->folder.'update',$viewData);
    }

    function update(categoryRequest $request , $id){
       $data = $request->except(['_tokent','c_avatar','c_banner']);
       $data['c_slug'] = Str::slug($request->c_name);
       $data['updated_at']  = Carbon::now();
       if ($request->has('c_active')) {
            $data['c_active'] = 1;
        }else{
            $data['c_active'] = 0;
        }
        
        if ($request->hasFile('c_avatar')) {
           $c_avatar = $request->file('c_avatar');
           $storedPath = $c_avatar->move('images/icon', $c_avatar->getClientOriginalName());
           $data['c_avatar']  = $c_avatar->getClientOriginalName();
         }
 
         if ($request->hasFile('c_banner')) {
             $c_banner = $request->file('c_banner');
             $storedPath = $c_banner->move('images/banner', $c_banner->getClientOriginalName());
             $data['c_banner']  = $c_banner->getClientOriginalName();
         }
        
         category::find($id)->update($data);
          return redirect()
           ->route('get_backend.category.index')
           ->with('update_success','Cập nhật Danh Mục Thành Công');
    }
    
    function delete($id){
        DB::table('categories')->where('id',$id)->delete();
        return redirect()
        ->route('get_backend.category.index')
        ->with('delete_success','Đã Xóa Danh Mục #'.$id);
    }
}
