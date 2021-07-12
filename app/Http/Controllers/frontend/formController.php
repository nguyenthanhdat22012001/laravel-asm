<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class formController extends Controller
{
    protected $folder = 'frontend.form.';
    function login(){
        return view($this->folder.'login');
    }
    function resign(){
        return view($this->folder.'resign');
    }
}
