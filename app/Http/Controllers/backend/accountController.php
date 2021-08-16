<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\userRequest;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class accountController extends Controller
{
    protected $folder = 'backend.account.';

    function index(){
        $accounts = User::where('role','!=','user')->orderByDesc('id')->get();
        $viewData = [
            "accounts" => $accounts,
        ];
        return view($this->folder.'index',$viewData);
    }
    function create(){
        $roles = array('manager','admin');
        $viewData = [
            'roles' => $roles
        ];
        return view($this->folder.'create',$viewData);
    }

    function store(userRequest $request){
       $data = $request->except(['_tokent','avatar','password_confirmation']);
       $data['created_at']  = Carbon::now();
       $data['password']  = Hash::make($request['password']);

       if ($request->hasFile('avatar')) {
          $avatar = $request->file('avatar');
          $storedPath = $c_avatar->move('images/account', $avatar->getClientOriginalName());
          $data['avatar']  = $avatar->getClientOriginalName();
        }

        User::create($data);

      return back()
      ->with('success','Tạo Thành Viên Thành Công')
      ->withInput();
    }

    function edit($id){
     $user = User::find($id);
     $roles = array('manager','admin');
     $viewData = [
        'user' => $user,
        'roles' => $roles
    ];
        return view($this->folder.'update',$viewData);
    }

    function update(userRequest $request , $id){
        $data = $request->except(['_tokent','avatar']);
        $data['updated_at']  = Carbon::now();
 
        if ($request->hasFile('avatar')) {
           $avatar = $request->file('avatar');
           $storedPath = $c_avatar->move('images/account', $avatar->getClientOriginalName());
           $data['avatar']  = $avatar->getClientOriginalName();
         }
        
         User::find($id)->update($data);
          return redirect()
           ->route('get_backend.category.index')
           ->with('update_success','Cập nhật Danh Mục Thành Công');
    }
    
    function delete($id){
        DB::table('users')->where('id',$id)->delete();
        return redirect()
        ->route('get_backend.category.index')
        ->with('delete_success','Đã Xóa Thành Viên #'.$id);
    }
}
