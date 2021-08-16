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
                              @isset($param_c_slug)
                              <li class="icon-li"><strong>{{$category->c_name}}</strong> </li>
                              @else
                              <li class="icon-li"><strong>Sản phẩm</strong> </li>
                              @endisset
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
                              @foreach( $products as $item)
                              <li class="col-md-3 col-sm-6 col-xs-12">
                                 <div class="product-container product-resize fixheight" style="height: 298px;">
                                    <div class="left-block image-resize" style="height: 221px;">
                                       <a href="{{route('get.productDetail',$item->p_slug)}}"><img class="img-responsive" alt="product" src="{{asset('images/product\/')}}{{$item->p_avatar}}"></a>
                                       <div class="quick-view">
                                          <a title="Add to my wishlist" class="heart" href="#"></a>
                                          <a title="Xem chi tiết" class="compare" href="{{route('get.productDetail',$item->p_slug)}}"></a>
                                          <a href="javascript:void(0);" class="qv-e-button btn-quickview-1 search" title="Xem nhanh" data-handle="/san-pham/dam-body-ca-tinh-voi-nhieu-mau-sac-hien-dai-tre-trung.html"></a>
                                       </div>
                                       <div class="add-to-cart">
                                          <a class="add-to-car" href="javascript:void(0);" onclick="AddCart({{ $item->id }})">Thêm vào giỏ</a>
                                       </div>
                                    </div>
                                    <div class="right-block">
                                       <h5 class="product-name"><a href="{{route('get.productDetail',$item->p_slug)}}">{{$item->p_name}}</a></h5>
                                       <div class="content_price">
                                       @if($item->fk_discount->d_number > 0 && $item->fk_discount->d_active == 1)
                                          <span class="price product-price">{{number_format(priceNew($item->p_price,$item->fk_discount->d_number))}}₫</span>
                                          <span class="price old-price">{{number_format($item->p_price)}}₫</span>
                                          @else
                                          <span class="price product-price">{{number_format($item->p_price)}}₫</span>
                                          @endif
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              @endforeach
                           </ul>
                           <div class="col-md-12 content_sortPagiBar pagi">
                              <div id="pagination" class="clearfix">
                                 <!-- pagination -->
                                 {{ $products->links('vendor.pagination.custom') }}
                                
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
