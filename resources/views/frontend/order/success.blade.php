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
                        <div class="">
                           <div class="alert alert-success fade in">
                              <i class="fa-fw fa fa-check"></i>
                              <strong>Success! </strong>
                              <span>Đơn hàng của bạn đã được mua thành công</span>
                           </div>
                        </div>
                        <div class="payment-order clearfix">
                           <h3>Mã đơn hàng của bạn: <b>#100000115</b></h3>
                           <p><b>Ngày đặt:</b> <i>17/06/2021</i></p>
                           <p><b>Phương thức thanh toán:</b> <i></i></p>
                           <h1 class="page-heading">Thông tin đơn hàng</h1>
                           <table class="table">
                              <thead>
                                 <tr>
                                    <th>STT</th>
                                    <th>Sản phâm</th>
                                    <th>Đơn giá</th>
                                    <th>Số lượng</th>
                                    <th>Thành tiền</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                    <td>1</td>
                                    <td>
                                       <span>  Đầm body cá tình với nhiều màu sắc hiện đại, trẻ trung</span>
                                       <p class="note">Đỏ</p>
                                    </td>
                                    <td>400.000</td>
                                    <td>2</td>
                                    <td>800.000đ</td>
                                 </tr>
                              </tbody>
                              <tfoot>
                                 <tr>
                                    <td colspan="4" class="text-right label-payment"><b>Tổng thanh toán:</b></td>
                                    <td class="total-payment">800.000 đ</td>
                                 </tr>
                              </tfoot>
                           </table>
                          
                        </div>
                        <div class="clearfix col-md-12">
                           <div class="text-right">
                              <a class="btn btn-default" href="/">Tiếp tục mua hàng</a>
                              <a class="btn btn-primary" href="/don-hang.html">Đơn hàng của tôi</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
@stop