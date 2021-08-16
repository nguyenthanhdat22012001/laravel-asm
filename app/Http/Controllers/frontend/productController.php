<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;
use App\Models\category;
use App\Models\brand;
use App\Models\discount;
use App\Models\tag;
use App\Models\rating_Comment;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class productController extends Controller
{
    protected $folder = 'frontend.product.';

    function index(){
        $products = product::with('fk_discount:id,d_number,d_active','fk_category:id,c_name,c_slug')
        ->paginate(8);

  
        $viewData = [
            'products' => $products,
        ];
        return view($this->folder.'index',$viewData);
    }

    function detail($slug){
       $product = product::with('fk_discount:id,d_number,d_active','fk_category:id,c_name,c_slug')
       ->where('p_slug',$slug)
       ->first();
       product::find($product->id)->increment('p_view'); 
       $ratingComment = rating_Comment::with('fk_userRatingComment:id,name,avatar,google_id')
       ->orderByDesc('created_at')
       ->where('rc_p_id',$product->id)->get();
       $sumStars = rating_Comment::where('rc_p_id',$product->id)->avg('rc_stars');

      //dd($sumStars);
       $viewData = [
           'product' => $product,
           'ratingComment' => $ratingComment,
           'sumStars' => floor($sumStars),
       ];
        return view($this->folder.'detail',$viewData);
    }

    function categoryProduct($param_c_slug){
        $listcategoryId = array();
        $category = category::select('id','c_name')->where('c_slug',$param_c_slug)->first();
        $getlistcategory = category::select('id')->where('c_parent',$category->id)->get();
        if(!empty($getlistcategory)){ 
        foreach($getlistcategory as $item ){
            array_push($listcategoryId,$item->id);
        };
        }else{
            array_push($listcategoryId,$category->id);
        }
        $products = product::with('fk_discount:id,d_number,d_active','fk_category:id,c_name,c_slug')
        ->whereIn('p_category_id',$listcategoryId)->paginate(8);
        $viewData = [
            'param_c_slug' => $param_c_slug,
            'category' => $category,
            'products' => $products,
        ];
        return view($this->folder.'index',$viewData);
    }

    function search($search){
        $products = product::with('fk_discount:id,d_number,d_active','fk_category:id,c_name,c_slug')
        ->where('p_name','LIKE','%'.$search.'%')->paginate(8);
        $viewData = [
            'search' => $search,
            'products' => $products,
        ];
        return view($this->folder.'search',$viewData);
    }
}
