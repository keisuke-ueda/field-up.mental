@extends('layouts.common')

@section('content')
<div id="mental_care_contents">
  <div class="row justify-content-center container mx-auto">
    <div class="col-md-7 page-title  mt-5 pb-3">
      <h1 class="text-center">よりよいコミュニケーション</h1>
    </div>
  </div>

  <div class="row justify-content-center container mx-auto">
    <div class="col-md-10 item content-lead-text mt-3 pb-3">
      <p>コミュニケーションというものは送り方、受け方どちらも重要なものです。<br>
        人間の最大の強みである「言葉」を使って感情を表現することだけでなく、<br>
        表情や口調でも表現することでコミュニケーションを円滑に進めることができます。</p>
    </div>

    <div class="col-md-10 item text-center youtube mb-5">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/CvG-8gLf6w4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <div class="container row">
      <div class="col m-4" style="height: 250px;">
        <img class="h-100" src="{{ asset('image/contents_img/content204/1-1.jpg')}}" />
      </div>

      <div class="col m-4" style="height: 250px;">
        <img class="h-100" src="{{ asset('image/contents_img/content204/1-2.jpg')}}" />
      </div>

      <div class="col m-4" style="height: 250px;">
        <img class="h-100" src="{{ asset('image/contents_img/content204/1-3.jpg')}}" />
      </div>

      <div class="col m-4" style="height: 250px;">
        <img class="h-100" src="{{ asset('image/contents_img/content204/1-4.jpg')}}" />
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