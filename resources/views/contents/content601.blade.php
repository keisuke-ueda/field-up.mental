@extends('layouts.common')
<meta name="description" content="赤いモノを見ると興奮する。青色は心が落ち着く。紫はなんだか高級感がある。色はそれだけで人のココロに何らかの印象を残す効果があります。まさにそれが心理学の真骨頂。なぜ人はそのように感じるのでしょう。">
@section('content')
<div id="mental_care_contents">
  <div class="row justify-content-center container mx-auto">
    <div class="col-md-7 page-title  mt-5 pb-3">
      <h1 class="text-center">色とイメージ</h1>
    </div>
  </div>

  <div class="row justify-content-center container mx-auto">
    <div class="col-md-10 item content-lead-text m-3 pb-3">
      <p>色が与えるイメージは心理に大きい影響を与えます<br>
        何色が好きかは、他人によって異なりますが、色の与えるイメージには傾向があります<br>
        服装や部屋の生活空間のカラーコーデなどに活かせる色の勉強をしましょう</p>
    </div>

    <div class="col-md-10 item text-center youtube mb-5">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/tOmDUGmqh1c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <div class="container row flexbox">
      <div class="col-6 mb-3 box1">
        <img class="d-block mx-auto" alt="色とイメージ1" src="{{ asset('image/contents_img/content601/1-1.jpg')}}" style="width:100%;"/>
      </div>

      <div class="col-6 mb-3 box2">
        <img class="d-block mx-auto" alt="色とイメージ2" src="{{ asset('image/contents_img/content601/1-2.jpg')}}" style="width:100%;"/>
      </div>

      <div class="col-6 mb-3 box1">
        <img class="d-block mx-auto" alt="色とイメージ3" src="{{ asset('image/contents_img/content601/1-3.jpg')}}" style="width:100%;"/>
      </div>

      <div class="col-6 mb-3 box2">
        <img class="d-block mx-auto" alt="色とイメージ4" src="{{ asset('image/contents_img/content601/1-4.jpg')}}" style="width:100%;"/>
      </div>
    </div>

  </div>

</div>
@endsection

@section('js')
@endsection

@section('title')
色とイメージ|Field-UP 心理事業
@endsection