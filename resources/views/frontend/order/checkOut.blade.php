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
                           <li class="icon-li"><strong>Thanh toán</strong> </li>
                        </ul>
                     </div>
                     <script type="text/javascript">
                        $(".link-site-more").hover(function () { $(this).find(".s-c-n").show(); }, function () { $(this).find(".s-c-n").hide(); });
                     </script>
                     <script src="/app/services/orderServices.js"></script>
                     <script src="/app/controllers/orderController.js"></script>
                     <div class="payment-content ng-scope" ng-controller="orderController" ng-init="initCheckoutController()">
                        <h1 class="page-heading"><span>Thanh toán</span></h1>
                        <div class="steps clearfix">
                           <ul class="clearfix">
                              <li class="cart active col-md-2 col-xs-12 col-sm-4 col-md-offset-3 col-sm-offset-0 col-xs-offset-0"><span><i class="glyphicon glyphicon-shopping-cart"></i></span><span>Giỏ hàng của tôi</span><span class="step-number"><a>1</a></span></li>
                              <li class="payment active col-md-2 col-xs-12 col-sm-4"><span><i class="glyphicon glyphicon-usd"></i></span><span>Thanh toán</span><span class="step-number"><a>2</a></span></li>
                              <li class="finish col-md-2 col-xs-12 col-sm-4"><span><i class="glyphicon glyphicon-ok"></i></span><span>Hoàn tất</span><span class="step-number"><a>3</a></span></li>
                           </ul>
                        </div>
                        <form class="payment-block clearfix ng-dirty ng-invalid ng-invalid-required ng-valid-email ng-valid-parse" id="checkout-container" ng-submit="checkout()" abineguid="78694062FCBF434488F63FE79FD42C78">
                           <div class="col-md-4 col-sm-12 col-xs-12 payment-step step2">
                              <h4>1. Địa chỉ thanh toán và giao hàng</h4>
                              <div class="step-preview clearfix">
                                 <h2 class="title">Thông tin thanh toán</h2>
                                 <!-- ngIf: CustomerId>0 -->
                                 <!-- ngIf: CustomerId<=0 -->
                                 <div class="form-block ng-scope" ng-if="CustomerId<=0">
                                    <div class="user-login"><a href="/dang-ky.html">Đăng ký tài khoản mua hàng</a><a href="/dang-nhap.html">Đăng nhập</a></div>
                                    <label>Mua hàng không cần tài khoản</label>
                                    <div class="form-group"><input class="form-control ng-pristine ng-untouched ng-invalid ng-invalid-required" placeholder="Họ &amp; Tên" type="text" ng-model="$parent.CustomerName" required=""></div>
                                    <div class="form-group"><input class="form-control ng-pristine ng-untouched ng-invalid ng-invalid-required" placeholder="Số điện thoại" type="text" ng-model="$parent.CustomerPhone" required=""></div>
                                    <div class="form-group">
                                       <input class="form-control ng-pristine ng-untouched ng-valid-email ng-invalid ng-invalid-required" placeholder="Email" type="email" ng-model="$parent.CustomerEmail" required="">
                                       <div id="pwm-inline-icon-52904" class="pwm-field-icon" style="position: absolute !important; width: 18px !important; height: 18px !important; min-height: 0px !important; min-width: 0px !important; z-index: 2147483645 !important; box-shadow: none !important; box-sizing: content-box !important; background: none !important; border: none !important; padding: 0px !important; cursor: pointer !important; outline: none !important; margin-top: -32px; margin-left: 342px;">
                                          <svg style="display: inline-block !important; width: 16px !important; height: 16px !important; fill: rgb(230, 0, 23) !important; margin-top: 0.5px !important; position: absolute !important; top: 0px !important; left: 0px !important;" viewBox="0 0 64 64">
                                             <g>
                                                <path d="m20,28.12a33.78,33.78 0 0 1 13.36,2.74a22.18,22.18 0 0 1 0.64,5.32c0,9.43 -5.66,17.81 -14,20.94c-8.34,-3.13 -14,-11.51 -14,-20.94a22.2,22.2 0 0 1 0.64,-5.32a33.78,33.78 0 0 1 13.36,-2.74m0,-28.12c-8.82,0 -14,7.36 -14,16.41l0,5.16c2,-1.2 2,-1.49 5,-2.08l0,-3.08c0,-6.21 2.9,-11.41 8.81,-11.41l0.19,0c6.6,0 9,4.77 9,11.41l0,3.08c3,0.58 3,0.88 5,2.08l0,-5.16c0,-9 -5.18,-16.41 -14,-16.41l0,0zm0,22c-6.39,0 -12.77,0.67 -18.47,4a31.6,31.6 0 0 0 -1.53,9.74c0,13.64 8.52,25 20,28.26c11.48,-3.27 20,-14.63 20,-28.26a31.66,31.66 0 0 0 -1.54,-9.77c-5.69,-3.3 -12.08,-4 -18.47,-4l0,0l0.01,0.03z"></path>
                                                <path d="m21.23,39.5a2.81,2.81 0 0 0 1.77,-2.59a2.94,2.94 0 0 0 -3,-2.93a3,3 0 0 0 -3,3a2.66,2.66 0 0 0 1.77,2.48l-1.77,4.54l6,0l-1.77,-4.5z"></path>
                                             </g>
                                          </svg>
                                          <span id="pwm-inline-icon-badge-52904" style="position: absolute !important; inset: auto auto 0px 7px !important; box-sizing: content-box !important; font-family: monospace !important; font-size: 9px !important; border-radius: 2px !important; color: white !important; background: rgb(112, 185, 52) !important; border: 0.5px solid white !important; width: auto !important; height: 10px !important; min-width: 10px !important; min-height: 0px !important; display: flex !important; align-items: center !important; justify-content: center !important; pointer-events: none !important;">0</span>
                                       </div>
                                    </div>
                                    <div class="form-group"><input class="form-control ng-pristine ng-invalid ng-invalid-required ng-touched" placeholder="Địa chỉ" type="text" ng-model="$parent.CustomerAddress" required=""></div>
                                    <div class="form-group">
                                       <select class="form-control ng-dirty ng-valid-parse ng-valid ng-valid-required ng-touched" ng-model="$parent.CustomerProvinceId" ng-options="item.Id as item.Name for item in Provinces" ng-change="changeCustomerProvince()" required="">
                                          <option value="number:0" label="Vui lòng chọn tỉnh/thành phố">Vui lòng chọn tỉnh/thành phố</option>
                                          <option value="number:1" label="Hồ Chí Minh">Hồ Chí Minh</option>
                                          <option value="number:2" label="Hà Nội">Hà Nội</option>
                                          <option value="number:3" label="Đà Nẵng">Đà Nẵng</option>
                                          <option value="number:4" label="Cần Thơ">Cần Thơ</option>
                                          <option value="number:5" label=" Thừa Thiên - Huế"> Thừa Thiên - Huế</option>
                                          <option value="number:6" label="An Giang">An Giang</option>
                                          <option value="number:7" label="Bà Rịa-Vũng Tàu">Bà Rịa-Vũng Tàu</option>
                                          <option value="number:8" label="Bạc Liêu">Bạc Liêu</option>
                                          <option value="number:9" label="Bắc Kạn">Bắc Kạn</option>
                                          <option value="number:10" label="Bắc Giang">Bắc Giang</option>
                                          <option value="number:11" label="Bắc Ninh">Bắc Ninh</option>
                                          <option value="number:12" label="Bến Tre">Bến Tre</option>
                                          <option value="number:13" label="Bình Dương">Bình Dương</option>
                                          <option value="number:14" label="Bình Định">Bình Định</option>
                                          <option value="number:15" label="Bình Phước">Bình Phước</option>
                                          <option value="number:16" label="Bình Thuận">Bình Thuận</option>
                                          <option value="number:17" label="Cà Mau">Cà Mau</option>
                                          <option value="number:18" label="Cao Bằng">Cao Bằng</option>
                                          <option value="number:19" label="Đắk Lắk">Đắk Lắk</option>
                                          <option value="number:20" label="Đắk Nông">Đắk Nông</option>
                                          <option value="number:21" label="Điện Biên">Điện Biên</option>
                                          <option value="number:22" label="Đồng Nai">Đồng Nai</option>
                                          <option value="number:23" label="Đồng Tháp">Đồng Tháp</option>
                                          <option value="number:24" label="Gia Lai">Gia Lai</option>
                                          <option value="number:25" label="Hà Giang">Hà Giang</option>
                                          <option value="number:26" label="Hà Nam">Hà Nam</option>
                                          <option value="number:27" label="Hà Tây">Hà Tây</option>
                                          <option value="number:28" label="Hà Tĩnh">Hà Tĩnh</option>
                                          <option value="number:29" label="Hải Dương">Hải Dương</option>
                                          <option value="number:30" label="Hải Phòng">Hải Phòng</option>
                                          <option value="number:31" label="Hòa Bình">Hòa Bình</option>
                                          <option value="number:32" label="Hậu Giang">Hậu Giang</option>
                                          <option value="number:33" label="Hưng Yên">Hưng Yên</option>
                                          <option value="number:34" label="Khánh Hòa">Khánh Hòa</option>
                                          <option value="number:35" label="Kiên Giang">Kiên Giang</option>
                                          <option value="number:36" label="Kon Tum">Kon Tum</option>
                                          <option value="number:37" label="Lai Châu">Lai Châu</option>
                                          <option value="number:38" label="Lào Cai">Lào Cai</option>
                                          <option value="number:39" label="Lạng Sơn">Lạng Sơn</option>
                                          <option value="number:40" label="Lâm Đồng">Lâm Đồng</option>
                                          <option value="number:41" label="Long An">Long An</option>
                                          <option value="number:42" label="Nam Định">Nam Định</option>
                                          <option value="number:43" label="Nghệ An">Nghệ An</option>
                                          <option value="number:44" label="Ninh Bình">Ninh Bình</option>
                                          <option value="number:45" label="Ninh Thuận">Ninh Thuận</option>
                                          <option value="number:46" label="Phú Thọ">Phú Thọ</option>
                                          <option value="number:47" label="Phú Yên">Phú Yên</option>
                                          <option value="number:48" label="Quảng Bình">Quảng Bình</option>
                                          <option value="number:49" label="Quảng Nam">Quảng Nam</option>
                                          <option value="number:50" label="Quảng Ngãi">Quảng Ngãi</option>
                                          <option value="number:51" label="Quảng Ninh">Quảng Ninh</option>
                                          <option value="number:52" label="Quảng Trị">Quảng Trị</option>
                                          <option value="number:53" label="Sóc Trăng">Sóc Trăng</option>
                                          <option value="number:54" label="Sơn La">Sơn La</option>
                                          <option value="number:55" label="Tây Ninh">Tây Ninh</option>
                                          <option value="number:56" label="Thái Bình">Thái Bình</option>
                                          <option value="number:57" label="Thái Nguyên">Thái Nguyên</option>
                                          <option value="number:58" label="Thanh Hóa">Thanh Hóa</option>
                                          <option value="number:59" label="Thừa Thiên - Huế">Thừa Thiên - Huế</option>
                                          <option value="number:60" label="Tiền Giang">Tiền Giang</option>
                                          <option value="number:61" label="Trà Vinh">Trà Vinh</option>
                                          <option value="number:62" label="Tuyên Quang">Tuyên Quang</option>
                                          <option value="number:63" label="Vĩnh Long">Vĩnh Long</option>
                                          <option value="number:64" label="Vĩnh Phúc">Vĩnh Phúc</option>
                                          <option value="number:65" label="Yên Bái">Yên Bái</option>
                                       </select>
                                    </div>
                                    <div class="form-group">
                                       <select class="form-control ng-valid ng-valid-required ng-dirty ng-valid-parse ng-touched" ng-model="$parent.CustomerDistrictId" ng-options="item.Id as item.Name for item in Districts" ng-change="changeCustomerDistrict()" required="">
                                          <option value="number:0" label="Vui lòng chọn quận/huyện" selected="selected">Vui lòng chọn quận/huyện</option>
                                          <option value="number:1" label="Quận 1">Quận 1</option>
                                          <option value="number:5" label="Quận 2">Quận 2</option>
                                          <option value="number:6" label="Quận 3">Quận 3</option>
                                          <option value="number:7" label="Quận 4">Quận 4</option>
                                          <option value="number:8" label="Quận 5">Quận 5</option>
                                          <option value="number:9" label="Quận 6">Quận 6</option>
                                          <option value="number:10" label="Quận 7">Quận 7</option>
                                          <option value="number:11" label="Quận 8">Quận 8</option>
                                          <option value="number:12" label="Quận 9">Quận 9</option>
                                          <option value="number:13" label="Quận 10">Quận 10</option>
                                          <option value="number:14" label="Quận 11">Quận 11</option>
                                          <option value="number:15" label="Quận 12">Quận 12</option>
                                          <option value="number:16" label="Quận Gò Vấp">Quận Gò Vấp</option>
                                          <option value="number:17" label="Quận Tân Bình">Quận Tân Bình</option>
                                          <option value="number:18" label="Quận Tân Phú">Quận Tân Phú</option>
                                          <option value="number:19" label="Quận Bình Thạnh">Quận Bình Thạnh</option>
                                          <option value="number:20" label="Quận Phú Nhuận">Quận Phú Nhuận</option>
                                          <option value="number:21" label="Quận Thủ Đức">Quận Thủ Đức</option>
                                          <option value="number:22" label="Quận Bình Tân">Quận Bình Tân</option>
                                          <option value="number:51" label="Huyện Củ Chi">Huyện Củ Chi</option>
                                          <option value="number:52" label="Huyện Hóc Môn">Huyện Hóc Môn</option>
                                          <option value="number:53" label="Huyện Bình Chánh">Huyện Bình Chánh</option>
                                          <option value="number:54" label="Huyện Nhà Bè">Huyện Nhà Bè</option>
                                          <option value="number:55" label="Huyện Cần Giờ">Huyện Cần Giờ</option>
                                       </select>
                                    </div>
                                    <textarea class="form-control ng-pristine ng-untouched ng-valid" rows="4" placeholder="Ghi chú đơn hàng" ng-model="$parent.Description"></textarea>
                                 </div>
                                 <!-- end ngIf: CustomerId<=0 -->
                                 <h2 class="title">Thông tin giao hàng</h2>
                                 <div class="checkbox">
                                    <label>
                                    <input type="checkbox" ng-model="IsOtherAddress" ng-change="changeAddress()" class="ng-pristine ng-untouched ng-valid"> Giao hàng địa chỉ khác
                                    </label>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-4 col-sm-12 col-xs-12 payment-step step3">
                              <h4>2. Thanh toán và vận chuyển</h4>
                              <div class="step-preview clearfix">
                                 <h2 class="title">Vận chuyển</h2>
                                 <div class="form-group ">
                                    <select class="form-control ng-pristine ng-untouched ng-valid" ng-model="ShippingRateId" ng-options="item.Id as item.Name for item in ShippingRates" ng-change="changeShippingRate()">
                                       <option value="?" selected="selected"></option>
                                    </select>
                                 </div>
                                 <h2 class="title">Thanh toán</h2>
                                 <!-- ngRepeat: item in PaymentMethods -->
                              </div>
                           </div>
                           <div class="col-md-4 col-sm-12 col-xs-12 payment-step step1">
                              <h4>3. Thông tin đơn hàng</h4>
                              <div class="step-preview">
                                 <div class="cart-info">
                                    <div class="cart-items">
                                       <!-- ngRepeat: item in OrderDetails -->
                                       <div class="cart-item clearfix ng-scope" ng-repeat="item in OrderDetails">
                                          <span class="image pull-left" style="margin-right:10px;">
                                          <a href="/san-pham/dam-body-ca-tinh-voi-nhieu-mau-sac-hien-dai-tre-trung.html">
                                          <img src="{{asset('/images/product/p35_large.jpg')}}" class="img-responsive">
                                          </a>
                                          </span>
                                          <div class="product-info pull-left">
                                             <span class="product-name">
                                             <a href="/san-pham/dam-body-ca-tinh-voi-nhieu-mau-sac-hien-dai-tre-trung.html" class="ng-binding">Đầm body cá tình với nhiều màu sắc hiện đại, trẻ trung</a> x <span class="ng-binding">2</span>
                                             </span>
                                             <!-- ngIf: item.IsVariant==true -->
                                             <p class="note ng-binding ng-scope" ng-if="item.IsVariant==true">Đỏ</p>
                                             <!-- end ngIf: item.IsVariant==true -->
                                          </div>
                                          <span class="price ng-binding">800,000 ₫</span>
                                       </div>
                                       <!-- end ngRepeat: item in OrderDetails -->
                                    </div>
                                    <div class="total-price">
                                       Thành tiền  <label class="ng-binding"> 800,000 ₫</label>
                                    </div>
                                    <div class="shiping-price">
                                       Phí vận chuyển  <label class="ng-binding">0 ₫</label>
                                    </div>
                                    <div class="btn-coupon hidden">
                                       <a href="#" class="btn btn-primary"><span></span>Sử dụng mã giảm giá </a>
                                    </div>
                                    <div class="use-coupon hidden">
                                       <div class="form-group">
                                          <input placeholder="Nhập mã giảm giá" class="coupon-code form-control">
                                          <a class="btn btn-primary">Sử dụng</a>
                                       </div>
                                    </div>
                                    <div class="total-payment">
                                       Thanh toán <span class="ng-binding"> 0 ₫</span>
                                    </div>
                                    <div class="button-submit">
                                       <button class="btn btn-primary" type="submit">Đặt hàng</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
@stop