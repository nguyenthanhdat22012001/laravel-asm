<section class="top-link clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <ul class="nav navbar-nav topmenu-contact pull-left">
                <li><i class="fa fa-phone"></i> <span>Hotline:0908 77 00 95</span></li>
            </ul>
            <ul class="nav navbar-nav navbar-right topmenu  hidden-xs hidden-sm">
                <li class="order-check"><a href="/kiem-tra-don-hang.html"><i class="fa fa-pencil-square-o"></i> Kiểm tra đơn hàng</a></li>
                <li class="order-cart"><a href="{{route('get.orderCart')}}"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
                @can('isUser')
                <li class="account-info">
                    <a href="{{route('get.myInfor')}}"><i class="fa fa-user-circle-o"></i> {{Auth::user()->name }} </a>
                    <a class="account-logout" id="btnLogOff" href="{{route('get.logout')}}" title="">[Thoát] </a>
                </li>
                @else
                <li class="account-login"><a href="{{route('get.login')}}"><i class="fa fa-sign-in"></i> Đăng nhập </a></li>
                <li class="account-register"><a href="{{route('get.register')}}"><i class="fa fa-key"></i> Đăng ký </a></li>
                @endcan
            </ul>
            <div class="show-mobile hidden-lg hidden-md">
                <div class="quick-user">
                    <div class="quickaccess-toggle">
                        <i class="fa fa-user"></i>
                    </div>
                    <div class="inner-toggle">
                        <ul class="login links">
                        <li>
                            <a href="/dang-ky.html"><i class="fa fa-sign-in"></i> Đăng ký</a>
                        </li>
                        <li>
                            <a href="/dang-nhap.html"><i class="fa fa-key"></i> Đăng nhập</a>
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