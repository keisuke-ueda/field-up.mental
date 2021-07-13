@extends('layouts.common')

@section('content')
<div id="home">
<!--
  背景テスト1:0.5
  背景テスト2:0.3
  背景テスト3:0.3
  背景テスト4:0.3
  背景テスト5:0.5
  背景テスト6:0.3
  背景テスト7:0.2
  背景テスト8:0.3
  背景テスト9:0.3
-->

<div class="container-fruid">
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