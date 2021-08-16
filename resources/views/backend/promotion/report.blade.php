@if ($message = Session::get('delete_success'))
            <div class="alert alert-dismissible fade show alert-success" role="alert">
                <strong>{{ $message }}</strong>
            </div>
 @endif
 @if ( $message = Session::get('success'))
            <div class="alert alert-dismissible fade show alert-success" role="alert">
                <strong>{{ $message }}</strong>
            </div>
 @endif
 @if ( $message = Session::get('update_success'))
            <div class="alert alert-dismissible fade show alert-success" role="alert">
                <strong>{{ $message }}</strong>
            </div>
 @endif
 @if ($errors->first('promo_sku'))
    <div class="alert alert-dismissible fade show alert-danger" role="alert">
             {{$errors->first('promo_sku')	}}
	</div>
@endif
@if ($errors->first('promo_price'))
    <div class="alert alert-dismissible fade show alert-danger" role="alert">
             {{$errors->first('promo_price')	}}
	</div>
@endif