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
                              <span class="page-heading-title">Kết quả tìm kiếm với '{{$search}}'</span>
                           </h2>
                           <!-- PRODUCT LIST -->
                           <ul class="row product-list grid filter">
                              @foreach($products as $item)
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
                     </div>
                     @include('frontend.product.sidebar')
         </div>
@stop