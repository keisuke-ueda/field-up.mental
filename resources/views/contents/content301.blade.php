@extends('layouts.common')
<meta name="description" content="ココロとカラダは繋がっています。どちらかが悪くなると引っ張られて両方が悪くなっていきます。それに気づいていない方が意外と多いです。その仕組みをアニメーションでお伝えします。">
@section('content')
<div id="mental_care_contents">
  <div class="row justify-content-center container mx-auto">
    <div class="col-md-7 page-title  mt-5 pb-3">
      <h1 class="text-center">ココロとカラダ導入編</h1>
    </div>
  </div>

  <div class="row justify-content-center container mx-auto">
    <div class="col-md-10 item content-lead-text m-3 pb-3">
      <p>体と心は密接に関係しています<br>
        健康になるための行動を取るためには心身のことをよく理解する必要があります<br>
        よりよい生活を送るために勉強していきましょう</p>
    </div>

    <div class="col-md-10 item text-center youtube mb-5">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/SQinCr6mMdE" title="YouTube video player"
        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen></iframe>
    </div>

    <div class="container row flexbox">
      <div class="col-6 mb-3 box1">
        <img class="d-block mx-auto" alt="ココロとカラダ導入編1" src="{{ asset('image/contents_img/content301/1-1.jpg')}}" style="width:100%;"/>
      </div>

      <div class="col-6 mb-3 box1">
        <img class="d-block mx-auto" alt="ココロとカラダ導入編2" src="{{ asset('image/contents_img/content301/1-2.jpg')}}" style="width:100%;"/>
      </div>

      <div class="col-6 mb-3 box1">
        <img class="d-block mx-auto" alt="ココロとカラダ導入編3" src="{{ asset('image/contents_img/content301/1-3.jpg')}}" style="width:100%;"/>
      </div>

      <div class="col-6 mb-3 box1">
        <img class="d-block mx-auto" alt="ココロとカラダ導入編4" src="{{ asset('image/contents_img/content301/1-4.jpg')}}" style="width:100%;"/>
      </div>
    </div>

  </div>

</div>
@endsection

@section('js')
@endsection

@section('title')
ココロとカラダ 導入編|Field-UP 心理事業
@endsection