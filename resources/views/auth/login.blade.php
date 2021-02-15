@extends('auth.master')

@section('content')
 <form method="POST" action="{{ route('login') }}">
     @csrf
        <div class="form-group first">
            <label for="username">ایمیل یا شماره تلفن</label>
            <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email"
                   value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group last mb-4">
            <label for="password">پسورد</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                   name="password" required autocomplete="current-password">
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="d-flex mb-5 align-items-center">
            <label class="control control--checkbox mb-0"><span class="caption"> مرا به خاطر داشته باش</span>
                <input type="checkbox" checked="checked" name="remember"
                       id="remember" {{ old('remember') ? 'checked' : '' }}/>
                <div class="control__indicator"></div>
            </label>
            <div class="m-auto"><a href="{{route('password.request')}}" class="forgot-pass">فراموشی رمز</a></div>

            <div class="ml-auto"><a href="{{route('register')}}" class="forgot-pass">ثبت نام</a></div>

        </div>

        <input type="submit" value="ورود" class="btn btn-pill text-white btn-block btn-primary">

        <span class="d-block text-center my-4 text-muted"> or sign in with</span>

        <div class="social-login text-center">
            <a href="#" class="facebook">
                <span class="icon-facebook mr-3"></span>
            </a>
            <a href="#" class="twitter">
                <span class="icon-twitter mr-3"></span>
            </a>
            <a href="#" class="google">
                <span class="icon-google mr-3"></span>
            </a>
        </div>
    </form>

@endsection
