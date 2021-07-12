<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\categoryBlogRequest;
use App\Models\categoryBlog;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class categoryBlogController extends Controller
{
    protected $folder = 'backend.categoryBlog.';

    function index(){
        $categoryBlogs = categoryBlog::orderByDesc('id')->get();
        $viewData = [
            "categoryBlogs" => $categoryBlogs,
        ];
        return view($this->folder.'index',$viewData);
    }

    function create(){

    }

    function store(categoryBlogRequest $request){
       $data = $request->except(['_tokent']);
       $data['cbl_slug'] = Str::slug($request->cbl_name);
       $data['created_at']  = Carbon::now();

       if ($request->has('cbl_active')) {
        $data['cbl_active'] = 1;
        }else{
            $data['cbl_active'] = 0;
        }

        if ($request->has('cbl_hot')) {
            $data['cbl_hot'] = 1;
        }else{
            $data['cbl_hot'] = 0;
        }

        categoryBlog::create($data);

      return back()
      ->with('success','Tạo Danh Mục Blog Thành Công')
      ->withInput();
    }

    function edit($id){
        $categoryBlogs = categoryBlog::orderByDesc('id')->get();
        $categoryBlog = categoryBlog::find($id);
        $viewData = [
            "categoryBlogs" => $categoryBlogs,
            "categoryBlog" => $categoryBlog,
        ];
        return view($this->folder.'update',$viewData);
    }

    function update(categoryBlogRequest $request , $id){
        $data = $request->except(['_tokent']);
        $data['cbl_slug'] = Str::slug($request->c_name);
        $data['created_at']  = Carbon::now();
 
        if ($request->has('cbl_active')) {
         $data['cbl_active'] = 1;
         }else{
             $data['cbl_active'] = 0;
         }
 
         if ($request->has('cbl_hot')) {
             $data['cbl_hot'] = 1;
         }else{
             $data['cbl_hot'] = 0;
         }
        
         categoryBlog::find($id)->update($data);
          return back()
           ->with('update_success','Cập nhật Danh Mục Blog Thành Công');
    }
    
    function delete($id){
        DB::table('category_blogs')->where('id',$id)->delete();
        return redirect()
        ->route('get_backend.categoryBlog.index')
        ->with('delete_success','Đã Xóa Danh Mục Blog #'.$id);
    }
}
