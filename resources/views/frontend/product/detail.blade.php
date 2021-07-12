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
                                        <a title="" href="/san-pham/thoi-trang-40412" itemprop="url">
                                            <span itemprop="title">Thời trang</span>
                                        </a>
                                    </div>
                                </li>
                            <li class="productname icon-li"><strong>Đầm body cá tình với nhiều màu sắc hiện đại, trẻ trung</strong> </li>
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
            <span us-spinner="{radius:5, width:3, length: 3}" class="ng-scope ng-hide"><div class="spinner" role="progressbar" style="position: absolute; width: 0px; z-index: 2000000000; left: 50%; top: 50%;"><div style="position: absolute; top: -1px; opacity: 0.25; animation: 1s linear 0s infinite normal none running opacity-100-25-0-12;"><div style="position: absolute; width: 6px; height: 3px; background: rgb(0, 0, 0); box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 1px; transform-origin: left center; transform: rotate(0deg) translate(5px, 0px); border-radius: 1px;"></div></div><div style="position: absolute; top: -1px; opacity: 0.25; animation: 1s linear 0s infinite normal none running opacity-100-25-1-12;"><div style="position: absolute; width: 6px; height: 3px; background: rgb(0, 0, 0); box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 1px; transform-origin: left center; transform: rotate(30deg) translate(5px, 0px); border-radius: 1px;"></div></div><div style="position: absolute; top: -1px; opacity: 0.25; animation: 1s linear 0s infinite normal none running opacity-100-25-2-12;"><div style="position: absolute; width: 6px; height: 3px; background: rgb(0, 0, 0); box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 1px; transform-origin: left center; transform: rotate(60deg) translate(5px, 0px); border-radius: 1px;"></div></div><div style="position: absolute; top: -1px; opacity: 0.25; animation: 1s linear 0s infinite normal none running opacity-100-25-3-12;"><div style="position: absolute; width: 6px; height: 3px; background: rgb(0, 0, 0); box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 1px; transform-origin: left center; transform: rotate(90deg) translate(5px, 0px); border-radius: 1px;"></div></div><div style="position: absolute; top: -1px; opacity: 0.25; animation: 1s linear 0s infinite normal none running opacity-100-25-4-12;"><div style="position: absolute; width: 6px; height: 3px; background: rgb(0, 0, 0); box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 1px; transform-origin: left center; transform: rotate(120deg) translate(5px, 0px); border-radius: 1px;"></div></div><div style="position: absolute; top: -1px; opacity: 0.25; animation: 1s linear 0s infinite normal none running opacity-100-25-5-12;"><div style="position: absolute; width: 6px; height: 3px; background: rgb(0, 0, 0); box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 1px; transform-origin: left center; transform: rotate(150deg) translate(5px, 0px); border-radius: 1px;"></div></div><div style="position: absolute; top: -1px; opacity: 0.25; animation: 1s linear 0s infinite normal none running opacity-100-25-6-12;"><div style="position: absolute; width: 6px; height: 3px; background: rgb(0, 0, 0); box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 1px; transform-origin: left center; transform: rotate(180deg) translate(5px, 0px); border-radius: 1px;"></div></div><div style="position: absolute; top: -1px; opacity: 0.25; animation: 1s linear 0s infinite normal none running opacity-100-25-7-12;"><div style="position: absolute; width: 6px; height: 3px; background: rgb(0, 0, 0); box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 1px; transform-origin: left center; transform: rotate(210deg) translate(5px, 0px); border-radius: 1px;"></div></div><div style="position: absolute; top: -1px; opacity: 0.25; animation: 1s linear 0s infinite normal none running opacity-100-25-8-12;"><div style="position: absolute; width: 6px; height: 3px; background: rgb(0, 0, 0); box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 1px; transform-origin: left center; transform: rotate(240deg) translate(5px, 0px); border-radius: 1px;"></div></div><div style="position: absolute; top: -1px; opacity: 0.25; animation: 1s linear 0s infinite normal none running opacity-100-25-9-12;"><div style="position: absolute; width: 6px; height: 3px; background: rgb(0, 0, 0); box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 1px; transform-origin: left center; transform: rotate(270deg) translate(5px, 0px); border-radius: 1px;"></div></div><div style="position: absolute; top: -1px; opacity: 0.25; animation: 1s linear 0s infinite normal none running opacity-100-25-10-12;"><div style="position: absolute; width: 6px; height: 3px; background: rgb(0, 0, 0); box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 1px; transform-origin: left center; transform: rotate(300deg) translate(5px, 0px); border-radius: 1px;"></div></div><div style="position: absolute; top: -1px; opacity: 0.25; animation: 1s linear 0s infinite normal none running opacity-100-25-11-12;"><div style="position: absolute; width: 6px; height: 3px; background: rgb(0, 0, 0); box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 1px; transform-origin: left center; transform: rotate(330deg) translate(5px, 0px); border-radius: 1px;"></div></div></div></span>
                <!--Begin-->
                    <div class="product-block clearfix">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12 product-image clearfix">
                                <div class="sp-loading" style="display: none;"><img src="{{asset('images/sp-loading.gif')}}" alt=""><br>LOADING IMAGES</div>
                                <div class="sp-wrap sp-non-touch" style="display: inline-block;">
                                    <!-- ngRepeat: item in ProductImages --><!-- end ngRepeat: item in ProductImages -->
                                <div class="sp-large"><a href="public/images/product/p35_large.jpg" class="ng-scope .sp-current-big"><img src="{{asset('images/product/p35_large.jpg')}}"></a></div></div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12 clearfix">
                                <h2 class="ng-binding">Đầm body cá tình với nhiều màu sắc hiện đại, trẻ trung</h2>
                                <!-- ngIf: IsTrackingInventory==false||AllowPurchaseWhenSoldOut==true || (IsTrackingInventory&&AllowPurchaseWhenSoldOut==false&&Quantity>0) --><div class="price ng-scope" ng-if="IsTrackingInventory==false||AllowPurchaseWhenSoldOut==true || (IsTrackingInventory&amp;&amp;AllowPurchaseWhenSoldOut==false&amp;&amp;Quantity>0)">
                                    <!-- ngIf: IsPromotion==true --><div ng-if="IsPromotion==true" class="ng-scope">
                                        <span class="price-new ng-binding">400,000đ</span>
                                        <span class="price-old ng-binding">620,000đ</span>
                                    </div><!-- end ngIf: IsPromotion==true -->
                                    <!-- ngIf: IsPromotion==false -->
                                    <span class="product-code ng-binding">Mã SP: SKU-1</span>
                                </div><!-- end ngIf: IsTrackingInventory==false||AllowPurchaseWhenSoldOut==true || (IsTrackingInventory&&AllowPurchaseWhenSoldOut==false&&Quantity>0) -->
                                <!-- ngIf: IsTrackingInventory==true&&AllowPurchaseWhenSoldOut==false&&Quantity<=0 -->
                                <div class="des ng-binding" ng-bind-html="Summary|unsafe"><p>Tên Sản PhẩmĐầm noel đuôi cáChất LiệuCát HànMàu SắcĐỏSize+ size M: Chiều dài đầm: 85cm, Ngực 80-84cm, Eo 68-72cm, Mông 88-92cm+ size L: Chiều dài đầm: 86cm, Ngực 84-88cm, Eo 72-76cm, Mông 92-96cm+ ...</p>
        </div>
                                <div class="social">
                                    <!-- AddThis Button BEGIN -->
                                    <div class="addthis_toolbox addthis_default_style">
                                        <a class="addthis_button_facebook_like at300b" fb:like:layout="button_count"><div class="fb-like fb_iframe_widget" data-layout="button_count" data-show_faces="false" data-share="true" data-action="like" data-width="90" data-height="25" data-font="arial" data-href="http://runecom02.runtime.vn/san-pham/dam-body-ca-tinh-voi-nhieu-mau-sac-hien-dai-tre-trung.html" data-send="false" style="height: 25px;" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=227481454296289&amp;container_width=0&amp;font=arial&amp;height=25&amp;href=http%3A%2F%2Frunecom02.runtime.vn%2Fsan-pham%2Fdam-body-ca-tinh-voi-nhieu-mau-sac-hien-dai-tre-trung.html&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;send=false&amp;share=true&amp;show_faces=false&amp;width=90"><span style="vertical-align: bottom; width: 150px; height: 28px;"><iframe name="fecac2326bec1c" width="90px" height="25px" data-testid="fb:like Facebook Social Plugin" title="fb:like Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v2.6/plugins/like.php?action=like&amp;app_id=227481454296289&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Dffe73220b1c3%26domain%3Drunecom02.runtime.vn%26origin%3Dhttp%253A%252F%252Frunecom02.runtime.vn%252Ff896af2b45665c%26relation%3Dparent.parent&amp;container_width=0&amp;font=arial&amp;height=25&amp;href=http%3A%2F%2Frunecom02.runtime.vn%2Fsan-pham%2Fdam-body-ca-tinh-voi-nhieu-mau-sac-hien-dai-tre-trung.html&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;send=false&amp;share=true&amp;show_faces=false&amp;width=90" style="border: none; visibility: visible; width: 150px; height: 28px;" class=""></iframe></span></div></a>
                                        <a class="addthis_button_google_plusone at300b" g:plusone:size="medium"><div class="google_plusone_iframe_widget" style="width: 90px; height: 25px;"><span><div id="___plusone_0" style="position: absolute; width: 450px; left: -10000px;"><iframe ng-non-bindable="" frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position:absolute;top:-10000px;width:450px;margin:0px;border-style:none" tabindex="0" vspace="0" width="100%" id="I0_1623939825720" name="I0_1623939825720" src="https://apis.google.com/u/0/se/0/_/+1/fastbutton?usegapi=1&amp;size=medium&amp;hl=en-US&amp;origin=http%3A%2F%2Frunecom02.runtime.vn&amp;url=http%3A%2F%2Frunecom02.runtime.vn%2Fsan-pham%2Fdam-body-ca-tinh-voi-nhieu-mau-sac-hien-dai-tre-trung.html&amp;gsrc=3p&amp;ic=1&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.vi.PNahV6oVl7o.O%2Fam%3DAQ%2Fd%3D1%2Frs%3DAGLTcCPZpf8JNqtIzWYrfd4pILuWfltGEg%2Fm%3D__features__#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh&amp;id=I0_1623939825720&amp;_gfid=I0_1623939825720&amp;parent=http%3A%2F%2Frunecom02.runtime.vn&amp;pfname=&amp;rpctoken=17932210" data-gapiattached="true"></iframe></div><g:plusone size="medium" lang="null" href="http://runecom02.runtime.vn/san-pham/dam-body-ca-tinh-voi-nhieu-mau-sac-hien-dai-tre-trung.html" callback="_at_plusonecallback" data-gapiscan="true" data-onload="true" data-gapistub="true"></g:plusone></span></div></a>
                                        <a class="addthis_counter addthis_pill_style addthis_nonzero addthis_nonzero" href="#" style="display: inline-block;"><a class="atc_s addthis_button_compact">Chia sẻ<span></span></a><a class="addthis_button_expanded" target="_blank" title="Thêm..." href="#">6</a></a>
                                    <div class="atclear"></div></div>
                                    <script type="text/javascript" src="/scripts/addthis/addthis_widget.js#pubid=ra-5334d6387b03b532"></script>
                                    <!-- AddThis Button END -->
                                </div>
                                <!-- ngRepeat: item in ProductOptions --><div class="option ng-scope" ng-repeat="item in ProductOptions">
                                    <label class="ng-binding">Màu sắc</label>
                                    <div class="dropdown-option ">
                                        <!-- ngIf: $index==0 --><ul ng-if="$index==0" class="option1 ng-scope">
                                            <!-- ngRepeat: it in item.ProductOptionValues --><li ng-repeat="it in item.ProductOptionValues" class="ng-scope">
                                                <a href="javascript:void(0)" ng-init="item.OptionValueSelect = item.ProductOptionValues[0].Name" ng-class="{'active':it.Name==item.OptionValueSelect}" ng-click="getProductVariant($parent.$index,it.Name)" class=""><strong class="ng-binding">Đỏ</strong></a>
                                            </li><!-- end ngRepeat: it in item.ProductOptionValues --><li ng-repeat="it in item.ProductOptionValues" class="ng-scope">
                                                <a href="javascript:void(0)" ng-init="item.OptionValueSelect = item.ProductOptionValues[0].Name" ng-class="{'active':it.Name==item.OptionValueSelect}" ng-click="getProductVariant($parent.$index,it.Name)" class="active"><strong class="ng-binding">Vàng</strong></a>
                                            </li><!-- end ngRepeat: it in item.ProductOptionValues -->
                                        </ul><!-- end ngIf: $index==0 -->
                                        <!-- ngIf: $index==1 -->
                                        <!-- ngIf: $index==2 -->
                                    </div>
                                    <div class="clearfix"></div>
                                </div><!-- end ngRepeat: item in ProductOptions -->
                                <div class="quantity clearfix">
                                    <label>Số lượng</label>
                                    <div class="quantity-input">
                                        <input type="number" value="1" class="text ng-pristine ng-untouched ng-valid" ng-model="InputQuantity" ng-init="InputQuantity=1">
                                    </div>
                                </div>
                                <!-- ngIf: IsTrackingInventory==false||AllowPurchaseWhenSoldOut==true || (IsTrackingInventory&&AllowPurchaseWhenSoldOut==false&&Quantity>0) --><div class="action-cart ng-scope" ng-if="IsTrackingInventory==false||AllowPurchaseWhenSoldOut==true || (IsTrackingInventory&amp;&amp;AllowPurchaseWhenSoldOut==false&amp;&amp;Quantity>0)">
                                    <a href="javascript:void(0)" ng-click="addToCard()" class="btn btn-default"><i class="glyphicon glyphicon-shopping-cart"></i> Thêm giỏ hàng</a>
                                    <a href="javascript:void(0)" ng-click="addToCardBuy()" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Mua ngay</a>
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
                    <div class="product-tabs">
                        <ul class="nav nav-tabs">
                            <!-- ngRepeat: item in ProductTabs --><li role="presentation" ng-class="{'active':$index==0}" ng-repeat="item in ProductTabs" class="ng-scope active">
                                <a data-toggle="tab" href="#tab1" class="ng-binding">Chi tiết sản phẩm</a>
                            </li><!-- end ngRepeat: item in ProductTabs -->
                        </ul>
                        <div class="tab-content">
                            <!-- ngRepeat: item in ProductTabs --><div class="tab-pane fade in ng-scope active" ng-class="{'active':$index==0}" id="tab1" ng-repeat="item in ProductTabs">
                                <div ng-bind-html="item.Content|unsafe" class="ng-binding"><table class="mceItemTable table_productinfo" style="border-collapse:collapse; border-spacing:0px; border:0px; box-sizing:border-box; color:rgb(90, 90, 90); font-family:geneva,arial,helvetica,sans-serif; font-size:12px; height:311px; line-height:18px; margin:0px 0px 0px 10px; padding:0px; text-align:justify; width:575px">
            <tbody>
                <tr>
                    <td style="text-align:left; width:120px"><span style="font-size:large">Tên Sản Phẩm</span></td>
                    <td style="text-align:left; width:250px"><span style="font-size:large">Đầm noel đuôi cá</span></td>
                </tr>
                <tr>
                    <td style="text-align:left; width:120px"><span style="font-size:large">Chất Liệu</span></td>
                    <td style="text-align:left; width:250px"><span style="font-size:large">Cát Hàn</span></td>
                </tr>
                <tr>
                    <td style="text-align:left; width:120px"><span style="font-size:large">Màu Sắc</span></td>
                    <td style="text-align:left; width:250px"><span style="font-size:large">Đỏ</span></td>
                </tr>
                <tr>
                    <td style="text-align:left; width:120px"><span style="font-size:large">Size</span></td>
                    <td style="text-align:left; width:250px"><span style="font-size:large">+ size M: Chiều dài đầm: 85cm, Ngực 80-84cm, Eo 68-72cm, Mông 88-92cm<br>
                    + size L: Chiều dài đầm: 86cm, Ngực 84-88cm, Eo 72-76cm, Mông 92-96cm<br>
                    + size XL: Chiều dài đầm: 87cm, Ngực 88-92cm, Eo 76-80cm, Mông 96-100cm</span></td>
                </tr>
                <tr>
                    <td style="text-align:left; width:120px"><span style="font-size:large">Kiểu Dáng</span></td>
                    <td style="text-align:left; width:250px"><span style="font-size:large">Đầm đuôi cá noel</span></td>
                </tr>
            </tbody>
        </table>
        
        <p>&nbsp;</p>
        
        <p><br>
        &nbsp;</p>
        
        <p style="text-align:center">&nbsp;</p>
        
        <p style="text-align:center">&nbsp;</p>
        
        <p style="text-align:center"><span style="color:rgb(51, 51, 51); font-family:arial; font-size:x-large"><img alt="Đầm body đuôi cá đủ 3 size M, L, XL 1" src="https://media3.scdn.vn/img1/2016/1_16/dam-body-duoi-ca-du-3-size-m-l-xl-1m4G3-a5531b_simg_d0daf0_800x1200_max.jpg" style="border:0px; box-sizing:border-box; margin:0px; max-width:100%; padding:0px"></span></p>
        
        <p style="text-align:center">&nbsp;</p>
        
        <p style="text-align:center">&nbsp;</p>
        
        <p style="text-align:center">&nbsp;</p>
        
        <p style="text-align:center"><img alt="Đầm body đuôi cá đủ 3 size M, L, XL 2" src="https://media3.scdn.vn/img1/2015/12_6/dam-body-duoi-ca-du-3-size-m-l-xl-1m4G3-761e25_simg_d0daf0_800x1200_max.jpg" style="border:0px; box-sizing:border-box; margin:0px; max-width:100%; padding:0px"></p>
        
        <div>&nbsp;</div>
        </div>
                            </div><!-- end ngRepeat: item in ProductTabs -->
                        </div>
                    </div>
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
                                    <!-- ngRepeat: item in OrderDetails -->
                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="total-price-modal">
                                        Tổng cộng : <span class="item-total ng-binding">₫</span>
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