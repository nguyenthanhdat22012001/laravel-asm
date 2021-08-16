

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
                            <a href="{{ route('get.register') }}"><i class="fa fa-key"></i> Quên mật khẩu</a>
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
                           <li class="icon-li"><strong>Đăng ký tài khoản</strong> </li>
                        </ul>
                     </div>
                     <script type="text/javascript">
                        $(".link-site-more").hover(function () { $(this).find(".s-c-n").show(); }, function () { $(this).find(".s-c-n").hide(); });
                     </script>
                     <script src="/app/services/accountServices.js"></script>
                     <script src="/app/controllers/accountController.js"></script>
                     <div class="register-content clearfix" ng-controller="accountController" ng-init="initRegisterController()">
                        <h1 class="page-heading"><span>Đăng ký tài khoản</span></h1>

                        

                        @if ($message = Session::get('error'))
                    <div ng-if="InValid" class="alert alert-danger fade in">
                        <button data-dismiss="alert" class="close"></button>
                        <i class="fa-fw fa fa-times"></i>
                        <strong>{{$message}}</strong>
                        <span ng-bind-html="Message"></span>
                    </div>
                    @endif

                        <div class="col-md-8 col-md-offset-2 col-xs-12 col-sm-12 col-xs-offset-0 col-sm-offset-0">
                           <form class="form-horizontal" method="POST" action="{{ route('password.update') }}">
                           @csrf
                           <input type="hidden" name="token" value="{{ $token }}">
                              <h2><span>Thông tin tài khoản</span></h2>
    
                              <div class="form-group">
                                 <label for="Email" class="col-sm-3 control-label">Email<span class="warning">(*)</span></label>
                                 <div class="col-sm-9">
                                    <input type="email" class="form-control" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus />
                                 @error('email')
                                 <div class="invalid-feedback" role="alert" style="margin-top: 10px;color: red;">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label for="Password" class="col-sm-3 control-label">Mật khẩu<span class="warning">(*)</span></label>
                                 <div class="col-sm-9">
                                    <input type="password" class="form-control" name="password" required autocomplete="new-password" />
                                 @error('password')
                                    <div class="invalid-feedback" role="alert" style="margin-top: 10px;color: red;">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label for="RePassword" class="col-sm-3 control-label">Nhập lại mật khẩu<span class="warning">(*)</span></label>
                                 <div class="col-sm-9">
                                    <input type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" />
                                 @error('password_confirmation')
                                    <div class="invalid-feedback" role="alert" style="margin-top: 10px;color: red;">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                                 </div>
                              </div>
                              <!-- <div class="form-group">
                                 <label for="" class="col-sm-3 control-label">Điện thoại</label>
                                 <div class="col-sm-9">
                                    <input type="text" class="form-control" ng-model="Phone" />
                                 </div>
                              </div> -->
                             
                              <!-- <div class="form-group form-inline">
                                 <label class="col-sm-3 control-label">Ngày sinh</label>
                                 <div class="col-sm-9">
                                    <select class="col-md-4 form-control" ng-model="SelectedDay" ng-options="label for label in Days | limitTo:NumberOfDays" placeholder="Ngày"></select>
                                    <select class="col-md-4 form-control" ng-model="SelectedMonth" ng-options="label for label in Months" ng-change="UpdateNumberOfDays()" placeholder="Tháng"></select>
                                    <select class="col-md-4 form-control" ng-model="SelectedYear" ng-options="label for label in Years" ng-change="UpdateNumberOfDays()" placeholder="Năm"></select>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label for="" class="col-sm-3 control-label">Địa chỉ</label>
                                 <div class="col-sm-9">
                                    <input type="text" class="form-control" ng-model="Address" />
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label class="col-sm-3 control-label">Tỉnh/TP</label>
                                 <div class="col-sm-9">
                                    <select class="form-control" ng-model="ProvinceId"
                                       ng-options="item.Id as item.Name for item in Provinces" ng-change="getDistricts(ProvinceId)"></select>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label class="col-sm-3 control-label">Quận/Huyện</label>
                                 <div class="col-sm-9">
                                    <select class="form-control" ng-model="DistrictId"
                                       ng-options="item.Id as item.Name for item in Districts"></select>
                                 </div>
                              </div> -->
                              <div class="form-group">
                                 <div class="col-sm-offset-4 col-sm-8">
                                    <button type="submit" class="btn btn-primary">Đăng ký</button>
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