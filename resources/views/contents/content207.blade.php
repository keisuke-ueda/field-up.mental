@extends('layouts.common')

@section('content')
<div id="mental_care_contents">
  <div class="row justify-content-center container mx-auto">
    <div class="col-md-7 page-title  mt-5 pb-3">
      <h1 class="text-center">仕事によるストレス</h1>
    </div>
  </div>

  <div class="row justify-content-center container mx-auto">
    <div style="background:rgba(255, 255, 255, 0.7)" class="lead col-md-10 item content-lead-text mt-3 mb-3 pb-3 pt-3">
      <p>人生において「仕事」の比重はとても高く、ストレス要因も仕事に関係することが多いです<br>
        仕事からくるストレスにはどういったものがあるかを理解し、<br>
        環境改善に働きかけ、働きやすい状態に近づけるためにできることを知りましょう</p>
    </div>

    <div class="col-md-10 item text-center youtube mb-5">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/pWhaNW47KlQ" title="YouTube video player"
        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen></iframe>
    </div>

    <div class="container row">
      <div class="col m-4" style="height: 250px;">
        <img class="h-100" src="{{ asset('image/contents_img/content207/1-1.jpg')}}" />
      </div>

      <div class="col m-4" style="height: 250px;">
        <img class="h-100" src="{{ asset('image/contents_img/content207/1-2.jpg')}}" />
      </div>

      <div class="col m-4" style="height: 250px;">
        <img class="h-100" src="{{ asset('image/contents_img/content207/1-3.jpg')}}" />
      </div>

      <div class="col m-4" style="height: 250px;">
        <img class="h-100" src="{{ asset('image/contents_img/content207/1-4.jpg')}}" />
      </div>
    </div>

  </div>

</div>
@endsection

@section('js')
@endsection

@section('title')
ココロとカラダの関係
@endsection