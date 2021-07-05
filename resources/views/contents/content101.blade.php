@extends('layouts.common')

@section('content')
<div id="mental_care_contents">
  <div class="container">
    <div class="row justify-content-center">
      <div class="w-100" style="height: 50px;">
      </div>
      <div class="col-md-7 page-title">
        <h1 class="text-center">カラダとココロの関係</h1>
      </div>
      <div class="w-100" style="height: 50px;">
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10 item" style="height: 200px;">
        <p>リード文と要約</p>
      </div>
      <div class="w-100" style="height:20px;">
      </div>

      <div class="col-md-10 item text-center">
        <div class="youtube">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/PwvpsjrXTGU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
      <div class="w-100" style="height:20px;">
      </div>
      <div class="col-md-5 item text-center" style="height: 300px;">
        <img class="h-100" src="{{ asset('image/contents_img/ストレス1-1.jpg')}}"/>
      </div>
      <div class="col-md-1">
      </div>
      <div class="d-md-none" style="height:20px;">
      </div>
      <div class="col-md-5 item text-center" style="height: 300px;">
        <img class="h-100" src="{{ asset('image/contents_img/ストレス1-2.jpg')}}"/>
      </div>
      <div class="w-100" style="height:20px;">
      </div>
      <div class="col-md-5 item text-center" style="height: 300px;">
        <img class="h-100" src="{{ asset('image/contents_img/ストレス1-3.jpg')}}"/>
      </div>
      <div class="col-md-1">
      </div>
      <div class="d-md-none" style="height:20px;">
      </div>
      <div class="col-md-5 item text-center" style="height: 300px;">
        <img class="h-100" src="{{ asset('image/contents_img/ストレス1-4.jpg')}}"/>
      </div>
      <div class="w-100" style="height:20px;">
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