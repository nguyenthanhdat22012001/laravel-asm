<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\blog;
use App\Models\categoryBlog;

class blogController extends Controller
{
    protected $folder = 'frontend.blog.';
    function index(){
        $title = "TẤT CẢ BÀI VIẾT";
        $blogs = blog::where('bl_active',1)->orderByDesc('id') ->paginate(4);
        $viewData = [
            'title' => $title,
            'blogs' => $blogs,
        ];
        return view($this->folder.'index',$viewData);
    }
    function categoryblog($slug){
        $categoryBlog = categoryBlog::where('cbl_slug',$slug)->first();
        $blogs = blog::where('bl_categoryBlog_id',$categoryBlog->id)
        ->where('bl_active',1)->orderByDesc('id') ->paginate(4);
        $title = $categoryBlog->cbl_name ;
        $viewData = [
            'title' => $title,
            'blogs' => $blogs,
        ];
        return view($this->folder.'index',$viewData);
    }
    function detail($slug){
        $blogDetail = blog::where('bl_slug',$slug)->first();
        $viewData = [
            'blogDetail' => $blogDetail,
        ];
        return view($this->folder.'detail',$viewData);
    }

}
