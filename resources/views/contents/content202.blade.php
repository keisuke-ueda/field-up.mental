@extends('layouts.common')
<meta name="description" content="いきなりですが不安と恐怖の違いはわかりますか?この動画を見るとその違いがよくわかります。実はその違いことが不安をなくすための一番の近道になります。是非見てください。">
@section('content')
<div id="mental_care_contents">
  <div class="row justify-content-center container mx-auto">
    <div class="col-md-7 page-title  mt-5 pb-3">
      <h1 class="text-center">不安とは何か?</h1>
    </div>
  </div>

  <div class="row justify-content-center container mx-auto">
    <div class="col-md-10 item content-lead-text m-3 pb-3">
      <p>ストレスに繋がりやすい感情に「不安」というものがあります<br>
        不安とはどのようなもので、どういったときに起こるのか、ということに焦点を当てながら<br>
        実際に陥りやすい思考や行動のパターンへの理解を深めましょう</p>
    </div>

    <div class="col-md-10 item text-center youtube mb-5">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/2R3pHgSZ7v0" title="YouTube video player"
        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen></iframe>
    </div>

    <div class="container row flexbox">
      <div class="col-6 mb-3 box1">
        <img class="d-block mx-auto" alt="不安とは何か1" src="{{ asset('image/contents_img/content202/1-1.jpg')}}" style="width:100%;"/>
      </div>

      <div class="col-6 mb-3 box2">
        <img class="d-block mx-auto" alt="不安とは何か2" src="{{ asset('image/contents_img/content202/1-2.jpg')}}" style="width:100%;"/>
      </div>

      <div class="col-6 mb-3 box1">
        <img class="d-block mx-auto" alt="不安とは何か3"src="{{ asset('image/contents_img/content202/1-3.jpg')}}" style="width:100%;"/>
      </div>

      <div class="col-6 mb-3 box2">
        <img class="d-block mx-auto" alt="不安とは何か4" src="{{ asset('image/contents_img/content202/1-4.jpg')}}" style="width:100%;"/>
      </div>
    </div>

  </div>

</div>
@endsection

@section('js')
@endsection

@section('title')
不安とは何か?|Field-UP 心理事業
@endsection