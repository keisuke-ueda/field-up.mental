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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
   
    <!-- リセットCSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@3.0.2/destyle.css">

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}?ver1.0.6" rel="stylesheet"> -->
    <link href="{{ asset('css/common.css') }}?ver202107181220" rel="stylesheet">

    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c" rel="stylesheet">

    <!-- アニメーション -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    @yield('style')
</head>

<body>
    <div class="wrapper overflow-hidden">
        <div class="fit">
            @include('parts.header')
        </div>
        <div id="wait-load">
            <div class="contents top-margin">
                @yield('content')
            </div>
            @include('parts.footer')
        </div>
        <div id="loading">
            <span class="spinner-loader"></span>
        </div>
    </div>
    
    @yield('js_bottom')


    <script>
        // 動きのきっかけとなるアニメーションの名前を定義
        function fadeAnime(){
        $('.zoomInTrigger').each(function(){
        var elemPos = $(this).offset().top-50;//要素より、50px上の
        var scroll = $(window).scrollTop();
        var windowHeight = $(window).height();
        if (scroll >= elemPos - windowHeight){
        $(this).addClass('zoomIn');// 画面内に入ったらfadeUpというクラス名を追記
        }else{
        $(this).removeClass('zoomIn');// 画面外に出たらfadeUpというクラス名を外す
        }
        });
        }

        // 画面をスクロールをしたら動かしたい場合の記述
        $(window).scroll(function (){
        fadeAnime();/* アニメーション用の関数を呼ぶ*/
        });// ここまで画面をスクロールをしたら動かしたい場合の記述

    </script>

</body>

</html>