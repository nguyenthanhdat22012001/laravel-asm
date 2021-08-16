<div class="container">
     <div class="row justify-content-center">
         <div class="col-md-8">
             <div class="card">
                 <div class="card-header">Xác minh địa chỉ email của bạn</div>
                   <div class="card-body">
                    @if (session('resent'))
                         <div class="alert alert-success" role="alert">
                            {{ __('Một liên kết xác minh mới đã được gửi đến địa chỉ email của bạn.') }}
                        </div>
                    @endif
                    <a href="{{ url('/reset-password/'.$token) }}">Click Here</a>
                </div>
            </div>
        </div>
    </div>
</div>