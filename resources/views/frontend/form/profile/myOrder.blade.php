@extends('layout.frontend2')
@section('content')
<div class="main">
    <div class="container">
        <div class="row">
             @include('frontend.form.profile.sidebar')
             <div class="col-md-9">
                <div class="breadcrumb clearfix">
                    <ul>
                        <li itemtype="http://shema.org/Breadcrumb" itemscope="" class="home">
                            <a title="Đến trang chủ" href="/" itemprop="url"><span itemprop="title">Trang chủ</span></a>
                        </li>
                        <li class="icon-li"><strong>Đơn hàng của tôi</strong></li>
                    </ul>
                </div>
                <script type="text/javascript">
                    $(".link-site-more").hover(
                        function () {
                            $(this).find(".s-c-n").show();
                        },
                        function () {
                            $(this).find(".s-c-n").hide();
                        }
                    );
                </script>

                <div class="myorder-content clearfix">
                    <h1 class="page-heading"><span>Đơn hàng của tôi</span></h1>
                    <div class="myorder-block">
                        <div class="table-responsive clearfix myorder-info">
                            <table class="table table-mycart">
                                <thead>
                                    <tr>
                                        <th>Mã đơn hàng</th>
                                        <th>Tên khách hàng</th>
                                        <th>Tổng tiền</th>
                                        <th>Vận chuyển</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($order as $key => $item)
                                        @php
                                            if($item->or_status == 1){
                                                $status = 'Đang Tiếp Nhận';
                                            }else
                                            if($item->or_status > 1){
                                                $status = 'Đã Tiếp Nhận';
                                            }else{
                                                $status = 'Đã Hủy';
                                            }
                                        @endphp
                                        <tr>
                                            <td><a href="{{route('get.myOrderDetail',$item->id)}}">#{{$item->id}}</a></td>
                                            <td><a href="#">{{$item->or_name}}</a></td>
                                            <td>{{number_format($item->or_total)}}đ</td>
                                            <td>{{$status}}</td>
                                            <td class="text-center">
                                                <a href="{{route('get.myOrderDetail',$item->id)}}"><i class="fa fa-angle-double-right"></i>Xem đơn hàng</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@stop