@extends('layouts.common')
<meta name="description" content="カラダが何に反応してリラックスしていくかの理屈がわかると意外と簡単にリラックスってできるのです。緊張しっぱなしの時に効率よくリラックスする豊富をアニメーション動画でご覧ください。">
@section('content')
<div id="mental_care_contents">
  <div class="row justify-content-center container mx-auto">
    <div class="col-md-7 page-title  mt-5 pb-3">
      <h1 class="text-center">カラダを動かさないと
        <br>ココロも動かない
        <br>(迷走神経とリラックス)
      </h1>
    </div>
  </div>

  <div class="row justify-content-center container mx-auto">
    <div class="col-md-10 item content-lead-text m-3 pb-3">
      <p>お腹が痛い、腰が痛い、などカラダに違和感を感じることがあると思います<br>
        副交感神経・迷走神経というものを主題に、<br>
        カラダをリラックスさせる重要性とその方法について学びましょう</p>
    </div>

    <div class="col-md-10 item text-center youtube mb-5">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/P8z2Pm1kt7w" title="YouTube video player"
        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen></iframe>
    </div>

    <div class="container row flexbox">
      <div class="col-6 mb-3 box1">
        <img class="d-block mx-auto" alt="迷走神経とリラックス1" src="{{ asset('image/contents_img/content305/1-1.jpg')}}" style="width:100%;"/>
      </div>

      <div class="col-6 mb-3 box2">
        <img class="d-block mx-auto" alt="迷走神経とリラックス2" src="{{ asset('image/contents_img/content305/1-2.jpg')}}" style="width:100%;"/>
      </div>

      <div class="col-6 mb-3 box1">
        <img class="d-block mx-auto" alt="迷走神経とリラックス3" src="{{ asset('image/contents_img/content305/1-3.jpg')}}" style="width:100%;"/>
      </div>

      <div class="col-6 mb-3 box2">
        <img class="d-block mx-auto" alt="迷走神経とリラックス4" src="{{ asset('image/contents_img/content305/1-4.jpg')}}" style="width:100%;"/>
      </div>
    </div>

  </div>

</div>
@endsection

@section('js')
@endsection

@section('title')
迷走神経とリラックス|Field-UP` 心理事業
@endsection