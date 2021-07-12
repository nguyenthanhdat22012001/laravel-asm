<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\blogRequest;
use App\Models\blog;
use App\Models\categoryBlog;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class blogController extends Controller
{
    protected $folder = 'backend.blog.';

    function index(){
        $blogs = blog::with('cateBlog_parent:id,cbl_name')->orderByDesc('id')->get();
        $viewData = [
            "blogs" => $blogs,
        ];
        return view($this->folder.'index',$viewData);
    }

    function create(){
        $blogs = blog::orderByDesc('id')->get();
        $categoryBlogs = categoryBlog::orderByDesc('id')->get();
        $viewData = [
            "blogs" => $blogs,
            "categoryBlogs" => $categoryBlogs,
        ];
        return view($this->folder.'create',$viewData);
    }

    function store(blogRequest $request){
       $data = $request->except(['_tokent','bl_avatar']);
       $data['bl_slug'] = Str::slug($request->bl_name);
       $data['created_at']  = Carbon::now();

       if ($request->hasFile('bl_avatar')) {
          $bl_avatar = $request->file('bl_avatar');
          $storedPath = $bl_avatar->move('images/news', $bl_avatar->getClientOriginalName());
          $data['bl_avatar']  = $bl_avatar->getClientOriginalName();
        }

        blog::create($data);

      return back()
      ->with('success','Tạo Blog Thành Công')
      ->withInput();
    }

    function edit($id){
        $blog = blog::find($id);
        $categoryBlogs = categoryBlog::orderByDesc('id')->get();
        $viewData = [
            "blog" => $blog,
            "categoryBlogs" => $categoryBlogs,
        ];
        return view($this->folder.'update',$viewData);
    }

    function update(blogRequest $request , $id){
       $data = $request->except(['_tokent','bl_avatar','bl_banner']);
       $data['bl_slug'] = Str::slug($request->bl_name);
       $data['updated_at']  = Carbon::now();
       if ($request->has('bl_active')) {
            $data['bl_active'] = 1;
        }else{
            $data['bl_active'] = 0;
        }
        
        if ($request->hasFile('bl_avatar')) {
           $bl_avatar = $request->file('bl_avatar');
           $storedPath = $bl_avatar->move('images/icon', $bl_avatar->getClientOriginalName());
           $data['bl_avatar']  = $bl_avatar->getClientOriginalName();
         }
        
         blog::find($id)->update($data);
          return redirect()
           ->route('get_backend.blog.index')
           ->with('update_success','Cập nhật Blog Thành Công');
    }
    
    function delete($id){
        DB::table('blogs')->where('id',$id)->delete();
        return redirect()
        ->route('get_backend.blog.index')
        ->with('delete_success','Đã Xóa Blog #'.$id);
    }
}
