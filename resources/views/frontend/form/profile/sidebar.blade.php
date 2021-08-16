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
                <a href="{{route('get.myInfor')}}"><i class="fa fa-user-circle-o"></i> Thông tin tài khoản</a>
            </li>
            <li>
                <a href="{{route('get.myOrder')}}"><i class="fa fa-list-alt"></i> Đơn hàng của tôi</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-shopping-cart"></i> Sản phẩm yêu thích</a>
            </li>
            <li>
                <a href="{{route('change.password')}}"><i class="fa fa-key"></i> Thay đổi mật khẩu</a>
            </li>
            <li>
                <a href="{{route('get.logout')}}" ng-click="signOut()"><i class="fa fa-sign-out"></i> Thoát</a>
            </li>
        </ul>
    </div>
</div>