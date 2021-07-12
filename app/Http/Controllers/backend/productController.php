<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\productRequest;
use App\Models\product;
use App\Models\category;
use App\Models\brand;
use App\Models\discount;
use App\Models\tag;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class productController extends Controller
{
    protected $folder = 'backend.product.';

    function index(){
        $products = product::with('fk_category:id,c_name','fk_brand:id,br_name')
        ->orderByDesc('id')
        ->get();
        $viewData = [
            "products" => $products,
        ];
        /* $data= [];
        foreach($products as $item){
            array_push($data,$item);
        } 
        return $data;*/
         return view($this->folder.'index',$viewData);
        
    }

    function create(){
        $categories = category::orderByDesc('id')->get();
        $brands = brand::orderByDesc('id')->get();
        $tags = tag::orderByDesc('id')->get();
        $discounts = discount::orderByDesc('id')->get();
        $viewData = [
            "categories" => $categories,
            "brands" => $brands,
            "tags" => $tags,
            'discounts' => $discounts,
        ];
        return view($this->folder.'create',$viewData);
    }

    function store(productRequest $request){
       $data = $request->except(['_tokent','p_avatar']);
       $data['p_slug'] = Str::slug($request->p_name);
       $data['created_at']  = Carbon::now();

       if ($request->hasFile('p_avatar')) {
          $p_avatar = $request->file('p_avatar');
          $storedPath = $p_avatar->move('images/product', $p_avatar->getClientOriginalName());
          $data['p_avatar']  = $p_avatar->getClientOriginalName();
        }

        product::create($data);

      return back()
      ->with('success','Tạo Sản Phẩm Thành Công')
      ->withInput();
    }

    function edit($id){
        $product = product::find($id);
        $categories = category::orderByDesc('id')->get();
        $brands = brand::orderByDesc('id')->get();
        $tags = tag::orderByDesc('id')->get();
        $discounts = discount::orderByDesc('id')->get();
        $viewData = [
            "categories" => $categories,
            "brands" => $brands,
            "tags" => $tags,
            'discounts' => $discounts,
            "product" => $product
        ];
        return view($this->folder.'update',$viewData);
    }

    function update(productRequest $request , $id){
       $data = $request->except(['_tokent','p_avatar']);
       $data['p_slug'] = Str::slug($request->p_name);
       $data['updated_at']  = Carbon::now();

       if ($request->has('p_active')) {
            $data['p_active'] = 1;
        }else{
            $data['p_active'] = 0;
        }

        if ($request->has('p_hot')) {
            $data['p_hot'] = 1;
        }else{
            $data['p_hot'] = 0;
        }
        
        if ($request->hasFile('p_avatar')) {
            $p_avatar = $request->file('p_avatar');
            $storedPath = $p_avatar->move('images/product', $p_avatar->getClientOriginalName());
            $data['p_avatar']  = $p_avatar->getClientOriginalName();
        }
        
         product::find($id)->update($data);
          return redirect()
           ->route('get_backend.product.index')
           ->with('update_success','Cập nhật Sản Phẩm Thành Công');
    }
    
    function delete($id){
        DB::table('products')->where('id',$id)->delete();
        return redirect()
        ->route('get_backend.product.index')
        ->with('delete_success','Đã Xóa Sản Phẩm #'.$id);
    }
}
