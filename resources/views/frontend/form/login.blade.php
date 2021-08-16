@extends('layout.frontend2')
@section('content')
<div class="main">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="menu-account">
                    <h3>
                        <span>
                            Tài khoản
                        </span>
                    </h3>
                    <ul>
                        <li>
                            <a href="{{ route('get.login') }}"><i class="fa fa-sign-in"></i> Đăng nhập</a>
                        </li>
                        <li>
                            <a href="{{ route('get.register') }}"><i class="fa fa-key"></i> Đăng ký</a>
                        </li>
                        <li>
                            <a href="{{ route('forget-password') }}"><i class="fa fa-key"></i> Quên mật khẩu</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9">
                <div class="breadcrumb clearfix">
                    <ul>
                        <li itemtype="http://shema.org/Breadcrumb" itemscope="" class="home">
                            <a title="Đến trang chủ" href="/" itemprop="url"><span itemprop="title">Trang chủ</span></a>
                        </li>
                        <li class="icon-li"><strong>Đăng nhập</strong></li>
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
                <script src="/app/services/accountServices.js"></script>
                <script src="/app/controllers/accountController.js"></script>
                <div class="login-content clearfix" ng-controller="accountController" ng-init="initController()">
                    <h1 class="page-heading"><span>Đăng nhập hệ thống</span></h1>
                  
                    @if ($message = Session::get('register_login'))
                    <div ng-if="IsSuccess" class="alert alert-success fade in">
                           <button data-dismiss="alert" class="close"></button>
                           <i class="fa-fw fa fa-check"></i>
                           <strong>Success!</strong> {{$message}}
                        </div>
                    @endif

                    @if ($message = Session::get('message'))
                    <div ng-if="IsSuccess" class="alert alert-success fade in">
                           <button data-dismiss="alert" class="close"></button>
                           <i class="fa-fw fa fa-check"></i>
                           <strong>Success!</strong> {{$message}}
                        </div>
                    @endif

                    @if ($message = Session::get('error_login'))
                    <div ng-if="InValid" class="alert alert-danger fade in">
                        <button data-dismiss="alert" class="close"></button>
                        <i class="fa-fw fa fa-times"></i>
                        <strong>{{$message}}</strong>
                        <span ng-bind-html="Message"></span>
                    </div>
                    @endif

                   
                    <div class="col-md-6 col-md-offset-3 col-xs-12 col-sm-12 col-xs-offset-0 col-sm-offset-0">
                        <form class="form-horizontal" method="POST" action="">
                        @csrf
                            <div class="form-group">
                                <label for="Email" class="col-sm-4 control-label">Email</label>
                                <div class="col-sm-8">
                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" aria-describedby="emailHelp" required autocomplete="email" autofocus placeholder="Tên Đăng Nhập | Email" />
                                    @error('email')
                                        <div class="alert alert-danger" role="alert">
                                        {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Password" class="col-sm-4 control-label">Mật khẩu</label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control"  id="password" name="password" required autocomplete="current-password" placeholder="Mật Khẩu" />               
                                     @error('password')
                                        <div class="alert alert-danger" role="alert">
                                        {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group col-md-12 text-center">
                                <label class="control control-checkbox">
                                    Ghi Nhớ 
                                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}/>
                                    <a href="/quen-mat-khau.html">Quên mật khẩu?</a>
                                </label>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-4 col-sm-8">
                                <button type="button" class="btn btn-light"> <a href="{{ route('get.login.google', 'google') }}">Đăng nhập google</a> </button>
                                    <button type="submit" class="btn btn-primary">Đăng nhập</button>
                                   
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop