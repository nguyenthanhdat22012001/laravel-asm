<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;
use App\Models\discount;
use App\Models\category;
use App\Models\brand;
use App\Models\blog;

class homeController extends Controller
{
    protected $folder = 'frontend.home.';
    function index(){
        $productsDiscount = product::with('fk_discount:id,d_number')
        ->where('p_active',1)
        ->limit(10)
        ->orderByDesc('id')
        ->get();
        //thoi trang
        $category_thoi_trang = category::select('id','c_name','c_slug','c_avatar','c_banner')->where('c_slug','thoi-trang')->first();
        $getlistcategory_thoi_trang = category::select('id','c_name','c_slug')->where('c_parent',$category_thoi_trang->id)->get();
        $listcategoryId_thoi_trang = array();
        foreach($getlistcategory_thoi_trang as $item ){
            array_push($listcategoryId_thoi_trang,$item->id);
        };
        $productsAll_thoi_trang =  product::with('fk_discount:id,d_number,d_active','fk_category:id,c_name,c_slug')
        ->whereIn('p_category_id',$listcategoryId_thoi_trang)->limit(6)->get();
         //trang sức
         $category_trang_suc = category::select('id','c_name','c_slug','c_avatar','c_banner')->where('c_slug','trang-suc')->first();
         $getlistcategory_trang_suc = category::select('id','c_name','c_slug')->where('c_parent',$category_trang_suc->id)->get();
         $listcategoryId_trang_suc = array();
         foreach($getlistcategory_trang_suc as $item ){
             array_push($listcategoryId_trang_suc,$item->id);
         };
         $productsAll_trang_suc =  product::with('fk_discount:id,d_number,d_active','fk_category:id,c_name,c_slug')
         ->whereIn('p_category_id',$listcategoryId_trang_suc)->limit(6)->get();
        //dd($productsAll_trang_suc);
         // lay blog new
        $viewData = [
            "productsDiscount" => $productsDiscount,
            // category_thoi_trang
            "category_thoi_trang" => $category_thoi_trang,
            "getlistcategory_thoi_trang" => $getlistcategory_thoi_trang,
           // "products_thoi_trang" => $products_thoi_trang,
            "productsAll_thoi_trang" => $productsAll_thoi_trang,
            //category_trang_suc
            "category_trang_suc" => $category_trang_suc,
            "getlistcategory_trang_suc" => $getlistcategory_trang_suc,
            //"products_trang_suc" => $products_trang_suc,
            "productsAll_trang_suc" => $productsAll_trang_suc,
        ];
        return view($this->folder.'index',$viewData);
    }
}
