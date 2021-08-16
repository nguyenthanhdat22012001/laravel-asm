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
                    <div class="myorder-content myorder-detail-content clearfix">
                        <h1 class="page-heading"><span>Đơn hàng của tôi</span></h1>
                        <div class="myorder-block">
                            <div class="row-title docs">Đơn hàng của <a href="#">đạt</a><b> (#{{$order->id}})</b> lúc <span class="grey">{{date('h:m d/m/Y', strtotime($order->created_at))}}</span></div>
                            <div class="table-responsive clearfix myorder-info">
                                <table class="table table-mycart">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Sản phâm</th>
                                            <th>Đơn giá</th>
                                            <th>Giảm Giá</th>
                                            <th>Số lượng</th>
                                            <th>Thành tiền</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($order->get_orderDetail as  $item)
                                        <tr>
                                            <td class="image">
                                                <a href="">
                                                    <img class="img-responsive" src="{{asset('images/product\/')}}{{$item->orD_p_avatar}}" />
                                                </a>
                                            </td>
                                            <td>
                                                <a href="">{{$item->orD_p_name}}</a>
                                            </td>
                                            <td>{{number_format($item->orD_p_price)}} đ</td>
                                            <td>{{$item->orD_p_sale ?? 0}}%</td>
                                            <td>{{$item->orD_qty}}</td>
                                            <td>{{number_format($item->orD_p_subTotal)}} đ</td>
                                        </tr>
                                        @endforeach
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td> <strong>Phí Ship</strong> </td>
                                            <td>{{number_format($order->fk_order_payment->pay_fee_shipping)}} đ</td>
                                        </tr>
                                        <tr>
                                            <td class="border-right" colspan="3">
                                                <div class="box-customer-content">
                                                    <div class="title docs"><span>Thông tin giao hàng</span></div>
                                                    <div>[Anh/Chị]<b> {{$order->or_name}}</b></div>
                                                    <div>
                                                        Số Điện Thoại: {{$order->or_phone}} 
                                                    </div>
                                                    <div>
                                                        Địa Chỉ: {{$order->or_address}} 
                                                    </div>
                                                </div>
                                            </td>
                                            <td colspan="4">
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-left"><b>Tổng tiền thanh toán</b></td>
                                                            <td class="text-right">
                                                                <b class="total-payment">
                                                                    {{number_format($order->or_total)}}đ
                                                                </b>
                                                                <div class="help-block">Bao gồm VAT</div>
                                                            </td>
                                                        </tr>
                                                        <tr class="text-center order-stt">
                                                            <td colspan="2">
                                                                <div class="docs">Trạng thái đơn hàng</div>
                                                                @php
                                                                    if($order->or_status == 1){
                                                                        $status = 'Đang Tiếp Nhận';
                                                                    }else
                                                                    if($order->or_status > 1){
                                                                        $status = 'Đã Tiếp Nhận';
                                                                    }else{
                                                                        $status = 'Đã Hủy';
                                                                    }
                                                                @endphp
                                                                <div class="docs"><b>{{$status}}</b></div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="text-right">
                                <a class="btn btn-default" href="{{route('get.myOrder')}}">Trở về danh sách đơn hàng</a>
                                <a class="btn btn-primary" href="{{route('get.product')}}">Tiếp tục mua hàng</a>
                            </div>
                        </div>
                    </div>
                </div>

        </div>
    </div>
</div>


@stop