@extends('auth.master')

@section('content')
    <form method="POST" action="{{ route('register') }}" class="form">
        @csrf
        <div class="form-group">
            <label for="username">* نام و نام خانوادگی</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="username" name="name"
                value="{{ old('name') }}" required autocomplete="name" autofocus>

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group last mb-4">
            <label for="password">* ایمیل</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </div>
        <div class="form-group last mb-4">
            <label for="mobile">mobile</label>
            <input type="text" class="form-control @error('mobile') is-invalid @enderror" id="mobile" name="mobile"
                value="{{ old('mobile') }}" required autocomplete="mobile" autofocus>
            @error('mobile')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </div>
        <div class="form-group last mb-4">
            <label for="password">* پسورد</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                name="password" required autocomplete="new-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group last mb-4">
            <label for="password">* تایید پسورد</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                autocomplete="new-password"">

            </div>
            <div class=" form-group last mb-4">
            <span class="mr-2"><a href="{{ route('login') }}" class="forgot-pass">ورود</a></span>
        </div>
        <br>
        <input type="submit" value="ثبت نام" class="btn btn-pill text-white btn-block btn-primary">

        <span class="d-block text-center my-4 text-muted"> or sign in with</span>

    </form>


@endsection
