@extends('layout.frontend2')
@section('content')
<div id="product">
            <div class="main">
                <div class="container">
                    <div class="row">
                            <div class="col-md-9">
        
        <div class="breadcrumb clearfix">
            <ul>
                            <li itemtype="http://shema.org/Breadcrumb" itemscope="" class="home">
                                <a title="Đến trang chủ" href="/" itemprop="url"><span itemprop="title">Trang chủ</span></a>
                            </li>
                                <li itemtype="http://shema.org/Breadcrumb" itemscope="" class="category17 icon-li">
                                    <div class="link-site-more">
                                        <a title="" href="{{route('get.categoryProduct',$product->fk_category->c_slug)}}" itemprop="url">
                                            <span itemprop="title">{{$product->fk_category->c_name}}</span>
                                        </a>
                                    </div>
                                </li>
                            <li class="productname icon-li"><strong>{{$product->p_name}}</strong> </li>
            </ul>
        </div>
        <script type="text/javascript">
            $(".link-site-more").hover(function () { $(this).find(".s-c-n").show(); }, function () { $(this).find(".s-c-n").hide(); });
        </script>
        
        <link href="/Scripts/smoothproducts/smoothproducts.css" rel="stylesheet" type="text/css">
        <script src="/Scripts/smoothproducts/smoothproducts.js" type="text/javascript"></script>
        <script src="/app/services/productServices.js"></script>
        <script src="/app/controllers/productController.js"></script>
        <div class="product-detail clearfix relative ng-scope" ng-controller="productController" ng-init="initController(51001)">
                <!--Begin-->
                    <div class="product-block clearfix">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12 product-image clearfix">
                                <div class="sp-loading" style="display: none;"><img src="{{asset('images/sp-loading.gif')}}" alt=""><br>LOADING IMAGES</div>
                                <div class="sp-wrap sp-non-touch" style="display: inline-block;">
                                    <!-- ngRepeat: product in ProductImages --><!-- end ngRepeat: product in ProductImages -->
                                <div class="sp-large"><a href="{{ route('get.productDetail',$product->p_slug) }}" class="ng-scope .sp-current-big"><img src="{{asset('images/product\/')}}{{$product->p_avatar}}"></a></div></div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12 clearfix">
                                <h2 class="ng-binding">{{$product->p_name}}</h2>
                                <div class="price ng-scope">
                                    <div ng-if="IsPromotion==true" class="ng-scope">
                                        @if($product->fk_discount->d_number > 0 && $product->fk_discount->d_active == 1)
                                        <span class="price-new ng-binding">{{number_format(priceNew($product->p_price,$product->fk_discount->d_number))}}đ</span>
                                        <span class="price-old ng-binding">{{number_format($product->p_price)}}đ</span>
                                        @else
                                        <span class="price-new ng-binding">{{number_format($product->p_price)}}đ</span>
                                        @endif
                                    </div><!-- end ngIf: IsPromotion==true -->
                                    <!-- ngIf: IsPromotion==false -->
                                    <span class="product-code ng-binding">Mã SP: {{$product->p_sku}}</span>
                                    @if($sumStars > 0)
                                        <span class="rating-star" style="margin-left:10px;">
                                        @for($i=0; $i< $sumStars; $i++ )
                                            <i class="fa fa-star"></i>
                                            @endfor
                                        </span>
                                    @endif
                                    <p><b>Lượt Xem:</b> {{$product->p_view}}   -  <b>Lượt Mua:</b> {{$product->p_pay}}</p>

                                </div><!-- end ngIf: IsTrackingInventory==false||AllowPurchaseWhenSoldOut==true || (IsTrackingInventory&&AllowPurchaseWhenSoldOut==false&&Quantity>0) -->
                                <!-- ngIf: IsTrackingInventory==true&&AllowPurchaseWhenSoldOut==false&&Quantity<=0 -->
                                <div class="des ng-binding" ng-bind-html="Summary|unsafe"><p>{!! $product->p_description_short ?? 'Mô tả đang cập nhật' !!}</p>
        </div>
                                <div class="social">
                                    <!-- AddThis Button BEGIN -->
                                    <div class="addthis_toolbox addthis_default_style">
                                        <a class="addthis_button_facebook_like at300b" fb:like:layout="button_count"><div class="fb-like fb_iframe_widget" data-layout="button_count" data-show_faces="false" data-share="true" data-action="like" data-width="90" data-height="25" data-font="arial" data-href="{{route('get.productDetail',$product->p_slug)}}" data-send="false" style="height: 25px;" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=227481454296289&amp;container_width=0&amp;font=arial&amp;height=25&amp;href=http%3A%2F%2Frunecom02.runtime.vn%2Fsan-pham%2Fdam-body-ca-tinh-voi-nhieu-mau-sac-hien-dai-tre-trung.html&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;send=false&amp;share=true&amp;show_faces=false&amp;width=90"><span style="vertical-align: bottom; width: 150px; height: 28px;"><iframe name="fecac2326bec1c" width="90px" height="25px" data-testid="fb:like Facebook Social Plugin" title="fb:like Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v2.6/plugins/like.php?action=like&amp;app_id=227481454296289&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Dffe73220b1c3%26domain%3Drunecom02.runtime.vn%26origin%3Dhttp%253A%252F%252Frunecom02.runtime.vn%252Ff896af2b45665c%26relation%3Dparent.parent&amp;container_width=0&amp;font=arial&amp;height=25&amp;href=http%3A%2F%2Frunecom02.runtime.vn%2Fsan-pham%2Fdam-body-ca-tinh-voi-nhieu-mau-sac-hien-dai-tre-trung.html&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;send=false&amp;share=true&amp;show_faces=false&amp;width=90" style="border: none; visibility: visible; width: 150px; height: 28px;" class=""></iframe></span></div></a>
                                        <a class="addthis_button_google_plusone at300b" g:plusone:size="medium"><div class="google_plusone_iframe_widget" style="width: 90px; height: 25px;"><span><div id="___plusone_0" style="position: absolute; width: 450px; left: -10000px;"><iframe ng-non-bindable="" frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position:absolute;top:-10000px;width:450px;margin:0px;border-style:none" tabindex="0" vspace="0" width="100%" id="I0_1623939825720" name="I0_1623939825720" src="https://apis.google.com/u/0/se/0/_/+1/fastbutton?usegapi=1&amp;size=medium&amp;hl=en-US&amp;origin=http%3A%2F%2Frunecom02.runtime.vn&amp;url=http%3A%2F%2Frunecom02.runtime.vn%2Fsan-pham%2Fdam-body-ca-tinh-voi-nhieu-mau-sac-hien-dai-tre-trung.html&amp;gsrc=3p&amp;ic=1&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.vi.PNahV6oVl7o.O%2Fam%3DAQ%2Fd%3D1%2Frs%3DAGLTcCPZpf8JNqtIzWYrfd4pILuWfltGEg%2Fm%3D__features__#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh&amp;id=I0_1623939825720&amp;_gfid=I0_1623939825720&amp;parent=http%3A%2F%2Frunecom02.runtime.vn&amp;pfname=&amp;rpctoken=17932210" data-gapiattached="true"></iframe></div><g:plusone size="medium" lang="null" href="{{route('get.productDetail',$product->p_slug)}}" callback="_at_plusonecallback" data-gapiscan="true" data-onload="true" data-gapistub="true"></g:plusone></span></div></a>
                                    <div class="atclear"></div></div>
                                    <script type="text/javascript" src="/scripts/addthis/addthis_widget.js#pubid=ra-5334d6387b03b532"></script>
                                    <!-- AddThis Button END -->
                                </div>
                                <div class="quantity clearfix">
                                    <label>Số lượng</label>
                                    <div class="quantity-input">
                                        <input type="number" value="1" class="text ng-pristine ng-untouched ng-valid" ng-model="InputQuantity" ng-init="InputQuantity=1">
                                    </div>
                                </div>
                                <!-- ngIf: IsTrackingInventory==false||AllowPurchaseWhenSoldOut==true || (IsTrackingInventory&&AllowPurchaseWhenSoldOut==false&&Quantity>0) --><div class="action-cart ng-scope" ng-if="IsTrackingInventory==false||AllowPurchaseWhenSoldOut==true || (IsTrackingInventory&amp;&amp;AllowPurchaseWhenSoldOut==false&amp;&amp;Quantity>0)">
                                    <a href="javascript:void(0)" ng-click="addToCard()" class="btn btn-default"><i class="fa fa-shopping-cart"></i> Thêm giỏ hàng</a>
                                    <a href="javascript:void(0)" ng-click="addToCardBuy()" class="btn btn-primary"><i class="fa fa-check"></i> Mua ngay</a>
                                </div><!-- end ngIf: IsTrackingInventory==false||AllowPurchaseWhenSoldOut==true || (IsTrackingInventory&&AllowPurchaseWhenSoldOut==false&&Quantity>0) -->
                                <!-- ngIf: IsTrackingInventory==true&&AllowPurchaseWhenSoldOut==false&&Quantity<=0 -->
                                <div class="call" id="abId0.22239922584266392">
                                    <p class="title">Để lại số điện thoại, chúng tôi sẽ tư vấn ngay</p>
                                    <div class="input" id="abId0.6469378359057585">
                                        <div class="input-group" id="abId0.4438750607960711" abineguid="5A1B91B43F6F48A1816A372DA85D4542">
                                            <input class="form-control ng-pristine ng-untouched ng-valid" ng-model="CustomerPhone" onblur="if(this.value=='')this.value='Nhập số điện thoại...'" onfocus="if(this.value=='Nhập số điện thoại...')this.value=''" value="Nhập số điện thoại..." type="text">
                                            <span class="input-group-btn">
                                                <button class="btn btn-primary" type="button" ng-click="callMe()"><i class="fa fa-phone"></i> Gọi lại cho tôi</button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
            @include('frontend.product.product_tab')

                <!--End-->
            <div class="modal fade" id="modalMyCart" tabindex="-1" role="dialog" aria-labelledby="modalMyCartLabel" aria-hidden="true">
                <div class="modal-dialog  modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                ×
                            </button>
                            <h4 class="modal-title ng-binding" id="modalMyCartLabel">Bạn có  sản phẩm trong giỏ hàng.</h4>
                        </div>
                        <div class="modal-body">
                            <table class="table" style="width:100%;">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Tên sản phẩm</th>
                                        <th>Số lượng</th>
                                        <th>Giá tiền</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- ngRepeat: product in OrderDetails -->
                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="total-price-modal">
                                        Tổng cộng : <span class="product-total ng-binding">₫</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row margin-top-10">
                                <div class="col-lg-6">
                                    <div class="comeback text-left">
                                        <a href="/san-pham.html">
                                            <i class="fa fa-chevron-circle-left "></i> Tiếp tục mua hàng
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 text-right">
                                    <div class="buttons btn-modal-cart">
                                        <a class="btn btn-default" href="/thanh-toan.html">
                                            Đặt hàng
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="modalCallMe" tabindex="-1" role="dialog" aria-labelledby="modalCallMeLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <h2>Cám ơn Qúy Khách đã liên hệ đặt hàng</h2>
                            <p>Shop sẽ gọi lại để tư vấn cho Quý khách hàng trong thời gian sớm nhất</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">
                                OK
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </div>
     @include('frontend.product.sidebar')
</div>
@stop