<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class productController extends Controller
{
    protected $folder = 'frontend.product.';
    function index(){
        return view($this->folder.'index');
    }
    function detail(){
        return view($this->folder.'detail');
    }
    function search(){
        return view($this->folder.'search');
    }
}
