<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class customerController extends Controller
{
    protected $folder = 'backend.customer.';

    function index(){
        $users = User::where('role','user')->orderByDesc('id')->get();
        $viewData = [
            "users" => $users,
        ];
        return view($this->folder.'index',$viewData);
    }
    function delete($id){
        DB::table('users')->where('id',$id)->delete();
        return redirect()
        ->route('get_backend.category.index')
        ->with('delete_success','Đã Xóa Khách Hàng #'.$id);
    }
}
