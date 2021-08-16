@extends('layout.frontend2')
@section('content')
<div class="main">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <script src="/app/services/accountServices.js"></script>
                <script src="/app/controllers/accountController.js"></script>
                <div class="menu-account ng-scope" ng-controller="accountController">
                    <h3>
                        <span>
                            Quản lý cá nhân
                        </span>
                    </h3>
                    <ul>
                        <li class="active">
                            <a href="/thong-tin-tai-khoan.html"><i class="glyphicon glyphicon-user"></i> Thông tin tài khoản</a>
                        </li>
                        <li>
                            <a href="/don-hang.html"><i class="glyphicon glyphicon-list-alt"></i> Đơn hàng của tôi</a>
                        </li>
                        <li>
                            <a href="#"><i class="glyphicon glyphicon-shopping-cart"></i> Sản phẩm yêu thích</a>
                        </li>
                        <li>
                            <a href="{{route('change.password')}}"><i class="fa fa-key"></i> Thay đổi mật khẩu</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" ng-click="signOut()"><i class="glyphicon glyphicon-log-out"></i> Thoát</a>
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
                        <li class="icon-li"><strong>Thay đổi mật khẩu</strong></li>
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
                <div class="change-password-content clearfix ng-scope" ng-controller="accountController" ng-init="initController()">
                    <h1 class="page-heading"><span>Thay đổi mật khẩu</span></h1>

                    @if ($message = Session::get('success'))
                    <div ng-if="IsSuccess" class="alert alert-success fade in">
                           <button data-dismiss="alert" class="close"></button>
                           <i class="fa-fw fa fa-check"></i>
                           <strong>Success!</strong> {{$message}}
                        </div>
                    @endif

                    @if ($message = Session::get('error'))
                    <div ng-if="InValid" class="alert alert-danger fade in">
                        <button data-dismiss="alert" class="close"></button>
                        <i class="fa-fw fa fa-times"></i>
                        <strong>{{$message}}</strong>
                        <span ng-bind-html="Message"></span>
                    </div>
                    @endif

                    <div class="col-md-8 col-md-offset-2 col-xs-12 col-sm-12 col-xs-offset-0 col-sm-offset-0">
                        <form class="form-horizontal " method="POST">
                        @csrf
                            <div class="form-group">
                                <label for="" class="col-sm-4 control-label">Mật khẩu cũ</label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control" name="password_old" required autocomplete="old-password" auto-forcus />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-4 control-label">Mật khẩu mới</label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control"  name="password" required autocomplete="new-password" />
                                @error('password')
                                    <div class="invalid-feedback" role="alert" style="margin-top: 10px;color: red;">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-4 control-label">Nhập lại mật khẩu</label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-4 col-sm-8">
                                    <button type="submit" class="btn btn-primary">Cập nhật</button>
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