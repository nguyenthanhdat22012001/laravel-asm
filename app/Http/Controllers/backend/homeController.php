<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class homeController extends Controller
{
   protected $folder = 'backend.dashboard.';
    function index(){
        return view($this->folder.'index');
    }
}
