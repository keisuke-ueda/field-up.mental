@extends('layouts.common')
<meta name="description" content="現在作成中のページです。面白いコンテンツを多数上げていきますので少々お待ちください。">
@section('content')

    <div id="introduction" class="row">
        <div class="container pt-5">
            <h1 class="text-center">開発中</h1>
            <div class="col-md-12 justify-content-center rounded-pill m-5 p-5" style="background-color: rgba(140, 167, 225, 0.7);">
                <p class="h2 text-center">現在サイトの一部コンテンツなどの開発中につき
                <br>閲覧ができないぺージがあります。</p>        
            </div>
        </div>
        <div class="col-md-12 justify-content-center m-5 p-5">
            <img src='{{asset("/image/製作中ページイラスト.jpg") }}' alt="..." class="col-md-11 m-5 m-5"> 
        </div>
    </div>

@endsection

@section('style')

@section('title')
制作中|Field-UP 心理事業
@endsection

