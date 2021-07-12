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
                           <li class="icon-li"><strong>Kiểm tra đơn hàng</strong> </li>
                        </ul>
                     </div>
                     <script type="text/javascript">
                        $(".link-site-more").hover(function () { $(this).find(".s-c-n").show(); }, function () { $(this).find(".s-c-n").hide(); });
                     </script>
                     <script src="/app/services/orderServices.js"></script>
                     <script src="/app/controllers/orderController.js"></script>
                     <div class="order-tracking-content clearfix ng-scope" ng-controller="orderController" ng-init="initController()">
                        <h1 class="page-heading"><span>Kiểm tra đơn hàng</span></h1>
                        <div class="order-tracking-block">
                           <!-- ngIf: Id<0 -->
                           <form class="form-inline order-input ng-dirty ng-valid-parse ng-valid ng-valid-required ng-submitted" ng-submit="searchOrder()" abineguid="2AB6B72273C246DF8B6CB4FD41769FE4">
                              <div class="form-group">
                                 <label>Nhập mã đơn hàng</label>
                                 <input type="text" class="form-control ng-dirty ng-valid-parse ng-valid ng-valid-required ng-touched" placeholder="Mã số đơn hàng (VD:123456789)" ng-model="AutoCode" ng-required="true" required="required">
                                 <button class="btn btn-primary">Xem ngay</button>
                              </div>
                           </form>
                           <!-- ngIf: Id>0 -->
                           <div ng-if="Id>0" class="ng-scope">
                              <h2>Thông tin đơn hàng</h2>
                              <div class="row-title docs">Đơn hàng của <a href="#" class="ng-binding">nguyên dat</a><b class="ng-binding"> (#100000115)</b> lúc <span class="grey ng-binding">2021-06-17T22:42:54.547</span></div>
                              <div class="table-responsive clearfix order-tracking-info">
                                 <table class="table table-mycart">
                                    <thead>
                                       <tr>
                                          <th>STT</th>
                                          <th colspan="2">Tên sản phẩm</th>
                                          <th>Giá</th>
                                          <th>Số lượng</th>
                                          <th>Thành tiền</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <!-- ngRepeat: item in OrderDetails -->
                                       <tr ng-repeat="item in OrderDetails" class="ng-scope">
                                          <td class="ng-binding">1</td>
                                          <td class="image">
                                             <a href="/san-pham/dam-body-ca-tinh-voi-nhieu-mau-sac-hien-dai-tre-trung.html"><img src="{{asset('images/product/p35_large.jpg')}}" class="img-responsive"></a>
                                          </td>
                                          <td>
                                             <a href="/san-pham/dam-body-ca-tinh-voi-nhieu-mau-sac-hien-dai-tre-trung.html" class="ng-binding">Đầm body cá tình với nhiều màu sắc hiện đại, trẻ trung</a>
                                             <!-- ngIf: item.IsVariant==true -->
                                             <p class="note ng-binding ng-scope" ng-if="item.IsVariant==true">Đỏ</p>
                                             <!-- end ngIf: item.IsVariant==true -->
                                          </td>
                                          <td class="ng-binding">400000 đ</td>
                                          <td class="ng-binding">2</td>
                                          <td class="ng-binding">800,000 đ</td>
                                       </tr>
                                       <!-- end ngRepeat: item in OrderDetails -->
                                       <tr>
                                          <td colspan="3" class="border-right">
                                             <div class="box-customer-content">
                                                <div class="title"><span>Thông tin giao hàng</span></div>
                                                <div>[Anh/Chị]<b class="ng-binding"> nguyên dat</b></div>
                                                <div class="ng-binding">
                                                   nguyenthanhdat22012001@gmail.com |
                                                   270 cộng hòa |
                                                   980789789
                                                </div>
                                             </div>
                                             <div class="box-customer-content">
                                                <div class="title"><span>Thông tin thanh toán</span></div>
                                                <div>[Anh/Chị]<b class="ng-binding">nguyên dat</b></div>
                                                <div class="ng-binding">
                                                   nguyenthanhdat22012001@gmail.com |
                                                   270 cộng hòa |
                                                   980789789
                                                </div>
                                             </div>
                                          </td>
                                          <td colspan="4">
                                             <table class="table">
                                                <tbody>
                                                   <tr>
                                                      <td class="text-left"><b>Tổng tiền thanh toán</b></td>
                                                      <td class="text-right ">
                                                         <b class="total-payment ng-binding">
                                                         800,000
                                                         </b>
                                                         <p class="note"></p>
                                                      </td>
                                                   </tr>
                                                   <tr class="text-center order-stt">
                                                      <td colspan="2">
                                                         <div>Trạng thái đơn hàng</div>
                                                         <div><b class="ng-binding">Chưa</b></div>
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
                                 <a class="btn btn-default" href="/don-hang.html">Trở về danh sách đơn hàng</a>
                                 <a class="btn btn-primary" href="/">Tiếp tục mua hàng</a>
                              </div>
                           </div>
                           <!-- end ngIf: Id>0 -->
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
@stop