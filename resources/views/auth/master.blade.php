<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/fonts/icomoon/style.css">

    <link rel="stylesheet" href="/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="/css/style.css">

    <title>{{ config('app.name', 'وقف') }}</title>
</head>
<body dir="rtl">



<div class="content">
    <div class="container">
        <div class="row justify-content-center">
{{--             <div class="col-md-6 order-md-2">--}}
{{--              <img src="images/undraw_file_sync_ot38.svg" alt="Image" class="img-fluid">--}}
{{--            </div>--}}
            <div class="col-md-6 contents">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="form-block">
                            <div class="mb-4">
                                <h3>ورود به  <strong>کروید فرینگ</strong></h3>
                                <p class="mb-4">به سایت کروید فینگ خوش آمدید</p>
                            </div>
                            @yield('content')
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>


<script src="/js/jquery-3.3.1.min.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/main.js"></script>
</body>
</html>
