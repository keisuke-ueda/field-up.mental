@extends('layouts.common')

@section('content')
<div id="home">
  <div class="container-fruid">


    <div class="col-md-10 item youtube offset-md-1">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/DSvMV7q22Lw?autoplay=1&mute=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <div class="row">
      <div class="col-md-12 div-link mt-5 pb-5">
        <img src='{{ asset("/image/サイト画像(心理テスト).jpg") }}' class="card-img" alt="...">
        <a class ="link" href="{{ route('psychology_test.show') }}"></a>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12 div-link mt-5 pb-5">
        <img src='{{ asset("/image/サイト画像(コンテンツ).jpg") }}' class="card-img" alt="...">
        <a class ="link" href="{{ route('contents_list.show') }}"></a>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12 div-link mt-5 pb-5">
        <img src='{{ asset("/image/サイト画像(お問合せ&FAQ).jpg") }}' class="card-img" alt="...">
        <a class ="link" href="{{ route('contacts_faq.show') }}"></a>
      </div>
    </div>
</div>

@endsection

@section('js')
@endsection

@section('title')
Field-UP ~技術とヒトに寄りそう~
@endsection