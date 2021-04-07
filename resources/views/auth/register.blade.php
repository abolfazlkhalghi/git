@extends('auth.master')

@section('content')
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-group">
            <input type="text"  class="txt-l txt " @error('name') is-invalid @enderror" id="username"
                   name="name" value="{{ old('name') }}"
                   placeholder="نام کاربری"
>

            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group last mb-4">
        <input type="email" class="txt-l txt  @error('email') is-invalid @enderror" id="email"
               name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
               placeholder="نام کاربری"
        >
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

        </div>
        <div class="form-group last mb-4">

        <input type="text" class="txt-l txt  @error('mobile') is-invalid @enderror" id="mobile"
               name="mobile" value="{{ old('mobile') }}" required autocomplete="mobile" autofocus
               placeholder="موبایل"
        >
        @error('mobile')
        <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        </div>
        <div class="form-group last mb-4">
            <input id="password" type="password" class="txt-l txt  @error('password') is-invalid @enderror"
                   name="password" required autocomplete="new-password"   placeholder="پسورد">
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

        </div>
        <div class="form-group last mb-4">
            <input id="password-confirm" type="password" class="txt-l txt " name="password_confirmation" required autocomplete="new-password""   placeholder="تاییدیه پسورد">

        </div>
        <div class="form-group last mb-4">
            <span class="mr-2"><a href="{{route('login')}}" class="forgot-pass">ورود</a></span>
        </div>
        <input type="submit" value="ثبت نام" class="btn btn-pill text-white btn-block btn-primary">

    </form>


@endsection
