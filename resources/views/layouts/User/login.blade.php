@extends('auth.master')

@section('content')

<form method="POST" action="{{ route('user.login') }}" >
    @csrf
       <div class="form-group first">
           <input id="email" type="text"  @error('email') is-invalid @enderror" name="email"
                  value="{{ old('email') }}" required autocomplete="email" autofocus
                  class="txt-l txt" placeholder="ایمیل یا شماره موبایل">

           @error('email')
           <span class="invalid-feedback" role="alert">
               <strong>{{ $message }}</strong>
       </span>
           @enderror
       </div>
       <div class="form-group last mb-4">

           <input id="password" type="password" class="txt-l txt" placeholder="پسورد" @error('password') is-invalid @enderror"
                  name="password" required autocomplete="current-password">
           @error('password')
           <span class="invalid-feedback" role="alert">
               <strong>{{ $message }}</strong>
           </span>
           @enderror
       </div>
       <div class="m-auto">
           <a href="{{route('password.request')}}"
            class="forgot-pass">فراموشی رمز</a></div>


       <div class="d-flex mb-5 align-items-center">
           <input type="checkbox" checked="checked" name="remember"
                      id="remember" {{ old('remember') ? 'checked' : '' }}/>
           <label class="control control--checkbox mb-0"><span class="caption"> مرا به خاطر داشته باش</span>
               <div class="control__indicator"></div>
           </label>




       </div>

       <input type="submit" value="ورود" class="btn btn--login">
       <div class="form-footer">
           <a href="{{ route('register' )}}">صفحه ثبت نام</a>
       </div>
   </form>

@endsection
