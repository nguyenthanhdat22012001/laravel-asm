@extends('layout.frontend2')
@section('content')
         <div class="main">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="breadcrumb clearfix">
                        <ul>
                           <li itemtype="http://shema.org/Breadcrumb" itemscope="" class="home">
                              <a title="Đến trang chủ" href="/" itemprop="url"><span itemprop="title">Trang chủ</span></a>
                           </li>
                           <li class="icon-li"><strong>Hoàn tất</strong> </li>
                        </ul>
                     </div>
                     <script type="text/javascript">
                        $(".link-site-more").hover(function () { $(this).find(".s-c-n").show(); }, function () { $(this).find(".s-c-n").hide(); });
                     </script>
                     <div class="payment-end">
                     @if ( $message = Session::get('success'))
                        <di class="">
                           <div class="alert alert-success fade in">
                              <i class="fa-fw fa fa-check"></i>
                              <strong>Success! </strong>
                              <span>{{$message}}</span>
                           </div>
                        </di>
                     @endif
                        <div class="payment-order clearfix">
                           <h3>Mã đơn hàng của bạn: <b>#{{$order->id}}</b></h3>
                           <p><b>Ngày đặt:</b> <i>{{date('d/m/Y',strtotime($order->created_at))}}</i></p>
                           <p><b>Phương thức thanh toán:</b> <i></i></p>
                           <h1 class="page-heading">Thông tin đơn hàng</h1>
                           <table class="table">
                              <thead>
                                 <tr>
                                    <th>Sản phâm</th>
                                    <th>Đơn giá</th>
                                    <th>Giảm Giá</th>
                                    <th>Số lượng</th>
                                    <th>Thành tiền</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 @foreach($order->get_orderDetail as $key => $item)
                                 <tr>
                                    <td>
                                       <span>  {{$item->orD_p_name}}</span>
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
                                    <td> <strong>Phí Ship</strong> </td>
                                    <td>{{number_format($order->fk_order_payment->pay_fee_shipping)}} đ</td>
                                 </tr>
                              </tbody>
                              <tfoot>
                                 <tr>
                                    <td colspan="4" class="text-right label-payment"><b>Tổng thanh toán:</b></td>
                                    <td class="total-payment">{{number_format($order->or_total )}} đ</td>
                                 </tr>
                              </tfoot>
                           </table>
                          
                        </div>
                        <div class="clearfix col-md-12">
                           <div class="text-right">
                              <a class="btn btn-default" href="{{route('get.product')}}">Tiếp tục mua hàng</a>
                              <a class="btn btn-primary" href="{{route('get.myOrderDetail',$order->id)}}">Đơn hàng của tôi</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
@stop