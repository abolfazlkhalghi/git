<!doctype html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/auth/css/bootstrap.min.css">
    <link rel="stylesheet" href="/auth/css/style.css?v={{ uniqid() }}">
    <link rel="stylesheet" href="/auth/css/font/font.css">
    <title>صفحه ثبت نام / ورود</title>
</head>

<body>
    <main>

        <div class="account">
            @yield('content')
        </div>
    </main>
    @yield('js')
</body>

</html>
