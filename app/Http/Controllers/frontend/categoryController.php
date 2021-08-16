<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;
use App\Models\category;
use App\Models\brand;
use App\Models\discount;
use App\Models\tag;

class categoryController extends Controller
{
    protected $folder = 'frontend.product.';
    function index($param_c_slug){
        $category = category::select('id','c_name')->where('c_slug',$param_c_slug)->first();
        $getlistcategory = category::select('id')->where('c_parent',$category->id)->get();
        $listcategoryId = array();
        foreach($getlistcategory as $item ){
            array_push($listcategoryId,$item->id);
        };
        $products = product::with('fk_discount:id,d_number,d_active','fk_category:id,c_name,c_slug')
        ->whereIn('p_category_id',$listcategoryId)->paginate(3);
        $viewData = [
            'param_c_slug' => $param_c_slug,
            'category' => $category,
            'products' => $products,
        ];
        return view($this->folder.'index',$viewData);
    }
}
