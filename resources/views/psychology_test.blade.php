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
        <a href='{{ route("psychology_test.select", ["page_number"=>$i*2+1]) }}' class="card w-100 h-100">
          <img src='{{ asset("/image/コンテンツサムネ" . ($i*2+1) . ".jpg") }}' class="card-img" alt="...">
          <div class="card-img-overlay">
            <h3 class="card-title"></h3>
            <p class="card-text">
            </p>
          </div>
        </a>
      </div>
      <div class="col-md-2">
      </div>
      <div class="col-md-5 item" style="height: 150px;">
        <a href='{{ route("psychology_test.select", ["page_number"=>$i*2+2]) }}' class="card w-100 h-100">
          <img src='{{ asset("/image/コンテンツサムネ" . ($i*2+2) . ".jpg") }}' class="card-img" alt="...">
          <div class="card-img-overlay">
            <h3 class="card-title"></h3>
            <p class="card-text">
            </p>
          </div>
        </a>
      </div>
      <div class="col-md-12" style="height: 50px;">
      </div>
      @endfor
    </div>
  </div>
</div>
@endsection

@section('js')
@endsection

@section('title')
心理テスト
@endsection