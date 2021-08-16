

@if(!empty(Session::get('Cart')->products))
<?php $newCart = Session::get('Cart') ?>
<h5 class="cart-title">Bạn hiện có  {{$newCart->totalQuanty}} sản phẩm</h5>
<div class="cart-block-list">
    <ul>
    @foreach($newCart->products as $item)
             @php
                        //check sale
                    if($item['productInfor']->p_price_sale > -1){
                        $price =$item['productInfor']->p_price_sale;
                    }else{
                        $price = $item['productInfor']->p_price;
                    } 
            @endphp
    <li class="product-info">
        <div class="p-left">
            <a href="javascript:void(0);" class="remove_link" data-id="{{$item['productInfor']->id}}"></a>
            <a href="/san-pham/dam-body-ca-tinh-voi-nhieu-mau-sac-hien-dai-tre-trung.html">
            <img class="img-responsive" src="{{asset('images/product\/')}}{{$item['productInfor']->p_avatar}}" alt="Đầm body c&#225; t&#236;nh với nhiều m&#224;u sắc hiện đại, trẻ trung">
            </a>
        </div>
        <div class="p-right">
            <p class="p-name"><a href="/san-pham/dam-body-ca-tinh-voi-nhieu-mau-sac-hien-dai-tre-trung.html">{{$item['productInfor']->p_name}}</a></p>
            <p class="p-rice">{{number_format($price)}}₫</p>
            <p>Số lượng: {{$item['quanty']}}</p>
        </div>
    </li>
    @endforeach
    </ul>
</div>
<div class="toal-cart">
    <span>Tổng tiền</span>
    <span class="toal-price pull-right">{{number_format($newCart->totalPrice)}}₫</span>
</div>
<div class="cart-buttons">
    <a href="{{route('get.orderCheckOut')}}" class="btn-check-out">Thanh toán</a>
</div>

<input type="hidden" id="hiddenTotalQuanty" value="{{$newCart->totalQuanty}}">
@else
<input type="hidden" id="hiddenTotalQuanty" value="0">
@endif

<script>
     $('#changeCart').on('click','.remove_link',function(){
       $.ajax({
        type: 'GET',
        url: 'xoa-gio-hang/'+ $(this).data('id'),
        success: function (res) { 
             rederCart(res);
          alertify.success('Xóa Giỏ Hàng Thành Công');
        },
        error: function (XMLHttpRequest, textStatus) {
           console.log(XMLHttpRequest, textStatus);
        }
    });
    });
</script>