<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\tagRequest;
use App\Models\tag;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class tagController extends Controller
{
    protected $folder = 'backend.tag.';

    function index(){
        $tags = tag::orderByDesc('id')->get();
        $viewData = [
            "tags" => $tags,
        ];
        return view($this->folder.'index',$viewData);
    }

    function create(){

    }

    function store(tagRequest $request){
       $data = $request->except(['_tokent']);
       $data['t_slug'] = Str::slug($request->c_name);
       $data['created_at']  = Carbon::now();

       if ($request->has('t_active')) {
        $data['t_active'] = 1;
        }else{
            $data['t_active'] = 0;
        }

        if ($request->has('t_hot')) {
            $data['t_hot'] = 1;
        }else{
            $data['t_hot'] = 0;
        }

        tag::create($data);

      return back()
      ->with('success','Tạo Tag Thành Công')
      ->withInput();
    }

    function edit($id){
        $tags = tag::orderByDesc('id')->get();
        $tag = tag::find($id);
        $viewData = [
            "tags" => $tags,
            "tag" => $tag,
        ];
        return view($this->folder.'update',$viewData);
    }

    function update(tagRequest $request , $id){
        $data = $request->except(['_tokent']);
        $data['t_slug'] = Str::slug($request->c_name);
        $data['created_at']  = Carbon::now();
 
        if ($request->has('t_active')) {
         $data['t_active'] = 1;
         }else{
             $data['t_active'] = 0;
         }
 
         if ($request->has('t_hot')) {
             $data['t_hot'] = 1;
         }else{
             $data['t_hot'] = 0;
         }
        
         tag::find($id)->update($data);
          return back()
           ->with('update_success','Cập nhật Tag Thành Công');
    }
    
    function delete($id){
        DB::table('tags')->where('id',$id)->delete();
        return redirect()
        ->route('get_backend.tag.index')
        ->with('delete_success','Đã Xóa Tag #'.$id);
    }
}
