<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\categoryChildRequest;
use App\Models\categoryChild;
use Illuminate\Support\Str;
use App\Models\category;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class categoryChildController extends Controller
{
    protected $folder = 'backend.categoryChild.';

    function index(){
        $categoryChilds = categoryChild::with('category_parent:id,c_name')->orderByDesc('id')->get();
        $categories = category::orderByDesc('id')->get();
        $viewData = [
            "categoryChilds" => $categoryChilds,
            "categories" => $categories,
        ];
        return view($this->folder.'index',$viewData);
    }

    function create(){

    }

    function store(categoryChildRequest $request){
       $data = $request->except(['_tokent']);
       $data['cchild_slug'] = Str::slug($request->cchild_name);
       $data['created_at']  = Carbon::now();

       if ($request->has('cchild_active')) {
        $data['cchild_active'] = 1;
        }else{
            $data['cchild_active'] = 0;
        }

        categoryChild::create($data);

      return back()
      ->with('success','Tạo danh mục con Thành Công')
      ->withInput();
    }

    function edit($id){
        $categoryChilds = categoryChild::orderByDesc('id')->get();
        $categoryChild = categoryChild::find($id);
        $categories = category::orderByDesc('id')->get();
        $viewData = [
            "categoryChilds" => $categoryChilds,
            "categoryChild" => $categoryChild,
            "categories" => $categories,
        ];
        return view($this->folder.'update',$viewData);
    }

    function update(categoryChildRequest $request , $id){
        $data = $request->except(['_tokent']);
        $data['cchild_slug'] = Str::slug($request->cchild_name);
        $data['updated_at']  = Carbon::now();
 
        if ($request->has('cchild_active')) {
         $data['cchild_active'] = 1;
         }else{
             $data['cchild_active'] = 0;
         }
 

        
         categoryChild::find($id)->update($data);
          return back()
           ->with('update_success','Cập nhật danh mục con Thành Công');
    }
    
    function delete($id){
        DB::table('category_children')->where('id',$id)->delete();
        return redirect()
        ->route('gecchild_backend.categoryChild.index')
        ->with('delete_success','Đã Xóa danh mục con #'.$id);
    }
}
