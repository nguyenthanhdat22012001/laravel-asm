<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class aboutController extends Controller
{
    protected $folder = 'frontend.about.';
    function index(){
        return view($this->folder.'index');
    }
}
