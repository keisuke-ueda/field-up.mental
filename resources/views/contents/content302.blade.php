@extends('layouts.common')
<meta name="description" content="健康診断で高血圧引っ掛かり、食べたいものが食べられないという方もいるかもしれません。健康のためとはいえ辛いと思います。それが原因でメンタル不調になる方もいます。予防や、対処方法を知れば少し楽になるかもせれません。">
@section('content')
<div id="mental_care_contents">
  <div class="row justify-content-center container mx-auto">
    <div class="col-md-7 page-title  mt-5 pb-3">
      <h1 class="text-center">好きなものを食べられないときの
        <br>ストレス(高血圧)
      </h1>
    </div>
  </div>

  <div class="row justify-content-center container mx-auto">
    <div class="col-md-10 item content-lead-text m-3 pb-3">
      <p>ストレスは様々な病気の原因になります<br>
        今回は高血圧に関連した知識を勉強していきましょう<br>
        原因と仕組み、食事の際に気をつけることなどを解説します</p>
    </div>

    <div class="col-md-10 item text-center youtube mb-5">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/Lq9Uw7uiClg" title="YouTube video player"
        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen></iframe>
    </div>

    <div class="container row flexbox">
      <div class="col-6 mb-3 box1">
        <img class="d-block mx-auto" alt="高血圧1" src="{{ asset('image/contents_img/content302/1-1.jpg')}}" style="width:100%;"/>
      </div>

      <div class="col-6 mb-3 box2">
        <img class="d-block mx-auto" alt="高血圧2" src="{{ asset('image/contents_img/content302/1-2.jpg')}}" style="width:100%;"/>
      </div>

      <div class="col-6 mb-3 box1">
        <img class="d-block mx-auto" alt="高血圧3" src="{{ asset('image/contents_img/content302/1-3.jpg')}}" style="width:100%;"/>
      </div>

      <div class="col-6 mb-3 box2">
        <img class="d-block mx-auto" alt="高血圧4" src="{{ asset('image/contents_img/content302/1-4.jpg')}}" style="width:100%;"/>
      </div>
    </div>

  </div>

</div>
@endsection

@section('js')
@endsection

@section('title')
高血圧|Field-UP 心理事業
@endsection