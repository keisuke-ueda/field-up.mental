@extends('layouts.common')
<meta name="description" content="色を私たちがどうやって見ているかを動画で見てみましょう。小学校のときの理科の実験を思い出すかもしれません。理屈がわかるとデザインなどの仕事、私生活に役立てられるかもしれません。">
@section('content')
<div id="mental_care_contents">
  <div class="row justify-content-center container mx-auto">
    <div class="col-md-7 page-title  mt-5 pb-3">
      <h1 class="text-center">色と理論</h1>
    </div>
  </div>

  <div class="row justify-content-center container mx-auto">
    <div class="col-md-10 item content-lead-text mt-3 pb-3">
      <p>どのように色をつかってけばいのかがわからない<br>
        デザインの仕方がわからないといったようなことはありませんか？<br>
        同じ赤色でもトーンを変えていくと印象が全然変わりますよ</p>
    </div>

    <div class="col-md-10 item text-center youtube mb-5">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/ctEaEn6Atok" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <div class="container row">
      <div class="col m-4" style="height: 250px;">
        <img class="h-100" alt="色と心理1" src="{{ asset('image/contents_img/content602/1-1.jpg')}}" />
      </div>

      <div class="col m-4" style="height: 250px;">
        <img class="h-100" alt="色と心理2" src="{{ asset('image/contents_img/content602/1-2.jpg')}}" />
      </div>

      <div class="col m-4" style="height: 250px;">
        <img class="h-100" alt="色と心理3" src="{{ asset('image/contents_img/content602/1-3.jpg')}}" />
      </div>

      <div class="col m-4" style="height: 250px;">
        <img class="h-100" alt="色と心理4" src="{{ asset('image/contents_img/content602/1-4.jpg')}}" />
      </div>
    </div>

  </div>

</div>
@endsection

@section('js')
@endsection

@section('title')
色と理論|Field-UP 心理事業
@endsection