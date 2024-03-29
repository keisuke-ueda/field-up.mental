@extends('layouts.common')
<meta name="description" content="ダイエットをしている女性はとても多いです。ほどほどならよいのですが、過剰なダイエットで生活や、その後の人生に影響を及ぼしてしまう方もいます。正しいダイエット方法を学んで、ストレスなく美味しいものを食べましょう。">
@section('content')
<div id="mental_care_contents">
  <div class="row justify-content-center container mx-auto">
    <div class="col-md-7 page-title  mt-5 pb-3">
      <h1 class="text-center">好きなものを食べられないときの
        <br>ストレス(ダイエット)
      </h1>
    </div>
  </div>

  <div class="row justify-content-center container mx-auto">
    <div class="col-md-10 item content-lead-text m-3 pb-3">
      <p>ダイエットは多くの人が気にしている課題です<br>
        ですが間違った方法をとってしまっている人がたくさんいるように思います<br>
        メタボリックシンドロームやBMIなどの知識をつけ、肥満予防の方法を学びましょう</p>
    </div>

    <div class="col-md-10 item text-center youtube mb-5">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/fRYA9_Yi1Sw" title="YouTube video player"
        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen></iframe>
    </div>

    <div class="container row flexbox">
      <div class="col-6 mb-3 box1">
        <img class="d-block mx-auto" alt="ダイエット1" src="{{ asset('image/contents_img/content304/1-1.jpg')}}" style="width:100%;"/>
      </div>

      <div class="col-6 mb-3 box2">
        <img class="d-block mx-auto" alt="ダイエット2" src="{{ asset('image/contents_img/content304/1-2.jpg')}}" style="width:100%;"/>
      </div>

      <div class="col-6 mb-3 box1">
        <img class="d-block mx-auto" alt="ダイエット3" src="{{ asset('image/contents_img/content304/1-3.jpg')}}" style="width:100%;"/>
      </div>

      <div class="col-6 mb-3 box2">
        <img class="d-block mx-auto" alt="ダイエット4" src="{{ asset('image/contents_img/content304/1-4.jpg')}}" style="width:100%;"/>
      </div>
    </div>

  </div>

</div>
@endsection

@section('js')
@endsection

@section('title')
ダイエット|Field-UP 心理事業
@endsection