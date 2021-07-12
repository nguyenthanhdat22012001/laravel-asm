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
                            <a href="/dang-nhap.html"><i class="fa fa-sign-in"></i> Đăng nhập</a>
                        </li>
                        <li>
                            <a href="/dang-ky.html"><i class="fa fa-key"></i> Đăng ký</a>
                        </li>
                        <li>
                            <a href="/thay-doi-mat-khau.html"><i class="fa fa-key"></i> Quên mật khẩu</a>
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
                    <div ng-if="IsError" class="alert alert-danger fade in">
                        <button data-dismiss="alert" class="close"></button>
                        <i class="fa-fw fa fa-times"></i>
                        <strong>Error!</strong>
                        <span ng-bind-html="Message"></span>
                    </div>
                    <div ng-if="IsSuccess" class="alert alert-success fade in">
                        <button data-dismiss="alert" class="close"></button>
                        <i class="fa-fw fa fa-check"></i>
                        <strong>Success!</strong> Đăng nhập thành công.
                    </div>
                    <div ng-if="InValid" class="alert alert-danger fade in">
                        <button data-dismiss="alert" class="close"></button>
                        <i class="fa-fw fa fa-times"></i>
                        <strong>Error!</strong>
                        <span ng-bind-html="Message"></span>
                    </div>
                    <div class="col-md-6 col-md-offset-3 col-xs-12 col-sm-12 col-xs-offset-0 col-sm-offset-0">
                        <form class="form-horizontal" ng-submit="login()">
                            <div class="form-group">
                                <label for="Email" class="col-sm-4 control-label">Email</label>
                                <div class="col-sm-8">
                                    <input type="email" class="form-control" ng-model="Email" ng-required="true" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Password" class="col-sm-4 control-label">Mật khẩu</label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control" ng-model="Password" ng-required="true" />
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-4 col-sm-8">
                                    <button type="submit" class="btn btn-primary">Đăng nhập</button>
                                    <a href="/quen-mat-khau.html">Quên mật khẩu?</a>
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