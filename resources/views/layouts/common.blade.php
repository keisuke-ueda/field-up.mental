<!DOCTYPE HTML>
<html lang="ja">


<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="心理学,メンタル,ストレス,心理テスト,カウンセラー,Field-UP,心理事業" />
    <link rel="shortcut icon" href='{{ asset("/image/ファビコン.png")}}'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+P+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/earlyaccess/nicomoji.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c" rel="stylesheet">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-167968304-5"></script>
    
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-167968304-5');
    </script>

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

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru&display=swap" rel="stylesheet">

    <!-- BootStrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}?ver1.0.6" rel="stylesheet"> -->
    <link href="{{ asset('css/common.css') }}?ver202107181220" rel="stylesheet">

    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c" rel="stylesheet">

    @yield('style')
</head>

<body>
    <div class="wrapper w-100 overflow-hidden">
        @include('parts.header')
        <div id="wait-load">
            <div class="contents">
                @yield('content')
            </div>
            @include('parts.footer')
        </div>
        <div id="loading">
            <span class="spinner-loader"></span>
        </div>
    </div>
    
    @yield('js_bottom')




    <div id="page_top"><img src='{{ asset("/image/サイトページ画像お問合せFAQrev1.png")}}' class="mt-4 link d-block mx-auto" alt="お問い合わせ" style="width:300%;"></a></div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
    jQuery(function() {
    var appear = false;
    var pagetop = $('#page_top');
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {  //100pxスクロールしたら
        if (appear == false) {
            appear = true;
            pagetop.stop().animate({
            'bottom': '200px' //下から50pxの位置に
            }, 300); //0.3秒かけて現れる
        }
        } else {
        if (appear) {
            appear = false;
            pagetop.stop().animate({
            'bottom': '-80px' //下から-50pxの位置に
            }, 300); //0.3秒かけて隠れる
        }
        }
    });
    pagetop.click(function () {
        $('body, html').animate({ scrollTop: 0 }, 500); //0.5秒かけてトップへ戻る
        return false;
    });
    });
    </script>







    
</body>

</html>