@extends('layout.frontend2')
@section('content')
<div class="main">
    <div class="container">
        <div class="row">
             @include('frontend.form.profile.sidebar')
            <div class="col-md-9">
                <div class="breadcrumb clearfix">
                    <ul>
                        <li itemtype="http://shema.org/Breadcrumb" itemscope="" class="home">
                            <a title="Đến trang chủ" href="/" itemprop="url"><span itemprop="title">Trang chủ</span></a>
                        </li>
                        <li class="icon-li"><strong>Thông tin tài khoản</strong></li>
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
                <div class="comunication-content clearfix ng-scope" ng-controller="accountController" ng-init="initPersonalController()">
                    <h1 class="page-heading"><span>Thông tin tài khoản</span></h1>

                    @if ($message = Session::get('success'))
                    <div ng-if="IsSuccess" class="alert alert-success fade in">
                           <button data-dismiss="alert" class="close"></button>
                           <i class="fa-fw fa fa-check"></i>
                           <strong>Success!</strong> {{$message}}
                        </div>
                    @endif

                    <div class="col-md-8 col-md-offset-2 col-xs-12 col-sm-12 col-xs-offset-0 col-sm-offset-0">
                        <form class="form-horizontal " method="POST">
                        @csrf
                            <h2>Thông tin tài khoản</h2>
                            <div class="form-group">
                                <label for="Email" class="col-sm-3 control-label">Email</label>
                                <div class="col-sm-9">
                                    <label class="control-label ng-binding">{{ $user->email ?? "[N/A]" }}</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Email" class="col-sm-3 control-label">Mật khẩu</label>
                                <div class="col-sm-9">
                                    <label class="control-label">*********</label>
                                    <a href="/thay-doi-mat-khau.html"><i class="fa fa-edit"></i></a>
                                </div>
                            </div>
                            <h2>Thông tin cá nhân</h2>
                            <div class="form-group">
                                <label for="Name" class="col-sm-3 control-label">Họ tên<span class="warning">(*)</span></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control " name="name" value="{{ $user->name ?? ''}}" required="true" />
                                </div>
                            </div>
                
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Điện thoại<span class="warning">(*)</span></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control " name="phone" value="{{ $user->phone ?? ''}}" />
                                @error('phone')
                                    <div class="invalid-feedback" role="alert" style="margin-top: 10px;color: red;">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Địa chỉ</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control ng-pristine ng-untouched ng-valid" name="address" value="{{ $user->address ?? ''}}" />
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