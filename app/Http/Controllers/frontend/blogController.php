<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class blogController extends Controller
{
    protected $folder = 'frontend.blog.';
    function index(){
        return view($this->folder.'index');
    }
    function detail(){
        return view($this->folder.'detail');
    }

}
