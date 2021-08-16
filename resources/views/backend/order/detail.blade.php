@extends('layout.backend')
@section('title','Đơn hàng')
@section('content')

<div class="col-lg-12">

<div class="col-lg-12">
        <div class="card card-default">
            <div class="card-body">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active show" id="order-custom-tab" data-toggle="pill" href="#order-custom" role="tab" aria-controls="order-custom" aria-selected="true">
                            <i class="mdi mdi-star mr-1"></i> Đơn Hàng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="customer-tab" data-toggle="pill" href="#customer" role="tab" aria-controls="customer" aria-selected="false">
                            <i class="mdi mdi-account mr-1"></i> Khách Hàng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="note-admin-tab" data-toggle="pill" href="#note-admin" role="tab" aria-controls="note-admin" aria-selected="false">
                            <i class="mdi mdi-phone mr-1"></i> Ghi Chú Đơn Hàng</a>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade active show" id="order-custom" role="tabpanel" aria-labelledby="order-custom-tab">
                       
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Sản Phẩm</th>
                                <th scope="col">Giá</th>
                                <th scope="col">Giảm Giá</th>
                                <th scope="col">Số Lượng</th>
                                <th scope="col">Thành Tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $order->get_orderDetail as $item )
                            <tr>
                                <td><img src="{{asset('images/product\/')}}{{$item->orD_p_avatar}}" alt="" style="width:50px; height:auto"></td>
                                <td>{{$item->orD_p_name}}</td>
                                <td>{{number_format($item->orD_p_price)}}đ</td>
                                <td>{{$item->orD_p_sale > 0 ? $item->orD_p_sale : 0}}%</td>
                                <td>{{$item->orD_qty}}</td>
                                <td>{{number_format($item->orD_p_subTotal)}}đ</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <th colspan="3" class="text-center" style="color:red;"> <strong>Tổng Tiền</strong> </th>
                            <th  colspan="3" class="text-center" style="color:red;">{{number_format($order->or_total)}}đ</th>
                        </tfoot>
                    </table>

                    </div>
                    <div class="tab-pane fade" id="customer" role="tabpanel" aria-labelledby="customer-tab">
                    <table class="table table-bordered">
                    <tbody>
                        <td>

                            <p>
                                Họ Tên : <strong>{{$order -> or_name}}</strong>
                            </p>
                            <p>
                                Số Điện Thoại : <strong>{{$order -> or_phone}}</strong>
                            </p>
                            <p>
                                Email : <strong>{{$order -> or_email}}</strong>
                            </p>
                            <p>
                                Địa Chỉ : <strong>{{$order -> or_address}}</strong>
                            </p>
                            <p>
                                Phương Thức Thanh Toán : <strong>{{$order -> fk_order_payment->pay_name}}</strong>
                            </p>
                        </td>
                        
                        <td>
                            Ghi Chú:  {{$order -> or_note}}
                        </td>
                        </tbody>
                    </table>
                     
                    </div>
                    <div class="tab-pane fade" id="note-admin" role="tabpanel" aria-labelledby="note-admin-tab">
                    <table class="table table-bordered">				
                        <tbody>
                          <td id="list_note_admin" style="width:50%">
                          @include('backend.order.list_note_admin')
                          </td>
                          <td  style="width:50%">
                              <div class="form-group">
                                    <textarea class="form-control" id="noteAdminOrder_comment" placeholder="Ghi chú đơn hàng" rows="3"></textarea>
                                    <div class="form-footer pt-5 border-top float-right">
                                        <button type="button" id="btn_note_admin" class="btn btn-primary btn-default">Gửi Ghi Chú</button>
                                    </div>
                             </div>
                          </td>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<input type="hidden" id="noteAdminOrder_u_id" value="{{Auth::user()->id}}">
<input type="hidden" id="noteAdminOrder_or_id" value="{{$order->id}}">
<script>
     $("#btn_note_admin").click(function () {
                 postNoteAdmin();
        });
    function postNoteAdmin(){
        let _token   = $('meta[name="csrf-token"]').attr('content');
        let noteAdminOrder_comment = $('#noteAdminOrder_comment').val();
        let noteAdminOrder_u_id = $('#noteAdminOrder_u_id').val();
        let noteAdminOrder_or_id = $('#noteAdminOrder_or_id').val();
        var data = {
            _token: _token,
            noteAdminOrder_comment: noteAdminOrder_comment,
            noteAdminOrder_u_id:noteAdminOrder_u_id,
            noteAdminOrder_or_id:noteAdminOrder_or_id
        };
            $.ajax({
                type: 'POST',
                url: '{{route("get_backend.order.postCommnetAdmin")}}',
                data:data,
                success: function (res) { 
                    console.log(res);
                    rederNoteAdmin(res);
                },
                error: function (XMLHttpRequest, textStatus) {
                console.log(XMLHttpRequest, textStatus);
                }
            });
    }
    function rederNoteAdmin(res){
           $('#list_note_admin').empty();
           $('#list_note_admin').html(res);
    }
</script>

@stop