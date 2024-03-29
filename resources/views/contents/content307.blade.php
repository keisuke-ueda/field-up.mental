@extends('layouts.common')
<meta name="description" content="若いころはあんなに動けたのに...。そんなことを思ったことはありませんか?それがストレスになってしまうこともあるともいます。でも!!それに気づいたのであれば大丈夫です。今からでも運動すれば、元通りというわけではないですがどんどん動けるようになっていきます。継続は力なり!!">
@section('content')
<div id="mental_care_contents">
  <div class="row justify-content-center container mx-auto">
    <div class="col-md-7 page-title  mt-5 pb-3">
      <h1 class="text-center">カラダを動かさないと
        <br>ココロも動かない
        <br>(若々しいカラダづくり)
      </h1>
    </div>
  </div>

  <div class="row justify-content-center container mx-auto">
    <div class="col-md-10 item content-lead-text m-3 pb-3">
      <p>リード文と要約</p>
    </div>

    <div class="col-md-10 item text-center youtube mb-5">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/PwvpsjrXTGU" title="YouTube video player"
        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen></iframe>
    </div>

    <div class="container row flexbox">
      <div class="col-6 mb-3 box1">
        <img class="d-block mx-auto" alt="若々しいカラダづくり1" src="{{ asset('image/contents_img/content307/1-1.jpg')}}" style="width:100%;"/>
      </div>

      <div class="col-6 mb-3 box2">
        <img class="d-block mx-auto" alt="若々しいカラダづくり2" src="{{ asset('image/contents_img/content307/1-2.jpg')}}" style="width:100%;"/>
      </div>

      <div class="col-6 mb-3 box1">
        <img class="d-block mx-auto" alt="若々しいカラダづくり3" src="{{ asset('image/contents_img/content307/1-3.jpg')}}" style="width:100%;"/>
      </div>

      <div class="col-6 mb-3 box2">
        <img class="d-block mx-auto" alt="若々しいカラダづくり4" src="{{ asset('image/contents_img/content307/1-4.jpg')}}" style="width:100%;"/>
      </div>
    </div>

  </div>

</div>
@endsection

@section('js')
@endsection

@section('title')
若々しいカラダづくり|Field-UP 心理事業
@endsection