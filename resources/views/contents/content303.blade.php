@extends('layouts.common')
<meta name="description" content="運動がストレス解消になるという話を信じていますか？わかってはいてもそれができない方は時間が確かにないのかもしれません。毎日5回でいいのでスクワットをしてみませんか?そんな少しの運動でも脳にはとても有効なストレス解消時間なのです。">
@section('content')
<div id="mental_care_contents">
  <div class="row justify-content-center container mx-auto">
    <div class="col-md-7 page-title  mt-5 pb-3">
      <h1 class="text-center">カラダを動かさないと
        <br>ココロも動かない
        <br>(脳と神経)
      </h1>
    </div>
  </div>

  <div class="row justify-content-center container mx-auto">
    <div class="col-md-10 item content-lead-text mt-3 pb-3">
      <p>ココロの反応とはどういうことなのか<br>
        体内で起きている脳や神経の働きについて見ていきましょう<br>
        カラダのことを理解することで正しいアプローチの準備ができますよ</p>
    </div>

    <div class="col-md-10 item text-center youtube mb-5">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/-SO5m9Pg4Es" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <div class="container row">
      <div class="col m-4" style="height: 250px;">
        <img class="h-100" alt="カラダを動かさないと1" src="{{ asset('image/contents_img/content303/1-1.jpg')}}" />
      </div>

      <div class="col m-4" style="height: 250px;">
        <img class="h-100" alt="カラダを動かさないと2" src="{{ asset('image/contents_img/content303/1-2.jpg')}}" />
      </div>

      <div class="col m-4" style="height: 250px;">
        <img class="h-100" alt="カラダを動かさないと3" src="{{ asset('image/contents_img/content303/1-3.jpg')}}" />
      </div>

      <div class="col m-4" style="height: 250px;">
        <img class="h-100" alt="カラダを動かさないと4" src="{{ asset('image/contents_img/content303/1-4.jpg')}}" />
      </div>
    </div>

  </div>

</div>
@endsection

@section('js')
@endsection

@section('title')
カラダを動かさない|Field-UP 心理事業
@endsection