<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\order;
use App\Models\orderDetail;
use App\Models\noteAdminOrder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

class orderController extends Controller
{
    protected $folder = 'backend.order.';

    function index(){
        $orders = order::with('fk_order_user:id,name')->orderByDesc('id')->paginate(10);
        $viewData = [
            "orders" => $orders,
        ];
        return view($this->folder.'index',$viewData);
    }

    function detail($id){
        $order = order::with('get_orderDetail','fk_order_payment')->where('id',$id)->orderByDesc('id')->first();
        $noteAdmin = noteAdminOrder::with('fk_note_admin:id,name')
        ->where('noteAdminOrder_or_id',$id)
        ->orderByDesc('created_at')
        ->get();
        //dd($noteAdmin );
        $viewData = [
            "order" => $order,
            "noteAdmin" => $noteAdmin,
        ];
        return view($this->folder.'detail',$viewData);
    }

    
    function postCommnetAdmin(Request $request){
        $data = $request->except(['_tokent']);
        $data['created_at'] =  Carbon::now();
        noteAdminOrder::create($data);
        $noteAdmin = noteAdminOrder::with('fk_note_admin:id,name')
        ->where('noteAdminOrder_or_id',$request->noteAdminOrder_or_id)
        ->orderByDesc('created_at')
        ->get();
        $viewData = [
            "noteAdmin" => $noteAdmin,
        ];
        return view($this->folder.'list_note_admin',$viewData);
    }

    function putOrderStatus(Request $request){
        $data = $request->except(['_tokent']);
        $data['updated_at'] =  Carbon::now();
        order::find($request->id)->update($data);

        if($data['or_status'] == 1){
            $status = 'Tiếp nhận';
            $status_badge = 'badge badge-warning';
        }else 
        if($data['or_status'] ==2){
            $status = 'Đã tiếp nhận';
            $status_badge = 'badge badge-success';
        }else{
            $status = 'Đã hủy';
            $status_badge = 'badge badge-danger';
        }
       // $orders = order::with('fk_order_user:id,name')->orderByDesc('id')->paginate(10);
        $viewData = [
            "id" => $data['id'],
            "status" => $status,
            'status_badge'=> $status_badge,
        ];
        return response()->json($viewData, 200);
       // return view($this->folder.'status_order',$viewData);
    }
    
    function delete($id){
        DB::table('orders')->where('id',$id)->delete();
        return redirect()
        ->route('get_backend.order.index')
        ->with('delete_success','Đã Xóa Đơn Hàng #'.$id);
    }

  

}
