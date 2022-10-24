@extends('layouts.common')
<meta name="description" content="ストレスとは実な何なのかということを意外と知らない方が多いと思います。何かが原因で抱えるものだということはわかるのですがそれ自体が何なのかということを知ると対処方法がわかるようになると思います。">
@section('content')
<div id="mental_care_contents">
  <div class="row justify-content-center container mx-auto">
    <div class="col-md-7 page-title  mt-5 pb-3">
      <h1 class="text-center">ストレスとは?</h1>
    </div>
  </div>

  <div class="row justify-content-center container mx-auto">
    <div class="col-md-10 item content-lead-text m-3 pb-3">
      <p>ストレスを抱えている現代人はたくさんいます<br>
        ストレスと戦うためには正しい知識が必要です<br>
        ストレスと向き合うために、ストレスの原因や発生の仕組み、対処の基本をお伝えします</p>
    </div>

    <div class="col-md-10 item text-center youtube mb-5">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/eIvxgSz-9zU" title="YouTube video player"
        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen></iframe>
    </div>

    <div class="container row flexbox">
      <div class="col-6 mb-3 box1">
        <img class="d-block mx-auto" alt="ストレスとは1" src="{{ asset('image/contents_img/content201/1-1.jpg')}}" style="width:100%;"/>
      </div>

      <div class="col-6 mb-3 box2">
        <img class="d-block mx-auto" alt="ストレスとは2" src="{{ asset('image/contents_img/content201/1-2.jpg')}}" style="width:100%;"/>
      </div>

      <div class="col-6 mb-3 box1">
        <img class="d-block mx-auto" alt="ストレスとは3" src="{{ asset('image/contents_img/content201/1-3.jpg')}}" style="width:100%;"/>
      </div>

      <div class="col-6 mb-3 box2">
        <img class="d-block mx-auto" alt="ストレスとは4" src="{{ asset('image/contents_img/content201/1-4.jpg')}}" style="width:100%;"/>
      </div>
    </div>

  </div>

</div>
@endsection

@section('js')
@endsection

@section('title')
ストレスとは?|Field-UP 心理事業
@endsection