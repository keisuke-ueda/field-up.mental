@extends('layouts.common')

@section('content')
<div id="mental_care_contents">
  <div class="row justify-content-center container mx-auto">
    <div class="col-md-7 page-title  mt-5 pb-3">
      <h1 class="text-center">周りのためにできること</h1>
    </div>
  </div>

  <div class="row justify-content-center container mx-auto">
    <div class="col-md-10 item mt-3 pb-3">
      <p>強いストレスや継続にストレスに晒されると重大な健康障害を引き起こすことがあります<br>
        大事な人や、まわりの人たちに目を向けたときに、<br>
        行き詰っているサインに気付き、してあげられることをしてあげましょう</p>
    </div>

    <div class="col-md-10 item text-center youtube mb-5">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/6HHdgVcCJf0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <div class="container row">
      <div class="col m-4" style="height: 250px;">
        <img class="h-100" src="{{ asset('image/contents_img/content206/1-1.jpg')}}"/>
      </div>

      <div class="col m-4" style="height: 250px;">
        <img class="h-100" src="{{ asset('image/contents_img/content206/1-2.jpg')}}"/>
      </div>

      <div class="col m-4" style="height: 250px;">
        <img class="h-100" src="{{ asset('image/contents_img/content206/1-3.jpg')}}"/>
      </div>

      <div class="col m-4" style="height: 250px;">
        <img class="h-100" src="{{ asset('image/contents_img/content206/1-4.jpg')}}"/>
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