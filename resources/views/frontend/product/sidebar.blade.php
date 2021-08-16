
<div class="col-md-3">
                        <div class="menu-product">
                           <h3>
                              <span>
                              Sản phẩm
                              </span>
                           </h3>
                           <ul class="level_0">
                           @foreach($listCategoryGlobal as $item)
                              @php
                                 $flagSubMenu = (isset($item->category_child) && !$item->category_child->isEmpty()) ? true : false;
                              @endphp
                              <li class="{{$flagSubMenu ? 'child' : '' }}">
                                 <span><a href="{{ route('get.categoryProduct',$item->c_slug) }}"><i class="fa fa-arrow-circle-right"></i> {{$item->c_name}}</a></span><span class=" {{$flagSubMenu ? 'open-close' : '' }}"><i class="{{$flagSubMenu ? 'fa fa-angle-down' : '' }}"></i></span>
                                 @if(isset($item->category_child) && !$item->category_child->isEmpty())
                                 <ul class="level_1 hidden-xs">
                                    @foreach($item->category_child as $sub_item) 
                                     <li><span><a href="{{ route('get.categoryProduct',$sub_item->c_slug) }}"><i class="fa fa-check"></i> {{$sub_item->c_name}}</a></span></li>
                                    @endforeach
                                 </ul>
                                 @endif
                              </li>
                           @endforeach
                             
                           </ul>
                        </div>
                        <script type="text/javascript">
                           $(document).ready(function () {
                               $('.menu-product li.child .open-close').on('click', function () {
                                   $(this).removeAttr('href');
                                   var element = $(this).parent('li');
                                   if (element.hasClass('open')) {
                                       element.removeClass('open');
                                       element.children('ul').slideUp();
                                   }
                                   else {
                                       element.addClass('open');
                                       element.children('ul').slideDown();
                                   }
                               });
                           });
                        </script>
                        <div id="left_column">
                           <div class="block left-module">
                              <p class="title_block">Sản phẩm Hot</p>
                              <div class="block_content">
                                 <ul class="products-block best-sell">
                                 @foreach($listProductHotGlobal as $item)
                                 @php
                                    $sumStars = App\Models\rating_Comment::where('rc_p_id',$item->id)->avg('rc_stars');
                                 @endphp
                                    <li class="clearfix">
                                       <div class="products-block-left">
                                          <a href="{{route('get.productDetail',$item->p_slug)}}"><img class="img-responsive" alt="{{$item->p_name}}" src="{{asset('images/product\/')}}{{$item->p_avatar}}"></a>
                                       </div>
                                       <div class="products-block-right">
                                          <p class="product-name">
                                             <a href="{{route('get.productDetail',$item->p_slug)}}">{{$item->p_name}}</a>
                                          </p>
                                          <p class="product-price">
                                          @if($item->fk_discount->d_number >0 && $item->fk_discount->d_active == 1)
                                             <span class="">{{number_format(priceNew($item->p_price,$item->fk_discount->d_number))}}₫</span>
                                             <span class="price old-price">{{number_format($item->p_price)}}₫</span>
                                             @else
                                             <span class="">{{number_format($item->p_price)}}₫</span>
                                             @endif
                                          </p>
                                          @if($sumStars > 0)
                                          <p class="product-star">
                                          @for($i=0; $i< $sumStars; $i++ )
                                            <i class="fa fa-star"></i>
                                          @endfor
                                          </p>
                                          @endif
                                       </div>
                                    </li>
                                 @endforeach
                                   
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>