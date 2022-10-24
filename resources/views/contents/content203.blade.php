@extends('layouts.common')
<meta name="description" content="ストレスに弱い、強いといいことをよく耳にしますが果たして本当にその言葉だけで片づけられるものでしょうか？みんなが同じストレッサーを受けているわけではないので本当の意味で等しい測り方はできません。感じ方は人それぞれです。">
@section('content')
<div id="mental_care_contents">
  <div class="row justify-content-center container mx-auto">
    <div class="col-md-7 page-title  mt-5 pb-3">
      <h1 class="text-center">感じ方は人それぞれ</h1>
    </div>
  </div>

  <div class="row justify-content-center container mx-auto">
    <div class="col-md-10 item content-lead-text m-3 pb-3">
      <p>ものの考え方や感情の動き方は人によって大きく違ってきます<br>
        自分の性格や傾向をしっかり把握することが重要です<br>
        弱い面や強みを理解した上で前向きになれる考え方を紹介します</p>
    </div>

    <div class="col-md-10 item text-center youtube mb-5">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/C85QNRQ1omQ" title="YouTube video player"
        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen></iframe>
    </div>

    <div class="container row flexbox">
      <div class="col-6 mb-3 box1">
        <img class="d-block mx-auto" alt="感じ方は人それぞれ1" src="{{ asset('image/contents_img/content203/1-1.jpg')}}" style="width:100%;"/>
      </div>

      <div class="col-6 mb-3 box2">
        <img class="d-block mx-auto" alt="感じ方は人それぞれ2" src="{{ asset('image/contents_img/content203/1-2.jpg')}}" style="width:100%;"/>
      </div>

      <div class="col-6 mb-3 box1">
        <img class="d-block mx-auto" alt="感じ方は人それぞれ3" src="{{ asset('image/contents_img/content203/1-3.jpg')}}" style="width:100%;"/>
      </div>

      <div class="col-6 mb-3 box2">
        <img class="d-block mx-auto" alt="感じ方は人それぞれ4" src="{{ asset('image/contents_img/content203/1-4.jpg')}}" style="width:100%;"/>
      </div>
    </div>

  </div>

</div>
@endsection

@section('js')
@endsection

@section('title')
感じ方は人それぞれ|Field-UP 心理事業
@endsection