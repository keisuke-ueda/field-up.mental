@extends('layouts.common')
<meta name="description" content="現在作成中のページです。面白いコンテンツを多数上げていきますので少々お待ちください。">
@section('content')
    <div id="introduction">
        <div class="container pt-5 pb-3">

            <h1 class="text-center">開発中</h1>
            <div class="col-12 rounded-pill m-2 p-2 making d-block mx-auto">
                <p class="text-center">現在サイトの一部コンテンツなどの開発中につき
                <br>閲覧ができないぺージがあります。</p>        
            </div>

            <div class="col-12 p-2 d-block mx-auto">
                <img src='{{asset("/image/製作中ページイラスト.jpg") }}' alt="開発中" style="width: 100%;"> 
            </div>
        </div>
    </div>

@endsection

@section('style')

@section('title')
制作中|Field-UP 心理事業
@endsection

