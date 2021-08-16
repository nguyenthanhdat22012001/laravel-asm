<div class="cart-block-info">
<div class="cart-info table-responsive">
<table class="table product-list">
    <thead>
        <tr>
            <th></th>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
            <th>Số lượng</th>
            <th>Thành tiền</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @if( Session::has('Cart'))
            @foreach(Session::get('Cart')->products as $item)
            @php
                        //check sale
                    if($item['productInfor']->p_price_sale > -1){
                        $price =$item['productInfor']->p_price_sale;
                    }else{
                        $price = $item['productInfor']->p_price;
                    } 
            @endphp
                <tr  class="ng-scope">
                    <td class="image">
                        <a href="/san-pham/dam-body-ca-tinh-voi-nhieu-mau-sac-hien-dai-tre-trung.html">
                            <img  class="img-responsive" src="{{asset('images/product\/')}}{{$item['productInfor']->p_avatar}}" />
                        </a>
                    </td>
                    <td class="des">
                        <a href="/san-pham/dam-body-ca-tinh-voi-nhieu-mau-sac-hien-dai-tre-trung.html" class="ng-binding">{{$item['productInfor']->p_name}}</a>
                        <!-- <span class="ng-binding">Đỏ</span> -->
                    </td>
                    <td class="price ng-binding">{{number_format($price)}}đ</td>
                    <td class="quantity">
                        <input type="number" value="{{ $item['quanty'] }}" id="quantyItemCart_{{$item['productInfor']->id}}"  onchange="updateItemPageCart({{$item['productInfor']->id}})" class="text " />
                    </td>
                    <td class="amount ng-binding">
                    {{number_format($item['subTotalPrice'])}}đ
                    </td>
                    <td class="">
                        <a  href="javascript:void(0)" onclick="deleteItemPageCart({{$item['productInfor']->id}})">
                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                        </a>
                    </td>
                </tr>
            @endforeach

        @endif    
        <!-- end ngRepeat: item in OrderDetails -->
    </tbody>
</table>
</div>
<div class="clearfix text-right">
    <span><b>Tổng thanh toán:</b></span>
    <span class="pay-price ng-binding" id="totalPrice">
    {{number_format(  Session::get('Cart')->totalPrice ?? 0)}}đ
    </span>
</div>
<div class="text-right" style="margin-top: 30px;">
    <a class="comeback"  href="{{route('get.product')}}" onclick="window.history.back()">Tiếp tục mua hàng</a>
    <a class="button-default" id="checkout" {{ Session::get('Cart') ? 'href=thanh-toan' : 'onclick='."notCheckOut()"}} >Tiến hành thanh toán</a>
</div>
</div>
<script>
    
</script>
