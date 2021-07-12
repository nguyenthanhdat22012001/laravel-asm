<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class contactController extends Controller
{
    protected $folder = 'frontend.contact.';
    function index(){
        return view($this->folder.'index');
    }
}
