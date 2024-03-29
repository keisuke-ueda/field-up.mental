@extends('layouts.common')
<meta name="description" content="本能は人が人として生まれたときから備わっているものです。これは精神論でどうにかなる代物ではありません。あなたの抱えている悩みの本質はもしかしたら本能が関わっているのかも知れません。">
@section('content')
<div id="mental_care_contents">
  <div class="row justify-content-center container mx-auto">
    <div class="col-md-7 page-title  mt-5 pb-3">
      <h1 class="text-center">本能とは？</h1>
    </div>
  </div>

  <div class="row justify-content-center container mx-auto">
    <div class="col-md-10 item content-lead-text m-3 pb-3">
      <p>今回は本能というものについて紐解きます
        生の本能、死の本能の対比から始まり、リビドーやカタルシスなどなんとなく聞いたことのある言葉を交えて、<br>
        フロイトの夢分析のように興味深い理論も紹介していきます</p>
    </div>

    <div class="col-md-10 item text-center youtube mb-5">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/RCc0NS9VdCE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <div class="container row flexbox">
      <div class="col-6 mb-3 box1">
        <img class="d-block mx-auto" alt="本能とは1" src="{{ asset('image/contents_img/content101/1-1.jpg')}}" style="width:100%;"/>
      </div>

      <div class="col-6 mb-3 box2">
        <img class="d-block mx-auto" alt="本能とは2" src="{{ asset('image/contents_img/content101/1-2.jpg')}}" style="width:100%;"/>
      </div>

      <div class="col-6 mb-3 box1">
        <img class="d-block mx-auto" alt="本能とは3" src="{{ asset('image/contents_img/content101/1-3.jpg')}}" style="width:100%;"/>
      </div>

      <div class="col-6 mb-3 box2">
        <img class="d-block mx-auto" salt="本能とは4" src="{{ asset('image/contents_img/content101/1-4.jpg')}}" style="width:100%;"/>
      </div>
    </div>

  </div>

</div>
@endsection

@section('js')
@endsection

@section('title')
本能とは？|Field-UP 心理事業
@endsection