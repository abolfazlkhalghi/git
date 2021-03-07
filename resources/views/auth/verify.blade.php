@extends('auth.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">

      {{ __('آدرس ایمیل خود را تأیید کنید') }}

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('یک پیوند تأیید جدید به آدرس ایمیل شما ارسال شده است.') }}
                        </div>
                    @endif

                    {{ __('قبل از ادامه ، لطفاً ایمیل خود را برای پیوند تأیید بررسی کنید.') }}
                        <br>
                    {{ __(' .اگر ایمیل را دریافت نکردید') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-pill text-white btn-block btn-primary">{{ __('برای درخواست مجدد اینجا را کلیک کنید.') }}</button>
                        <a href="/" class="btn btn-link p-0 m-0 align-baseline forgot-pass">{{ __('صفحه اصلی') }}</a>
                    </form>
                </div>
        </div>
    </div>
</div>
@endsection
