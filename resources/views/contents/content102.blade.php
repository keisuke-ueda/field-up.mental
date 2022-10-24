@extends('layouts.common')

@section('content')
<div id="mental_care_contents">
  <div class="row justify-content-center container mx-auto">
    <div class="col-md-7 page-title  mt-5 pb-3">
      <h1 class="text-center">本能とは？</h1>
    </div>
  </div>

  <div class="row justify-content-center container mx-auto">
    <div class="col-md-10 item content-lead-text m-3 pb-3">
      <p></p>
    </div>

    <div class="col-md-10 item text-center youtube mb-5">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/PwvpsjrXTGU" title="YouTube video player"
        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen></iframe>
    </div>

    <div class="container row flexbox">
      <div class="col-6 mb-3 box1" style="height: 250px;">
        <img class="h-100 d-block mx-auto" src="{{ asset('image/contents_img/content101/1-1.jpg')}}" />
      </div>

      <div class="col-6 mb-3 box2" style="height: 250px;">
        <img class="h-100 d-block mx-auto" src="{{ asset('image/contents_img/content101/1-2.jpg')}}" />
      </div>

      <div class="col-6 mb-3 box1" style="height: 250px;">
        <img class="h-100 d-block mx-auto" src="{{ asset('image/contents_img/content101/1-3.jpg')}}" />
      </div>

      <div class="col-6 mb-3 box2" style="height: 250px;">
        <img class="h-100 d-block mx-auto" src="{{ asset('image/contents_img/content101/1-4.jpg')}}" />
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