
@extends('layout.backend2')

@section('content')
    <form method="POST" action="{{ route('get.login') }}">
    @csrf
        <div class="row">
            <div class="form-group col-md-12 mb-4">
                <input type="email" class="form-control input-lg" id="email" name="email" value="{{ old('email') }}" aria-describedby="emailHelp" required autocomplete="email" autofocus placeholder="Tên Đăng Nhập | Email" />
              
            </div>

            <div class="form-group col-md-12">
                <input type="password" class="form-control input-lg" id="password" name="password" required autocomplete="current-password" placeholder="Mật Khẩu" />
            </div>

            <div class="form-group col-md-12">
                <label class="control control-checkbox">
                    Ghi Nhớ 
                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}/>
                 
                </label>
            </div>
            
            <div class="col-md-12">
                <div class="d-flex my-2 justify-content-between">
                    <p><a class="text-blue" href="{{ route('') }}">Quên mật khẩu?</a></p>
                </div>

                <button type="submit" class="btn btn-lg btn-primary btn-block mb-4">Đăng Nhập</button>
            </div>
        </div>
    </form>

@endsection
