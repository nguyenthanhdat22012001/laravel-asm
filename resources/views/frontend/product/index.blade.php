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
                              <li class="icon-li"><strong>Sản phẩm</strong> </li>
                           </ul>
                        </div>
                        <script type="text/javascript">
                           $(".link-site-more").hover(function () { $(this).find(".s-c-n").show(); }, function () { $(this).find(".s-c-n").hide(); });
                        </script>
                        <div class="view-product-list">
                           <h2 class="page-heading">
                              <span class="page-heading-title">Sản phẩm</span>
                           </h2>
                           <div class="browse-tags">
                              <span>Sắp xếp theo:</span>
                              <span class="custom-dropdown custom-dropdown--white">
                                 <select id="lblimit" name="lblimit" class="sort-by custom-dropdown__select custom-dropdown__select--white" onchange="window.location.href = this.options[this.selectedIndex].value">
                                    <option value="?limit=10">10</option>
                                    <option selected="selected" value="?limit=12">12</option>
                                    <option value="?limit=20">20</option>
                                    <option value="?limit=50">50</option>
                                    <option value="?limit=100">100</option>
                                    <option value="?limit=250">250</option>
                                    <option value="?limit=500">500</option>
                                 </select>
                              </span>
                           </div>
                           <!-- PRODUCT LIST -->
                           <ul class="row product-list grid filter">
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
                                       <a href="/san-pham/giay-tennis-t19-xanh.html"><img class="img-responsive" alt="product" src="{{asset('images/product/p55_large.jpg')}}"></a>
                                       <div class="quick-view">
                                          <a title="Add to my wishlist" class="heart" href="#"></a>
                                          <a title="Xem chi tiết" class="compare" href="/san-pham/giay-tennis-t19-xanh.html"></a>
                                          <a href="javascript:void(0);" class="qv-e-button btn-quickview-1 search" title="Xem nhanh" data-handle="/san-pham/giay-tennis-t19-xanh.html"></a>
                                       </div>
                                       <div class="add-to-cart">
                                          <a class="add-to-car" href="javascript:void(0);" onclick="AddToCard(51007,1)">Thêm vào giỏ</a>
                                       </div>
                                    </div>
                                    <div class="right-block">
                                       <h5 class="product-name"><a href="/san-pham/giay-tennis-t19-xanh.html">Giày Tennis T19 xanh</a></h5>
                                       <div class="content_price">
                                          <span class="price product-price">790.000₫</span>
                                          <span class="price old-price">900.000₫</span>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="col-md-3 col-sm-6 col-xs-12">
                                 <div class="product-container product-resize fixheight" style="height: 298px;">
                                    <div class="left-block image-resize" style="height: 221px;">
                                       <a href="/san-pham/mu-tennis-puma-ws-cat-performance-visor-908279-04.html"><img class="img-responsive" alt="product" src="{{asset('images/product/p56_large.jpg')}}"></a>
                                       <div class="quick-view">
                                          <a title="Add to my wishlist" class="heart" href="#"></a>
                                          <a title="Xem chi tiết" class="compare" href="/san-pham/mu-tennis-puma-ws-cat-performance-visor-908279-04.html"></a>
                                          <a href="javascript:void(0);" class="qv-e-button btn-quickview-1 search" title="Xem nhanh" data-handle="/san-pham/mu-tennis-puma-ws-cat-performance-visor-908279-04.html"></a>
                                       </div>
                                       <div class="add-to-cart">
                                          <a class="add-to-car" href="javascript:void(0);" onclick="AddToCard(51008,1)">Thêm vào giỏ</a>
                                       </div>
                                    </div>
                                    <div class="right-block">
                                       <h5 class="product-name"><a href="/san-pham/mu-tennis-puma-ws-cat-performance-visor-908279-04.html">Mũ Tennis Puma w's cat performance visor 908279 04</a></h5>
                                       <div class="content_price">
                                          <span class="price product-price">520.000₫</span>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="col-md-3 col-sm-6 col-xs-12">
                                 <div class="product-container product-resize fixheight" style="height: 298px;">
                                    <div class="left-block image-resize" style="height: 221px;">
                                       <a href="/san-pham/ao-tennis-nam-donexpro-mc-8882-x-xanh-.html"><img class="img-responsive" alt="product" src="{{asset('images/product/p57_large.jpg')}}"></a>
                                       <div class="quick-view">
                                          <a title="Add to my wishlist" class="heart" href="#"></a>
                                          <a title="Xem chi tiết" class="compare" href="/san-pham/ao-tennis-nam-donexpro-mc-8882-x-xanh-.html"></a>
                                          <a href="javascript:void(0);" class="qv-e-button btn-quickview-1 search" title="Xem nhanh" data-handle="/san-pham/ao-tennis-nam-donexpro-mc-8882-x-xanh-.html"></a>
                                       </div>
                                       <div class="add-to-cart">
                                          <a class="add-to-car" href="javascript:void(0);" onclick="AddToCard(51009,1)">Thêm vào giỏ</a>
                                       </div>
                                    </div>
                                    <div class="right-block">
                                       <h5 class="product-name"><a href="/san-pham/ao-tennis-nam-donexpro-mc-8882-x-xanh-.html">Áo tennis nam Donexpro MC-8882-X (Xanh)</a></h5>
                                       <div class="content_price">
                                          <span class="price product-price">299.000₫</span>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="col-md-3 col-sm-6 col-xs-12">
                                 <div class="product-container product-resize fixheight" style="height: 298px;">
                                    <div class="left-block image-resize" style="height: 221px;">
                                       <a href="/san-pham/vot-tennis-wilson-pro-staff-97-ls-wrt7250102.html"><img class="img-responsive" alt="product" src="{{asset('images/product/p58_large.jpg')}}"></a>
                                       <div class="quick-view">
                                          <a title="Add to my wishlist" class="heart" href="#"></a>
                                          <a title="Xem chi tiết" class="compare" href="/san-pham/vot-tennis-wilson-pro-staff-97-ls-wrt7250102.html"></a>
                                          <a href="javascript:void(0);" class="qv-e-button btn-quickview-1 search" title="Xem nhanh" data-handle="/san-pham/vot-tennis-wilson-pro-staff-97-ls-wrt7250102.html"></a>
                                       </div>
                                       <div class="add-to-cart">
                                          <a class="add-to-car" href="javascript:void(0);" onclick="AddToCard(51010,1)">Thêm vào giỏ</a>
                                       </div>
                                    </div>
                                    <div class="right-block">
                                       <h5 class="product-name"><a href="/san-pham/vot-tennis-wilson-pro-staff-97-ls-wrt7250102.html">Vợt tennis Wilson Pro Staff 97 LS WRT7250102</a></h5>
                                       <div class="content_price">
                                          <span class="price product-price">4.150.000₫</span>
                                          <span class="price old-price">6.400.000₫</span>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="col-md-3 col-sm-6 col-xs-12">
                                 <div class="product-container product-resize fixheight" style="height: 298px;">
                                    <div class="left-block image-resize" style="height: 221px;">
                                       <a href="/san-pham/ao-tennis-nudonexpro-mc-8882-x-den-.html"><img class="img-responsive" alt="product" src="{{asset('images/product/p59_large.jpg')}}"></a>
                                       <div class="quick-view">
                                          <a title="Add to my wishlist" class="heart" href="#"></a>
                                          <a title="Xem chi tiết" class="compare" href="/san-pham/ao-tennis-nudonexpro-mc-8882-x-den-.html"></a>
                                          <a href="javascript:void(0);" class="qv-e-button btn-quickview-1 search" title="Xem nhanh" data-handle="/san-pham/ao-tennis-nudonexpro-mc-8882-x-den-.html"></a>
                                       </div>
                                       <div class="add-to-cart">
                                          <a class="add-to-car" href="javascript:void(0);" onclick="AddToCard(51011,1)">Thêm vào giỏ</a>
                                       </div>
                                    </div>
                                    <div class="right-block">
                                       <h5 class="product-name"><a href="/san-pham/ao-tennis-nudonexpro-mc-8882-x-den-.html">Áo tennis nữDonexpro MC-8882-X (Đen)</a></h5>
                                       <div class="content_price">
                                          <span class="price product-price">199.000₫</span>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="col-md-3 col-sm-6 col-xs-12">
                                 <div class="product-container product-resize fixheight" style="height: 298px;">
                                    <div class="left-block image-resize" style="height: 221px;">
                                       <a href="/san-pham/tui-dung-do-dung-cung-the-thao-k300.html"><img class="img-responsive" alt="product" src="{{asset('images/product/p60_large.jpg')}}"></a>
                                       <div class="quick-view">
                                          <a title="Add to my wishlist" class="heart" href="#"></a>
                                          <a title="Xem chi tiết" class="compare" href="/san-pham/tui-dung-do-dung-cung-the-thao-k300.html"></a>
                                          <a href="javascript:void(0);" class="qv-e-button btn-quickview-1 search" title="Xem nhanh" data-handle="/san-pham/tui-dung-do-dung-cung-the-thao-k300.html"></a>
                                       </div>
                                       <div class="add-to-cart">
                                          <a class="add-to-car" href="javascript:void(0);" onclick="AddToCard(51012,1)">Thêm vào giỏ</a>
                                       </div>
                                    </div>
                                    <div class="right-block">
                                       <h5 class="product-name"><a href="/san-pham/tui-dung-do-dung-cung-the-thao-k300.html">Túi đựng đồ, dụng cụng thể thao K300</a></h5>
                                       <div class="content_price">
                                          <span class="price product-price">120.000₫</span>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                           <div class="col-md-12 content_sortPagiBar pagi">
                              <div id="pagination" class="clearfix">
                                 <ul class="pagination">
                                    <li class="pagination_previous">
                                       <a href="?page=1" title="<< pre">»</a>
                                    </li>
                                    <li class="active"><span>1</span></li>
                                    <li>
                                       <a href="?page=2" title="">2</a>
                                    </li>
                                    <li>
                                       <a href="?page=3" title="">3</a>
                                    </li>
                                    <li class="pagination_next"><a href="?page=3" title="Next >>"></a></li>
                                 </ul>
                              </div>
                           </div>
                           <!-- ./PRODUCT LIST -->
                        </div>
                        <!--Template--
                           --End-->
                     </div>
                    @include('frontend.product.sidebar')
         </div>
@stop