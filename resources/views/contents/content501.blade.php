@extends('layouts.common')
<meta name="description" content="仕事に限らずチーム、集団でなにかをすると一人ではできなかったことができるようになります。でもその反面、一人の時には感じなかったストレスを感じることが多々あると思います。この動画でどんなストレスがあるのかを客観的に見てみましょう。">
@section('content')
<div id="mental_care_contents">
  <div class="row justify-content-center container mx-auto">
    <div class="col-md-7 page-title  mt-5 pb-3">
      <h1 class="text-center">チームとリスク</h1>
    </div>
  </div>

  <div class="row justify-content-center container mx-auto">
    <div class="col-md-10 item content-lead-text m-3 pb-3">
      <p>仕事をする上でほとんどの場合、チームを形成すると思います<br>
        職務集団の特性、リーダーのタイプなど基本的な知識から、<br>
        そこで起こってくるリスクやそのマネジメントについて学んでいきましょう
      </p>
    </div>

    <div class="col-md-10 item text-center youtube mb-5">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/HUKT1nUH7ck" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <div class="container row flexbox">
      <div class="col-6 mb-3 box1">
        <img class="d-block mx-auto" alt="チームとリスク1" src="{{ asset('image/contents_img/content501/1-1.jpg')}}" style="width:100%;"/>
      </div>

      <div class="col-6 mb-3 box2">
        <img class="d-block mx-auto" alt="チームとリスク2" src="{{ asset('image/contents_img/content501/1-2.jpg')}}" style="width:100%;"/>
      </div>

      <div class="col-6 mb-3 box1">
        <img class="d-block mx-auto" alt="チームとリスク3" src="{{ asset('image/contents_img/content501/1-3.jpg')}}" style="width:100%;"/>
      </div>

      <div class="col-6 mb-3 box2">
        <img class="d-block mx-auto" alt="チームとリスク4" src="{{ asset('image/contents_img/content501/1-4.jpg')}}" style="width:100%;"/>
      </div>
    </div>

  </div>

</div>
@endsection

@section('js')
@endsection

@section('title')
チームとリスク|Field-UP 心理事業
@endsection