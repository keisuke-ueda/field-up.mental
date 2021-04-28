@extends('layouts.common')

@section('content')
<div id="psychology_test">
  <div class="container page_title">
    <div class="row justify-content-center">
      <div class="col-md-12" style="height: 50px;">
      </div>
      <div class="col-md-7 item align-self-center">
        <h1 style="text-align: center;">心理テスト</h1>
        <p style="text-align: center;">気になったテストをやってみよう</p>
      </div>
      <div class="col-md-12" style="height: 50px;">
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      @for ($i = 0; $i < 5; $i++) <div class="col-md-5 item" style="height: 150px;">
        <a href="{{ route('egogram.show') }}" class="card w-100 h-100">
          <img src="{{ asset('/image/test_care.png') }}" class="card-img" alt="...">
          <div class="card-img-overlay">
            <h3 class="card-title">コンテンツ</h3>
            <p class="card-text">
              画像を配置
            </p>
          </div>
        </a>
    </div>
    <div class="col-md-2">
    </div>
    <div class="col-md-5 item" style="height: 150px;">
      <a href="#" class="card w-100 h-100">
        <img src="../../public/image/test_caer.jpg" class="card-img" alt="...">
        <div class="card-img-overlay">
          <h3 class="card-title">コンテンツ</h3>
          <p class="card-text">
            画像を配置
          </p>
        </div>
      </a>
    </div>
    <div class="col-md-12" style="height: 20px;">
    </div>
    @endfor
  </div>
  <div style="height: 50px;">
  </div>

@endsection

@section('js')
@endsection

@section('title')
心理テスト
@endsection