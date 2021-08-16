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
                                    <span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span><span>Giỏ hàng của tôi</span><span class="step-number"><a>1</a></span>
                                </li>
                                <li class="payment col-md-2 col-xs-12 col-sm-4">
                                    <span><i class="fa fa-usd" aria-hidden="true"></i></span><span>Thanh toán</span><span class="step-number"><a>2</a></span>
                                </li>
                                <li class="finish col-md-2 col-xs-12 col-sm-4">
                                    <span><i class="fa fa-check" aria-hidden="true"></i></span><span>Hoàn tất</span><span class="step-number"><a>3</a></span>
                                </li>
                            </ul>
                        </div>
                        <div id="listCart">
                             @include('frontend.order.list-cart') 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // function deleteItemPageCart(id){ 
    //         $.ajax({
    //             type: 'GET',
    //             url: 'xoa-page-gio-hang/'+id,
    //             success: function (res) { 
    //                 rederPageCart(res);
    //               alertify.success('Xóa Giỏ Hàng Thành Công');
    //             },
    //             error: function (XMLHttpRequest, textStatus) {
    //                console.log(XMLHttpRequest, textStatus);
    //             }
    //         });
    //     };

    //     function updateItemPageCart(id){    
    //      var qty = $('#quantyItemCart_'+id).val() ;
    //      console.log('update-page-gio-hang/'+id+'/'+qty);
    //         $.ajax({
    //             type: 'GET',
    //             url: 'update-page-gio-hang/'+id+'/'+qty,
    //             success: function (res) { 
    //                 rederPageCart(res);
    //               alertify.success('Cập Nhật Giỏ Hàng Thành Công');
    //             },
    //             error: function (XMLHttpRequest, textStatus) {
    //                console.log(XMLHttpRequest, textStatus);
    //             }
    //         });
    //     };

    //  function rederPageCart(res){
    //            $('#listCart').empty();
    //            $('#listCart').html(res);
    //     }
    //  function notCheckOut(){
    //            alertify.error('Không thể thanh toán');
    //     }
</script>
@stop