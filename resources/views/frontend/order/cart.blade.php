@extends('layout.frontend2')
@section('content')
<div id="cart">
    <div class="main">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb clearfix">
                        <ul>
                            <li itemtype="http://shema.org/Breadcrumb" itemscope="" class="home">
                                <a title="Đến trang chủ" href="/" itemprop="url"><span itemprop="title">Trang chủ</span></a>
                            </li>
                            <li class="icon-li"><strong>Giỏ hàng</strong></li>
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
                    <script src="/app/services/orderServices.js"></script>
                    <script src="/app/controllers/orderController.js"></script>
                    <div class="cart-content ng-scope" ng-controller="orderController" ng-init="initOrderCartController()">
                        <h1 class="page-heading"><span>Giỏ hàng của tôi</span></h1>
                        <div class="steps clearfix">
                            <ul class="clearfix">
                                <li class="cart active col-md-2 col-xs-12 col-sm-4 col-md-offset-3 col-sm-offset-0 col-xs-offset-0">
                                    <span><i class="glyphicon glyphicon-shopping-cart"></i></span><span>Giỏ hàng của tôi</span><span class="step-number"><a>1</a></span>
                                </li>
                                <li class="payment col-md-2 col-xs-12 col-sm-4">
                                    <span><i class="glyphicon glyphicon-usd"></i></span><span>Thanh toán</span><span class="step-number"><a>2</a></span>
                                </li>
                                <li class="finish col-md-2 col-xs-12 col-sm-4">
                                    <span><i class="glyphicon glyphicon-ok"></i></span><span>Hoàn tất</span><span class="step-number"><a>3</a></span>
                                </li>
                            </ul>
                        </div>
                        <div class="cart-block-info">
                            <div class="cart-info table-responsive">
                                <table class="table product-list">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Tên sản phẩm</th>
                                            <th>Giá</th>
                                            <th>Số lượng</th>
                                            <th>Thành tiền</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- ngRepeat: item in OrderDetails -->
                                        <tr ng-repeat="item in OrderDetails" class="ng-scope">
                                            <td class="image">
                                                <a href="/san-pham/dam-body-ca-tinh-voi-nhieu-mau-sac-hien-dai-tre-trung.html">
                                                    <img  class="img-responsive" src="{{asset('images/product/p35_large.jpg')}}" />
                                                </a>
                                            </td>
                                            <td class="des">
                                                <a href="/san-pham/dam-body-ca-tinh-voi-nhieu-mau-sac-hien-dai-tre-trung.html" class="ng-binding">Đầm body cá tình với nhiều màu sắc hiện đại, trẻ trung</a>
                                                <span class="ng-binding">Đỏ</span>
                                            </td>
                                            <td class="price ng-binding">400,000đ</td>
                                            <td class="quantity">
                                                <input type="number" value="1" class="text ng-pristine ng-untouched ng-valid" ng-model="item.Quantity" ng-change="updateItemCart(item)" />
                                            </td>
                                            <td class="amount ng-binding">
                                                800,000đ
                                            </td>
                                            <td class="">
                                                <a ng-click="removeItemCart(item)" href="javascript:void(0)">
                                                    <i class="glyphicon glyphicon-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <!-- end ngRepeat: item in OrderDetails -->
                                    </tbody>
                                </table>
                            </div>
                            <div class="clearfix text-right">
                                <span><b>Tổng thanh toán:</b></span>
                                <span class="pay-price ng-binding">
                                    800,000đ
                                </span>
                            </div>
                            <div class="text-right" style="margin-top: 30px;">
                                <a class="comeback" href="/" onclick="window.history.back()">Tiếp tục mua hàng</a>
                                <a class="button-default" id="checkout" href="/thanh-toan.html">Tiến hành thanh toán</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop