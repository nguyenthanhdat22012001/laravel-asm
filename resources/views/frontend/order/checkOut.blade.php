@extends('layout.frontend2')
@section('content')

@if ($message = Session::get('error'))
<script>
   login()
</script>
@endif
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
                              <li class="cart active col-md-2 col-xs-12 col-sm-4 col-md-offset-3 col-sm-offset-0 col-xs-offset-0"><span><i class="fa fa-shopping-cart"></i></span><span>Giỏ hàng của tôi</span><span class="step-number"><a>1</a></span></li>
                              <li class="payment active col-md-2 col-xs-12 col-sm-4"><span><i class="fa fa-usd"></i></span><span>Thanh toán</span><span class="step-number"><a>2</a></span></li>
                              <li class="finish col-md-2 col-xs-12 col-sm-4"><span><i class="fa fa-check"></i></span><span>Hoàn tất</span><span class="step-number"><a>3</a></span></li>
                           </ul>
                        </div>
                        <form class="payment-block clearfix " id="checkout-container" action="" method="POST">
                           @csrf
                           <div class="col-md-4 col-sm-12 col-xs-12 payment-step step2">
                              <h4>1. Địa chỉ thanh toán và giao hàng</h4>
                              <div class="step-preview clearfix">
                                 <h2 class="title">Thông tin thanh toán</h2>
                                 <div class="form-block ng-scope" ng-if="CustomerId<=0">
                                    <div class="form-group">
                                       <input class="form-control " name="or_name" placeholder="Họ &amp; Tên" type="text" value="{{old('or_name')}}" required>
                                       @error('or_name')
                                       <div class="invalid-feedback" role="alert" style="margin-top: 10px;color: red;">
                                          <strong>{{ $message }}</strong>
                                       </div>
                                       @enderror
                                    </div>

                                    <div class="form-group">
                                       <input class="form-control " name="or_phone" placeholder="Số điện thoại" value="{{old('or_phone')}}" type="text" required>
                                       @error('or_phone')
                                       <div class="invalid-feedback" role="alert" style="margin-top: 10px;color: red;">
                                          <strong>{{ $message }}</strong>
                                       </div>
                                       @enderror
                                    </div>
                                    <div class="form-group">
                                       <input class="form-control" placeholder="Email" type="email" value="{{old('or_email')}}" name="or_email">
                                    </div>
                                    <div class="form-group">
                                       <input class="form-control ng-pristine ng-invalid ng-invalid-required ng-touched" placeholder="Địa chỉ" type="text" name="or_address"  value="{{old('or_address')}}" required>
                                       @error('or_address')
                                       <div class="invalid-feedback" role="alert" style="margin-top: 10px;color: red;">
                                          <strong>{{ $message }}</strong>
                                       </div>
                                       @enderror
                                    </div>
                                    <textarea class="form-control ng-pristine ng-untouched ng-valid" rows="4" placeholder="Ghi chú đơn hàng" name="or_note">{{old('or_note')}}</textarea>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-4 col-sm-12 col-xs-12 payment-step step3">
                              <h4>2. Thanh toán và vận chuyển</h4>
                              <div class="step-preview clearfix">
                                 <h2 class="title">Phương Thức Thanh Toán</h2>
                                 <div class="form-group ">
                                    <select class="form-control" id="feeShip" name="or_pay_id" >
                                       @foreach($payments as $item)
                                          <option value="{{$item->id}}" data-ship="{{$item->pay_fee_shipping}}" data-slug="{{$item->pay_slug}}" {{old('$item->pay_slug','thanh-toan-khi-nhan-hang') == $item->pay_slug ? 'selected' : ''}} >{{$item->pay_name}}</option>
                                       @endforeach
                                    </select>
                                 </div>
                                 <!-- ngRepeat: item in PaymentMethods -->
                              </div>
                           </div>
                           <div class="col-md-4 col-sm-12 col-xs-12 payment-step step1">
                              <h4>3. Thông tin đơn hàng</h4>
                              <div class="step-preview">
                                 <div class="cart-info">
                                    <div class="cart-items">
                                       <!-- ngRepeat: item in OrderDetails -->
                                       @if( Session::has('Cart'))
                                          @foreach(Session::get('Cart')->products as $item)
                                       <div class="cart-item clearfix ng-scope" ng-repeat="item in OrderDetails">
                                          <span class="image pull-left" style="margin-right:10px;">
                                          <a href="/san-pham/dam-body-ca-tinh-voi-nhieu-mau-sac-hien-dai-tre-trung.html">
                                          <img src="{{asset('images/product\/')}}{{$item['productInfor']->p_avatar}}" class="img-responsive">
                                          </a>
                                          </span>
                                          <div class="product-info pull-left">
                                             <span class="product-name">
                                             <a href="/san-pham/dam-body-ca-tinh-voi-nhieu-mau-sac-hien-dai-tre-trung.html" class="ng-binding">{{$item['productInfor']->p_name}}</a> x <span class="ng-binding">{{ $item['quanty'] }}</span>
                                             </span>
                                             <!-- ngIf: item.IsVariant==true -->
                                             <!-- <p class="note ng-binding ng-scope" ng-if="item.IsVariant==true">Đỏ</p> -->
                                             <!-- end ngIf: item.IsVariant==true -->
                                          </div>
                                          <span class="price ng-binding">{{number_format($item['subTotalPrice'])}} ₫</span>
                                       </div>
                                          @endforeach
                                       @endif    
                                       <!-- end ngRepeat: item in OrderDetails -->
                                    </div>
                                    <div class="total-price">
                                       Thành tiền  <label class="ng-binding"> {{number_format(  Session::get('Cart')->totalPrice ?? 0)}} ₫</label>
                                    </div>
                                    <div class="shiping-price">
                                       Phí vận chuyển  <label class="ng-binding" id="fee-ship-text">0 ₫</label>
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
                                       Thanh toán <span class="ng-binding" id="total-order"> 0 ₫</span>
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

         <script>
              const formatter = new Intl.NumberFormat('vi-VN', {
            style: 'currency',
            currency: 'VND',
           // minimumFractionDigits: 2
            })

               $(function() {$("#feeShip").bind("change", postFeeShip)});

               function  postFeeShip(){
                  var fee_ship = $('#feeShip option:selected').attr('data-ship');
                  var url_payment = $('#feeShip option:selected').attr('data-slug');
                  var total_price = {{Session::get('Cart')->totalPrice}};
                  var total_order = total_price + parseInt(fee_ship);
                  //var option =  $('#feeShip').find('option:selected').attr('ship');
                  //console.log(option);
                  let format_fee_ship = formatter.format(fee_ship);
                  let format_total_order  = formatter.format(total_order);
                     console.log(total_order);
                        $('#fee-ship-text').text(format_fee_ship);
                        $('#total-order').text(format_total_order);
                        $('#checkout-container').attr('action',url_payment);
               }
               postFeeShip()
         </script>
@stop