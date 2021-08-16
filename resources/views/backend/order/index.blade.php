@extends('layout.backend')
@section('title','Danh Sách Đơn Hàng')
@section('content')

<div class="col-lg-12">
@if ($message = Session::get('update_success'))
            <div class="alert alert-dismissible fade show alert-success" role="alert">
                <strong>{{ $message }}</strong>
            </div>
 @endif
 @if ($message = Session::get('delete_success'))
            <div class="alert alert-dismissible fade show alert-success" role="alert">
                <strong>{{ $message }}</strong>
            </div>
 @endif
            <div class="basic-data-table">
    <div id="basic-data-table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
<table class="table">
  <thead class="thead-dark">
    <tr>
    <th scope="col">Mã Đơn</th>
      <th scope="col">Người Nhận</th>
      <th scope="col">Tổng Tiền</th>
      <th scope="col">Trạng thái</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
  @foreach($orders as $item)
  @php
    if($item->or_status == 1){
        $status = 'Tiếp nhận';
        $status_badge = 'badge-warning';
    }else 
    if($item->or_status ==2){
        $status = 'Đã tiếp nhận';
        $status_badge = 'badge-success';
    }else{
        $status = 'Đã hủy';
        $status_badge = 'badge-danger';
    }
  @endphp
    <tr>
      <td>#{{$item->id}}</td>
      <td>{{$item->fk_order_user->name}}</td>
      <td>{{number_format($item->or_total)}}đ</td>
      <td class="box_order_status">
        <span class="badge {{$status_badge}}" id="order_starus_id_{{$item->id}}">{{$status }}</span>
          <ul class="list_order_status" id="list_order_status">
            <li> <a  data-id="{{$item->id}}" data-status="1" onclick="putOrderStatus(this)">Tiếp nhận</a> </li>
            <li> <a  data-id="{{$item->id}}" data-status="2" onclick="putOrderStatus(this)">Đã tiếp nhận</a></li>
            <li> <a  data-id="{{$item->id}}" data-status="0" onclick="putOrderStatus(this)">Hủy</a> </li>
          </ul>
      </td>
      <td>
      <a type="button" href="{{route('get_backend.order.detail',$item->id)}}" class="mb-1 btn btn-pill btn-outline-warning"><i class="mdi mdi-grease-pencil"></i></a>
      <a type="button" href="{{route('get_backend.order.delete',$item->id)}}" class="mb-1 btn btn-pill btn-outline-danger"><i class="mdi mdi-delete"></i></a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
        <div class="row justify-content-between bottom-information">
            <div class="dataTables_info" id="basic-data-table_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
            <div class="dataTables_paginate paging_simple_numbers" id="basic-data-table_paginate">
                <ul class="pagination">
                    <li class="paginate_button page-item previous disabled" id="basic-data-table_previous"><a href="#" aria-controls="basic-data-table" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                    <li class="paginate_button page-item active"><a href="#" aria-controls="basic-data-table" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                    <li class="paginate_button page-item"><a href="#" aria-controls="basic-data-table" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                    <li class="paginate_button page-item"><a href="#" aria-controls="basic-data-table" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                    <li class="paginate_button page-item"><a href="#" aria-controls="basic-data-table" data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                    <li class="paginate_button page-item"><a href="#" aria-controls="basic-data-table" data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
                    <li class="paginate_button page-item"><a href="#" aria-controls="basic-data-table" data-dt-idx="6" tabindex="0" class="page-link">6</a></li>
                    <li class="paginate_button page-item next" id="basic-data-table_next"><a href="#" aria-controls="basic-data-table" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li>
                </ul>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>

</div>

<style>
  .box_order_status{
    position: relative;
    cursor: pointer;
  }
  .list_order_status{
    position: absolute;
    top:30%;
    right:0%;
    width: 100px;
    z-index: 999;
  }

  .list_order_status{
    border: 1px solid #ccc;
    
    display: none;
  }
  .list_order_status li{
    border-bottom: 1px solid #ccc;
    padding: 7px 10px;
    background-color: #6c757d;
  }
  .list_order_status li a{
    color: #fff !important;
  }
  /* .list_order_status li a{
    display: block;
  } */
  .box_order_status:hover .list_order_status{
    display: block;
    top:30%;
    transition: all 0.5s ease-out;
  }
  .list_order_status li:hover{
    background-color: #4c84ff;
    transition: background-color 0.25s ease;
  }
</style>

<script>
    function putOrderStatus(btn){
        let _token   = $('meta[name="csrf-token"]').attr('content');
        let id = $(btn).attr('data-id');
        let or_status =  $(btn).attr('data-status');
        var data = {
            _token: _token,
            id: id,
            or_status:or_status
        };
            $.ajax({
                type: 'POST',
                url: '{{route("get_backend.order.putOrderStatus")}}',
                data:data,
                success: function (res) { 
                    console.log(res);
                    rederOrderStatus(res);
                },
                error: function (XMLHttpRequest, textStatus) {
                console.log(XMLHttpRequest, textStatus);
                }
            });
    }
    function rederOrderStatus(res){
           $('#order_starus_id_'+res.id).text(res.status);
           $('#order_starus_id_'+res.id).removeClass().addClass( res.status_badge );
    }
</script>

@stop