@extends('layouts.common')
<meta name="description" content="職場にはストレスとなるストレッサーが多くあります。そもそもストレッサーって何と思った方は是非この動画を最後まで見て下さい。ストレスを感じる対象が明確になります。">
@section('content')
<div id="mental_care_contents">
  <div class="row justify-content-center container mx-auto">
    <div class="col-md-7 page-title  mt-5 pb-3">
      <h1 class="text-center">職場で生じるストレスダメージ</h1>
    </div>
  </div>

  <div class="row justify-content-center container mx-auto">
    <div class="col-md-10 item content-lead-text m-3 pb-3">
      <p>社会生活を営む上で「集団」に属するわけですが、その中で様々なストレスが生まれてきます<br>
        社会集団としてメジャーな「職場」の問題にフォーカスして、<br>
        職場意識の変化や起こりうる摩擦、その対処法を解説します
      </p>
    </div>

    <div class="col-md-10 item text-center youtube mb-5">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/hKWSlNAG7QM" title="YouTube video player"
        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen></iframe>
    </div>

    <div class="container row flexbox">
      <div class="col-6 mb-3 box1">
        <img class="d-block mx-auto" alt="職場で生じるストレス1"src="{{ asset('image/contents_img/content205/1-1.jpg')}}" style="width:100%;"/>
      </div>

      <div class="col-6 mb-3 box2">
        <img class="d-block mx-auto" alt="職場で生じるストレス2" src="{{ asset('image/contents_img/content205/1-2.jpg')}}" style="width:100%;"/>
      </div>

      <div class="col-6 mb-3 box1">
        <img class="d-block mx-auto" alt="職場で生じるストレス3" src="{{ asset('image/contents_img/content205/1-3.jpg')}}" style="width:100%;"/>
      </div>

      <div class="col-6 mb-3 box2">
        <img class="d-block mx-auto" alt="職場で生じるストレス4" src="{{ asset('image/contents_img/content205/1-4.jpg')}}" style="width:100%;"/>
      </div>
    </div>

  </div>

</div>
@endsection

@section('js')
@endsection

@section('title')
職場で生じるストレスダメージ|Field-UP 心理事業
@endsection