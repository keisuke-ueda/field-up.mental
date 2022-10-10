@extends('layouts.common')

@section('content')
<div id="home">
  <div class="container-fruid">

<div class="row">
  <div class="col-md-12 mt-5 mb-5">
    <h2 class="f1 text-center">心理学って面白い!!<br>
    前に向かって一緒に進んでいこう!!</h2>
  </div>
</div>

<div class="row">
    <div class="container">
      <video src='{{ asset("/image/OP_rev1.mp4")}}' controls muted autoplay playsinline loop style="width: 100%;"></video>
    </div>
  </div>

  <div class="row mt-5">
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