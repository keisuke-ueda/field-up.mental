@extends('layouts.common')
<meta name="description" content="周りの人がすごくストレスを抱えているのも見ると自分まで滅入ってくるという方もいるのではないですか？それが友人や知人、家族であれば尚のことです。あなたもその人たちのためにできることがあります。この動画を見て声をかけてあげてください。">
@section('content')
<div id="mental_care_contents">
  <div class="row justify-content-center container mx-auto">
    <div class="col-md-7 page-title  mt-5 pb-3">
      <h1 class="text-center">周りのためにできること</h1>
    </div>
  </div>

  <div class="row justify-content-center container mx-auto">
    <div class="col-md-10 item content-lead-text m-3 pb-3">
      <p>強いストレスや継続にストレスに晒されると重大な健康障害を引き起こすことがあります<br>
        大事な人や、まわりの人たちに目を向けたときに、<br>
        行き詰っているサインに気付き、してあげられることをしてあげましょう</p>
    </div>

    <div class="col-md-10 item text-center youtube mb-5">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/6HHdgVcCJf0" title="YouTube video player"
        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen></iframe>
    </div>

    <div class="container row flexbox">
      <div class="col-6 mb-3 box1">
        <img class="d-block mx-auto" alt="周りのためにできること1" src="{{ asset('image/contents_img/content206/1-1.jpg')}}" style="width:100%;"/>
      </div>

      <div class="col-6 mb-3 box2">
        <img class="d-block mx-auto" alt="周りのためにできること2" src="{{ asset('image/contents_img/content206/1-2.jpg')}}" style="width:100%;"/>
      </div>

      <div class="col-6 mb-3 box1">
        <img class="d-block mx-auto" alt="周りのためにできること3" src="{{ asset('image/contents_img/content206/1-3.jpg')}}" style="width:100%;"/>
      </div>

      <div class="col-6 mb-3 box2">
        <img class="d-block mx-auto" alt="周りのためにできること4" src="{{ asset('image/contents_img/content206/1-4.jpg')}}" style="width:100%;"/>
      </div>
    </div>

  </div>

</div>
@endsection

@section('js')
@endsection

@section('title')
周りのためにできること|Field-UP 心理事業
@endsection