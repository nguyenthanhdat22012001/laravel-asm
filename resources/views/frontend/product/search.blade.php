@extends('layout.frontend2')
@section('content')
<div id="collection">
            <div class="main">
               <div class="container">
                  <div class="row">
                     <div class="col-md-9">
                        <div class="breadcrumb clearfix">
                           <ul>
                              <li itemtype="http://shema.org/Breadcrumb" itemscope="" class="home">
                                 <a title="Đến trang chủ" href="/" itemprop="url"><span itemprop="title">Trang chủ</span></a>
                              </li>
                              <li class="icon-li"><strong>Tìm kiếm</strong> </li>
                           </ul>
                        </div>
                        <script type="text/javascript">
                           $(".link-site-more").hover(function () { $(this).find(".s-c-n").show(); }, function () { $(this).find(".s-c-n").hide(); });
                        </script>
                        <div class="view-product-list">
                           <h2 class="page-heading">
                              <span class="page-heading-title">Kết quả tìm kiếm với 'đầm'</span>
                           </h2>
                           <!-- PRODUCT LIST -->
                           <ul class="row product-list grid filter">
                              <li class="col-md-3 col-sm-6 col-xs-12">
                                 <div class="product-container product-resize fixheight" style="height: 298px;">
                                    <div class="left-block image-resize" style="height: 221px;">
                                       <a href="/san-pham/dam-body-lap-the-tay-dai.html"><img class="img-responsive" alt="product" src="{{asset('images/product/p50_large.jpg')}}"></a>
                                       <div class="quick-view">
                                          <a title="Add to my wishlist" class="heart" href="#"></a>
                                          <a title="Xem chi tiết" class="compare" href="/san-pham/dam-body-lap-the-tay-dai.html"></a>
                                          <a href="javascript:void(0);" class="qv-e-button btn-quickview-1 search" title="Xem nhanh" data-handle="/san-pham/dam-body-lap-the-tay-dai.html"></a>
                                       </div>
                                       <div class="add-to-cart">
                                          <a class="add-to-car" href="javascript:void(0);" onclick="AddToCard(51003,1)">Thêm vào giỏ</a>
                                       </div>
                                    </div>
                                    <div class="right-block">
                                       <h5 class="product-name"><a href="/san-pham/dam-body-lap-the-tay-dai.html">Đầm body lập thể tay dài</a></h5>
                                       <div class="content_price">
                                          <span class="price product-price">310.000₫</span>
                                          <span class="price old-price">560.000₫</span>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="col-md-3 col-sm-6 col-xs-12">
                                 <div class="product-container product-resize fixheight" style="height: 298px;">
                                    <div class="left-block image-resize" style="height: 221px;">
                                       <a href="/san-pham/dam-body-ca-tinh-voi-nhieu-mau-sac-hien-dai-tre-trung.html"><img class="img-responsive" alt="product" src="{{asset('images/product/p35_large.jpg')}}"></a>
                                       <div class="quick-view">
                                          <a title="Add to my wishlist" class="heart" href="#"></a>
                                          <a title="Xem chi tiết" class="compare" href="/san-pham/dam-body-ca-tinh-voi-nhieu-mau-sac-hien-dai-tre-trung.html"></a>
                                          <a href="javascript:void(0);" class="qv-e-button btn-quickview-1 search" title="Xem nhanh" data-handle="/san-pham/dam-body-ca-tinh-voi-nhieu-mau-sac-hien-dai-tre-trung.html"></a>
                                       </div>
                                       <div class="add-to-cart">
                                          <a class="add-to-car" href="javascript:void(0);" onclick="AddToCard(51001,1)">Thêm vào giỏ</a>
                                       </div>
                                    </div>
                                    <div class="right-block">
                                       <h5 class="product-name"><a href="/san-pham/dam-body-ca-tinh-voi-nhieu-mau-sac-hien-dai-tre-trung.html">Đầm body cá tình với nhiều màu sắc hiện đại, trẻ trung</a></h5>
                                       <div class="content_price">
                                          <span class="price product-price">400.000₫</span>
                                          <span class="price old-price">620.000₫</span>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="col-md-3 col-sm-6 col-xs-12">
                                 <div class="product-container product-resize fixheight" style="height: 298px;">
                                    <div class="left-block image-resize" style="height: 221px;">
                                       <a href="/san-pham/dam-maxi-du-tiec-hoa-hong-nh028.html"><img class="img-responsive" alt="product" src="{{asset('images/product/p49_large.jpg')}}"></a>
                                       <div class="quick-view">
                                          <a title="Add to my wishlist" class="heart" href="#"></a>
                                          <a title="Xem chi tiết" class="compare" href="/san-pham/dam-maxi-du-tiec-hoa-hong-nh028.html"></a>
                                          <a href="javascript:void(0);" class="qv-e-button btn-quickview-1 search" title="Xem nhanh" data-handle="/san-pham/dam-maxi-du-tiec-hoa-hong-nh028.html"></a>
                                       </div>
                                       <div class="add-to-cart">
                                          <a class="add-to-car" href="javascript:void(0);" onclick="AddToCard(51002,1)">Thêm vào giỏ</a>
                                       </div>
                                    </div>
                                    <div class="right-block">
                                       <h5 class="product-name"><a href="/san-pham/dam-maxi-du-tiec-hoa-hong-nh028.html">Đầm maxi dự tiệc hoa hồng - NH028</a></h5>
                                       <div class="content_price">
                                          <span class="price product-price">190.000₫</span>
                                          <span class="price old-price">240.000₫</span>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="col-md-3 col-sm-6 col-xs-12">
                                 <div class="product-container product-resize fixheight" style="height: 298px;">
                                    <div class="left-block image-resize" style="height: 221px;">
                                       <a href="/san-pham/dam-mac-nha-phoi-no-xinh-xan-twins.html"><img class="img-responsive" alt="product" src="{{asset('images/product/p52_large.jpg')}}"></a>
                                       <div class="quick-view">
                                          <a title="Add to my wishlist" class="heart" href="#"></a>
                                          <a title="Xem chi tiết" class="compare" href="/san-pham/dam-mac-nha-phoi-no-xinh-xan-twins.html"></a>
                                          <a href="javascript:void(0);" class="qv-e-button btn-quickview-1 search" title="Xem nhanh" data-handle="/san-pham/dam-mac-nha-phoi-no-xinh-xan-twins.html"></a>
                                       </div>
                                       <div class="add-to-cart">
                                          <a class="add-to-car" href="javascript:void(0);" onclick="AddToCard(51005,1)">Thêm vào giỏ</a>
                                       </div>
                                    </div>
                                    <div class="right-block">
                                       <h5 class="product-name"><a href="/san-pham/dam-mac-nha-phoi-no-xinh-xan-twins.html">Đầm mặc nhà phối nơ xinh xắn Twins</a></h5>
                                       <div class="content_price">
                                          <span class="price product-price">2.400.000₫</span>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="col-md-3 col-sm-6 col-xs-12">
                                 <div class="product-container product-resize fixheight" style="height: 298px;">
                                    <div class="left-block image-resize" style="height: 221px;">
                                       <a href="/san-pham/dam-dao-pho-hoa-tiet-style-a1.html"><img class="img-responsive" alt="product" src="{{asset('images/product/p53_large.jpg')}}"></a>
                                       <div class="quick-view">
                                          <a title="Add to my wishlist" class="heart" href="#"></a>
                                          <a title="Xem chi tiết" class="compare" href="/san-pham/dam-dao-pho-hoa-tiet-style-a1.html"></a>
                                          <a href="javascript:void(0);" class="qv-e-button btn-quickview-1 search" title="Xem nhanh" data-handle="/san-pham/dam-dao-pho-hoa-tiet-style-a1.html"></a>
                                       </div>
                                       <div class="add-to-cart">
                                          <a class="add-to-car" href="javascript:void(0);" onclick="AddToCard(51006,1)">Thêm vào giỏ</a>
                                       </div>
                                    </div>
                                    <div class="right-block">
                                       <h5 class="product-name"><a href="/san-pham/dam-dao-pho-hoa-tiet-style-a1.html">Đầm dạo phố họa tiết style - A1</a></h5>
                                       <div class="content_price">
                                          <span class="price product-price">220.000₫</span>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="col-md-3 col-sm-6 col-xs-12">
                                 <div class="product-container product-resize fixheight" style="height: 298px;">
                                    <div class="left-block image-resize" style="height: 221px;">
                                       <a href="/san-pham/dam-mac-nha-tay-lo-nitimo-2001.html"><img class="img-responsive" alt="product" src="{{asset('images/product/p51_large.jpg')}}"></a>
                                       <div class="quick-view">
                                          <a title="Add to my wishlist" class="heart" href="#"></a>
                                          <a title="Xem chi tiết" class="compare" href="/san-pham/dam-mac-nha-tay-lo-nitimo-2001.html"></a>
                                          <a href="javascript:void(0);" class="qv-e-button btn-quickview-1 search" title="Xem nhanh" data-handle="/san-pham/dam-mac-nha-tay-lo-nitimo-2001.html"></a>
                                       </div>
                                       <div class="add-to-cart">
                                          <a class="add-to-car" href="javascript:void(0);" onclick="AddToCard(51004,1)">Thêm vào giỏ</a>
                                       </div>
                                    </div>
                                    <div class="right-block">
                                       <h5 class="product-name"><a href="/san-pham/dam-mac-nha-tay-lo-nitimo-2001.html">Đầm mặc nhà tay lỡ NITIMO 2001</a></h5>
                                       <div class="content_price">
                                          <span class="price product-price">190.000₫</span>
                                          <span class="price old-price">280.000₫</span>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                           <!-- ./PRODUCT LIST -->
                        </div>
                     </div>
                     @include('frontend.product.sidebar')
         </div>
@stop