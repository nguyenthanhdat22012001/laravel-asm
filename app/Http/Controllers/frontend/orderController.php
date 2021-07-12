<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class orderController extends Controller
{
    protected $folder = 'frontend.order.';
    function cart(){
        return view($this->folder.'cart');
    }
    function checkOut(){
        return view($this->folder.'checkOut');
    }
    function success(){
        return view($this->folder.'success');
    }
    function search(){
        return view($this->folder.'search');
    }
}
