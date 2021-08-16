


<!DOCTYPE html>
<html>
   <head>
      <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
      <meta charset="UTF-8" />
      <title>Shoppo</title>
      <meta name="description" />
      <meta name="keywords" />
      <meta name="csrf-token" content="{{ csrf_token() }}" />
      <link href="{{asset('images/favicon.png')}}" rel="shortcut icon" type="image/x-icon" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- <meta property="fb:app_id" content="227481454296289" />
      <meta content="vi_VN" property="og:locale" />
      <meta content="website" property="og:type" />
      <meta content="C&#212;NG TY TNHH PH&#193;T TRIỂN C&#212;NG NGHỆ RUNTIME" property="og:title" />
      <meta property="og:description" />
      <meta content="http://runecom02.runtime.vn" property="og:image" />
      <meta content="http://runecom02.runtime.vn/trang-chu.html" property="og:url" />
      <meta content="kute-shop" property="og:site_name" /> -->
      <script src="{{asset('js/jquery-1.11.3.min.js')}}"></script>
      <script src="{{asset('js/boostrap/bootstrap.min.js')}}"></script>
      <!--<script src="/public/js/option_selection.min.js"></script>-->
      <!--<script src="/public/js/api.jquery.min.js"></script>-->
      <script src="{{asset('js/jquery.bxslider.min.js')}}" type='text/javascript'></script>
      <script src="{{asset('js/select2.min.js')}}" type='text/javascript'></script>
      <script src="{{asset('js/owl.carousel/owl.carousel.min.js')}}" type='text/javascript'></script>
      <script src="{{asset('js/modernizr.min.js')}}" type='text/javascript'></script>
      <script src="{{asset('js/jquery.cookie.js')}}" type='text/javascript'></script>
      <script src="{{asset('js/jquery.countdown.min.js')}}" type='text/javascript'></script>
      <script src="{{asset('js/fancybox/jquery.fancybox.js')}}" type='text/javascript'></script>
      <!--<script src='img/jquery.lazyload.js')}}" type='text/javascript'></script> -->
      <script src="{{asset('js/jquery.flexslider-min.js')}}" type='text/javascript'></script>
      <script src="{{asset('js/jquery.plugin.js')}}" type='text/javascript'></script>
      <script src="{{asset('js/jquery.actual.min.js')}}" type='text/javascript'></script>
      <script src="{{asset('js/jquery-ui/jquery-ui.min.js')}}" type='text/javascript'></script>
      <script src="{{asset('js/html5shiv.js')}}"></script>
      <script src="{{asset('js/jquery-migrate-1.2.0.min.js')}}"></script>
      <script src="{{asset('js/jquery.touchSwipe.min.js')}}" type='text/javascript'></script>
      <!--<script src="/public/js/haravan.plugin.1.0.min.js"></script>-->
      <script src="https://use.fontawesome.com/e398680cc7.js"></script>
      <script async="" defer="defer" data-target=".product-resize" data-parent=".products-resize" data-img-box=".image-resize" src="public/js/fixheightproductv2.js"></script>
      <!--------------CSS----------->
      <link href="{{asset('js/boostrap/bootstrap.min.css')}}" rel="stylesheet" />
      <link href="{{asset('fonts/fontawesome/css/font-awesome.min.css')}}" rel="stylesheet" />
      <link href="{{asset('css/reset.css')}}" rel='stylesheet' type='text/css' media='all' />
      <link href="{{asset('css/flexslider.css')}}" rel='stylesheet' type='text/css' media='all' />
      <link href="{{asset('css/animate.css')}}" rel='stylesheet' type='text/css' media='all' />
      <link href="{{asset('css/jquery.bxslider.css')}}" rel='stylesheet' type='text/css' media='all' />
      <link href="{{asset('js/fancybox/jquery.fancybox.css')}}" rel='stylesheet' type='text/css' media='all' />
      <link href="{{asset('js/jquery-ui/jquery-ui.css?')}}" rel='stylesheet' type='text/css' media='all' />
      <link href="{{asset('js/owl.carousel/owl.carousel.css')}}" rel='stylesheet' type='text/css' media='all' />
      <link href="{{asset('css/select2.min.css')}}" rel='stylesheet' type='text/css' media='all' />
      <script src="{{asset('common/mycard.js')}}" type="text/javascript"></script>
      <!-- <script src="/Scripts/lazyLoad/jquery.lazyload.min.js" type="text/javascript"></script>
      <script src="/Scripts/angularJS/angular.min.js"></script>
      <script src="/Scripts/angularJS/angular-sanitize.min.js"></script>
      <script type="text/javascript" src="/Scripts/angular-loading-spinner/spin.min.js"></script>
      <script type="text/javascript" src="/Scripts/angular-loading-spinner/angular-spinner.min.js"></script>
      <script type="text/javascript" src="/Scripts/angular-loading-spinner/angular-loading-spinner.js"></script>
      <script src="/app/appMain.js"></script>
      <script src="/app/directives/directive.js"></script>
      <script src="/app/directives/angular-summernote.js"></script>
      <script src="/app/directives/paging.js"></script>
      <script src="/app/services/ajaxServices.js"></script>
      <script src="/app/services/alertsServices.js"></script>
      -->
      <script src="{{asset('js/theme-script.js')}}" type='text/javascript'></script>
      <script src="{{asset('js/cart.js')}}" type='text/javascript'></script>
      <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('css/resposive.css')}}" rel="stylesheet" type="text/css" />
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <!-- JavaScript -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
   </head>
   <body class="home option2">
      <div id="fb-root"></div>
      <script>
         (function (d, s, id) {
             var js, fjs = d.getElementsByTagName(s)[0];
             if (d.getElementById(id)) return;
             js = d.createElement(s); js.id = id;
             js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6&appId=227481454296289";
             fjs.parentNode.insertBefore(js, fjs);
         }(document, 'script', 'facebook-jssdk'));
      </script>
      <div class="wrapper page-home">
         <div id="header" class="header">
            <script src="{{asset('common/login.js')}}" type="text/javascript"></script>

               @include('frontend.popular.header-top')

            <!--Template--
               <section class="top-link clearfix" ng-controller="moduleController" ng-init="initTopLinkController('Shop','AccountLogin')">
                   <div class="container">
                       <div class="row">
                           <div class="col-md-12">
                               <ul class="nav navbar-nav topmenu-contact pull-left">
                                   <li><i class="fa fa-phone"></i> <span>Hotline:</span></li>
                               </ul>
                               <ul class="nav navbar-nav navbar-right topmenu  hidden-xs hidden-sm" ng-if="accountLogin==null">
                                   <li class="order-check"><a href="/kiem-tra-don-hang.html"><i class="fa fa-pencil-square-o"></i> Kiểm tra đơn hàng</a></li>
                                   <li class="order-cart"><a href="/gio-hang.html"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
                                   <li class="account-login"><a href="/dang-nhap.html"><i class="fa fa-sign-in"></i> Đăng nhập </a></li>
                                   <li class="account-register"><a href="/dang-ky.html"><i class="fa fa-key"></i> Đăng ký </a></li>
                               </ul>
                               <ul class="nav navbar-nav navbar-right topmenu hidden-xs hidden-sm" ng-if="accountLogin!=null">
                                   <li class="order-check"><a href="/kiem-tra-don-hang.html"><i class="fa fa-pencil-square-o"></i> Kiểm tra đơn hàng</a></li>
                                   <li class="order-cart"><a href="/gio-hang.html"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
                                   <li class="webmaster"><a href="/admin"><i class="fa fa-gears"></i> Quản trị website</a></li>
                                   <li class="account-info">
                                       <a href="/thong-tin-tai-khoan.html">accountLogin.Email</a>
                                       <a class="account-logout" id="btnLogOff" href="javascript:void(0)" title="">[Thoát] </a>
                                   </li>
                               </ul>
                               <div class="show-mobile hidden-lg hidden-md">
                                   <div class="quick-user">
                                       <div class="quickaccess-toggle">
                                           <i class="fa fa-user"></i>
                                       </div>
                                       <div class="inner-toggle">
                                           <ul class="login links" ng-if="accountLogin==null">
                                               <li>
                                                   <a href="/dang-ky.html"><i class="fa fa-sign-in"></i> Đăng ký</a>
                                               </li>
                                               <li>
                                                   <a href="/dang-nhap.html"><i class="fa fa-key"></i>Đăng nhập</a>
                                               </li>
                                           </ul>
                                           <ul class="login links" ng-if="accountLogin!=null">
                                               <li ng-if="accountLogin.AccountTypeId==1">
                                                   <a href="/admin"><i class="fa fa-gears"></i> Quản trị website</a>
                                               </li>
                                               <li>
                                                   <a href="/thong-tin-tai-khoan.html">accountLogin.Email</a>
                                               </li>
                                               <li>
                                                   <a id="btnLogOff2" href="javascript:void(0)"><i class="fa fa-sign-out"></i> [Thoát] </a>
                                               </li>
                                           </ul>
                                       </div>
                                   </div>
                                   <div class="quick-access">
                                       <div class="quickaccess-toggle">
                                           <i class="fa fa-list"></i>
                                       </div>
                                       <div class="inner-toggle">
                                           <ul class="links">
                                               <li><a id="mobile-wishlist-total" href="/kiem-tra-don-hang.html" class="wishlist"><i class="fa fa-pencil-square-o"></i> Kiểm tra đơn hàng</a></li>
                                               <li><a href="/gio-hang.html" class="shoppingcart"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
                                           </ul>
                                       </div>
                                   </div>
                               </div>
               
                           </div>
                       </div>
                   </div>
               </section>
               --End-->
            <!-- MAIN HEADER -->
            <div class="container main-header">
               <div class="row">
                  <div class="col-xs-12 col-sm-3 logo">
                     <a href="/" class="logo" title="C&#212;NG TY TNHH PH&#193;T TRIỂN C&#212;NG NGHỆ RUNTIME">
                     <img src="{{asset('images/logo2.png')}}" alt="C&#212;NG TY TNHH PH&#193;T TRIỂN C&#212;NG NGHỆ RUNTIME" title="C&#212;NG TY TNHH PH&#193;T TRIỂN C&#212;NG NGHỆ RUNTIME">
                     </a>
                     <h1 style="display: none;">
                        C&#212;NG TY TNHH PH&#193;T TRIỂN C&#212;NG NGHỆ RUNTIME
                     </h1>
                  </div>
                  
                     <!-- form seach -->
                     @include('frontend.popular.formSearch')

                  <div class="col-xs-5 col-sm-2 group-button-header new-login">
                     <a title="Đăng nhập" href="{{route('get.login')}}" class="btn-heart"></a>
                     <div class="btn-cart" id="cart-block">
                        <a title="My cart" href="{{route('get.orderCart')}}">Giỏ hàng</a>
                        <span class="text-show">Giỏ hàng</span>
                        @if( Session::has('Cart'))
                        <span class="notify notify-right" id="totalQuanty">{{Session::get('Cart')->totalQuanty}}</span>
                        @else
                        <span class="notify notify-right" id="totalQuanty">0</span>
                        @endif
                        <div class="cart-block">
                           <div class="cart-block-content" id="changeCart">
                              @include('frontend.menuTop.cart')
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            </div>
            <!-- END MANIN HEADER -->
            
            <!--Template--
               --End-->
            <div id="nav-top-menu" class="nav-top-menu">
               <div class="container">
                  <div class="row">
                     <div class="col-sm-3" id="box-vertical-megamenus">
                        <div class="box-vertical-megamenus menu-quick-select">
                           <h4 class="title click-menu">
                              <span class="title-menu">Danh mục sản phẩm</span>
                              <span class="btn-open-mobile pull-right home-page"><i class="fa fa-bars"></i></span>
                           </h4>
                           <div class="vertical-menu-content is-home">
                              <ul class='vertical-menu-list'>

                                  @foreach($listCategoryGlobal as $item)
                                    @php
                                       $flagSubMenu = (isset($item->category_child) && !$item->category_child->isEmpty()) ? true : false;
                                    @endphp
                                    <li class=" {{ $flagSubMenu ? 'has-child' : '' }} level0">
                                       <a class="  {{ $flagSubMenu ? 'dropdown-toggle has-category parent' : '' }}" href="{{ route('get.categoryProduct',$item->c_slug) }}"><img class='icon-menu' src="{{url('images/icon\/')}}{{$item->c_avatar}}" > <span>{{$item->c_name}}</span></a>
                                       @if(isset($item->category_child) && !$item->category_child->isEmpty())
                                          <ul class='level1 drop-menu'>
                                          @foreach($item->category_child as $sub_item) 
                                          <li class='level1'><a class='' href="{{ route('get.categoryProduct',$sub_item->c_slug) }}"><span>{{$sub_item->c_name}}</span></a></li>
                                          @endforeach
                                          </ul class='level1 drop-menu'>
                                       @endif
                                    </li>
                                  @endforeach
                              </ul class='vertical-menu-list'>
                           </div>
                        </div>
                     </div>
                     <div id="main-menu-new" class="col-sm-12 col-md-9 main-menu">
                        <nav class="navbar navbar-default">
                           <div class="container-fluid">
                              <div class="navbar-header">
                                 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#new-menu" aria-expanded="false" aria-controls="navbar">
                                 <i class="fa fa-bars"></i>
                                 </button>
                                 <a class="navbar-brand" href="#">MENU</a>
                              </div>
                                 @include('frontend.menuTop.list-menu')
                              <!--/.nav-collapse -->
                           </div>
                        </nav>
                     </div>
                  </div>
                  <!-- userinfo on top-->
                  <div id="form-search-opntop">
                  </div>
                  <!-- userinfo on top-->
                  <!-- CART ICON ON MMENU -->
                  <div id="shopping-cart-box-ontop">
                     <a href="/gio-hang.html">
                     <span class="icon-cart-ontop"></span>
                     </a>
                        @if( Session::has('Cart'))
                           <span class="cart-items-count" id="totalQuantySroll">{{Session::get('Cart')->totalQuanty}}</span>
                        @else
                           <span class="cart-items-count" id="totalQuantySroll">0</span>
                        @endif
                     <span class="text">Giỏ hàng</span>
                     <div class="shopping-cart-box-ontop-content">
                     </div>
                  </div>
               </div>
            </div>
            <script type="text/javascript">
               $(document).ready(function () {
                   var str = location.href.toLowerCase();
                   $("ul.menu li a").each(function () {
                       if (str.indexOf(this.href.toLowerCase()) >= 0) {
                           $("ul.menu li").removeClass("active");
                           $(this).parent().addClass("active");
                       }
                   });
               });
            </script>
            <!--Template--
               --End-->

               @yield('content')

         <div class="footer">
            <script src="/app/services/moduleServices.js"></script>
            <script src="/app/controllers/moduleController.js"></script>
            <footer id="footer">
               <div class="container">
                  <!-- introduce-box -->
                  <div id="introduce-box" class="row">
                     <div class="col-md-3">
                        <div id="address-box">
                           <a href="/"><img src="{{asset('images/logo2.png')}}" alt="logo" /></a>
                           <div id="address-list">
                              <div class="tit-name">Địa chỉ:</div>
                              <div class="tit-contain">1005 Quang Trung, P.14, Q.G&#242; Vấp, Tp.HCM</div>
                              <div class="tit-name">Điện thoại:</div>
                              <div class="tit-contain">(08) 66 85 85 38</div>
                              <div class="tit-name">Email:</div>
                              <div class="tit-contain">nguyendat@gmail.com</div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="row">
                           <div class="col-sm-4">
                              <div class="introduce-title">Về ch&#250;ng t&#244;i</div>
                              <ul class="introduce-list">
                                 <li class="item">
                                    <a href="/gioi-thieu.html">
                                    Giới thiệu
                                    </a>
                                 </li>
                                 <li class="item">
                                    <a href="/content/giao-hang-doi-tra.html">
                                    Giao h&#224;ng - Đổi trả
                                    </a>
                                 </li>
                                 <li class="item">
                                    <a href="/content/chinh-sach-bao-mat.html">
                                    Ch&#237;nh s&#225;ch bảo mật
                                    </a>
                                 </li>
                                 <li class="item">
                                    <a href="/lien-he.html">
                                    Li&#234;n hệ
                                    </a>
                                 </li>
                              </ul>
                           </div>
                           <div class="col-sm-4">
                              <div class="introduce-title">Trợ gi&#250;p</div>
                              <ul class="introduce-list">
                                 <li class="item">
                                    <a href="/content/huong-dan-mua-hang.html">
                                    Hướng dẫn mua h&#224;ng
                                    </a>
                                 </li>
                                 <li class="item">
                                    <a href="/content/huong-dan-thanh-toan.html">
                                    Hướng dẫn thanh to&#225;n
                                    </a>
                                 </li>
                                 <li class="item">
                                    <a href="/content/tai-khoan-giao-dich.html">
                                    T&#224;i khoản giao dịch
                                    </a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div id="contact-box" ng-controller="moduleController" ng-init="initController()">
                           <div class="introduce-title">Đăng ký nhận tin</div>
                           <form ng-submit="registerNewsletter()" class='contact-form'>
                              <div class="input-group" id="mail-box">
                                 <input ng-model="newsletter.Email" type="email" placeholder="Đăng ký email" required="required" />
                                 <span class="input-group-btn">
                                 <button type="submit" class="btn btn-default">Gửi</button>
                                 </span>
                              </div>
                              <!-- /input-group -->
                           </form>
                           <div class="introduce-title">Liên kết</div>
                           <div class="social-link">
                              <a><i class="fa fa-facebook"></i></a>
                              <a><i class="fa fa-youtube"></i></a>
                              <a><i class="fa fa-twitter"></i></a>
                              <a><i class="fa fa-google-plus"></i></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- /#introduce-box -->
                  <!-- #trademark-box -->
                  <div id="trademark-box" class="row">
                     <div class="col-sm-12">
                        <ul id="trademark-list">
                           <li id="payment-methods">Phương thức thanh toán</li>
                           <li><a href="javascript:;"><img src="{{asset('images/trademark_1.jpg')}}" alt="Phương thức thanh toán 1"></a></li>
                           <li><a href="javascript:;"><img src="{{asset('images/trademark_2.jpg')}}" alt="Phương thức thanh toán 2"></a></li>
                           <li><a href="javascript:;"><img src="{{asset('images/trademark_3.jpg')}}" alt="Phương thức thanh toán 3"></a></li>
                           <li><a href="javascript:;"><img src="{{asset('images/trademark_4.jpg')}}" alt="Phương thức thanh toán 4"></a></li>
                           <li><a href="javascript:;"><img src="{{asset('images/trademark_5.jpg')}}" alt="Phương thức thanh toán 5"></a></li>
                           <li><a href="javascript:;"><img src="{{asset('images/trademark_6.jpg')}}" alt="Phương thức thanh toán 6"></a></li>
                           <li><a href="javascript:;"><img src="{{asset('images/trademark_7.jpg')}}" alt="Phương thức thanh toán 7"></a></li>
                           <li><a href="javascript:;"><img src="{{asset('images/trademark_8.jpg')}}" alt="Phương thức thanh toán 8"></a></li>
                           <li><a href="javascript:;"><img src="{{asset('images/trademark_9.jpg')}}" alt="Phương thức thanh toán 9"></a></li>
                           <li><a href="javascript:;"><img src="{{asset('images/trademark_10.jpg')}}" alt="Phương thức thanh toán 10"></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </footer>
         </div>
      </div>
      <div style="display: none;" id="loading-mask">
         <div id="loading_mask_loader" class="loader">
            <img alt="Loading..." src="{{asset('images/ajax-loader-main.gif')}}" />
            <div>
               Please wait...
            </div>
         </div>
      </div>
      <a href="#" class="scroll_top" title="Scroll to Top" style="display: none;">Scroll</a>
   </body>
</html>
<script type="text/javascript">
   $(".header-content").css({ "background": '' });
   $("html").addClass('');
</script>


