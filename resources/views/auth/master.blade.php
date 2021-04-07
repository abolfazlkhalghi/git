<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("auth/fonts/icomoon/style.css") }}">

    <link rel="stylesheet" href="{{ asset('auth/css/owl.carousel.min.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('auth/css/bootstrap.min.css') }}">

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('auth/css/style.css') }}">

    <title>{{ config('app.name', 'وقف') }}</title>
</head>
<body dir="rtl " >


<main>
    <div class="account form ">



        <div>
            <a class="account-logo" href="/">
                <img src="/auth/img/logo.jpg" alt="کراودفاندینگ" style="width: 200px;">
            </a>
            <h3 class="textcenter">ورود به  <strong>کراودفاندینگ</strong></h3>
            <p class="textcenter">به سایت کراودفاندینگ خوش آمدید</p>
        </div>
        @yield('content')
    </div>

</main>
<script src="{{ asset('/auth/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('/auth/js/popper.min.js') }}"></script>
<script src="{{ asset('/auth/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('/auth/js/main.js') }}"></script>
</body>
</html>

