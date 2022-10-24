@extends('layouts.common')
<meta name="description" content="深層心理学の夢分析は、ジークムント・フロイトとカール・グスタフ・ユングの二つの学派があり、分析方法が違っている。ココでは、ユング学派の夢分析を紹介します。">
@section('content')
<div id="psychology_test">
  <div class="container pb-3">

    <div class="col-7 page-title pt-5 pb-3 d-block mx-auto">
      <h1 class="text-center">夢分析</h1>
      <p class="text-center text01">夢は本心を映す鏡</p>
    </div>

    <div class="card01">
      <p class="text01">　深層心理学の分野で、無意識の働きを意識するための方法の一つです。
        <br>　実は夢分析には学派があり、<b>ジークムント・フロイトの精神分析学</b>と<b>カール・グスタフ・ユングの分析心理学</b>となっている。
        <br>夢分析の仕組みをイラストで見てみましょう。
      </p>
      <img src='{{ asset("/image/夢分析解説.jpg")}}' class="mt-4 link d-block mx-auto" alt="夢分析解説" style="width:70%;">
      <p class="text01">　イラストのように<b>日中に起きたことを違った形で見せてくれる</b>ものが夢です。
        <br>　意識的に感じたこと、記憶していることを寝ているときに整理してくれているのですが、同時に<b>無意識の時の記憶も整理してくれている</b>のです。
        <br>　夢では、いろんな形であなたの気づいていない感覚や記憶をモノや出来事で見せてくれます。
      </p>
      <p class="text01">動画で、いろんな夢のケースを紹介しているので是非楽しみながら見てください。</p>
    </div>

    <div class="col-md-10 item text-center youtube m-5 d-block mx-auto">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/dCFPitTqqiU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>


</div>
@endsection

@section('js')
<script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
@endsection

@section('title')
夢分析 深層心理学|Field-UP 心理事業
@endsection