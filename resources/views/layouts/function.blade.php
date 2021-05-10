<!DOCTYPE HTML>
<html lang="ja">

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Title -->
    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    @yield('js')
    <script>
        window.onload = function () {
            setTimeout("show()", 500);
        }

        function show() {
            document.getElementById('loading').style.display = 'none';
            document.getElementById('wait-load').style.display = 'block';
        }
    </script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- BootStrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}?ver1.0.6" rel="stylesheet">
    <link href="{{ asset('css/common.css') }}?ver1.0.6" rel="stylesheet">
    @yield('style')
</head>

<body>
    <div class="wrapper w-100 overflow-hidden">
        <div id="wait-load">
            <div class="contents">
                @yield('content')
            </div>
        </div>
        <div id="loading">
            <span class="spinner-loader"></span>
        </div>
    </div>

    @yield('js_bottom')
</body>

</html>