<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class homeController extends Controller
{
    protected $folder = 'frontend.home.';
    function index(){
        return view($this->folder.'index');
    }
}
