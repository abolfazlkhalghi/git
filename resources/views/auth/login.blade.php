@extends('auth.master')

@section('content')
    <form method="POST" action="{{ route('login') }}" class="form">
        @csrf
        <div class="form-content form-account">
            <a class="account-logo" href="/">
                <img src="/auth/img/astan.png" alt="">
            </a>
            <x-input name="email" placeholder="عنوان ایمیل یا شماره تلفن" type="text" required
                class="txt-l txt @error('email') is-invalid @enderror" value="{{ old('email') }}" required
                autocomplete="email" autofocus />
            <x-input name="password" placeholder="پسورد" type="password" required
                class="txt-l txt @error('password') is-invalid @enderror" value="{{ old('password') }}" required
                autocomplete="password" autofocus />

            <button type="submit" class="btn btn--login">ورود</button>

            <label class="ui-checkbox">
                مرا بخاطر داشته باش
                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <span class="checkmark"></span>
            </label>

            <div class="m-auto"><a href="{{ route('password.request') }}" class="forgot-pass">فراموشی رمز</a></div>



        </div>

        <div class="form-footer">
            <a href="{{ route('register') }}" class="forgot-pass">ثبت نام</a>
        </div>
        </div>
        </div>
    </form>

@endsection
