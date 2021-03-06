@extends('layouts.common')

@section('content')
<div id="care">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12" style="height: 50px;">
      </div>
      <div class="col-md-7 page-title">
        <h1 class="text-center">ケアメニュー</h1>
      </div>
      <div class="col-md-12" style="height: 50px;">
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-5 item link-box" style="color: black;height: 300px; background-color: rgba(255, 255, 255, 0.7);">
        <a href="{{ route('chat_care.login') }}"></a>
        チャット
      </div>
      <div class="d-block d-sm-none" style="height: 50px;">

      </div>
      <div class="col-sm-5 offset-sm-2 item link-box" style="color: black;height: 300px; background-color: rgba(255, 255, 255, 0.7);">
        予約
      </div>
      <div class="col-md-12 d-none d-sm-block" style="height: 50px;">

      </div>
    </div>
  </div>
</div>
@endsection

@section('js')
@endsection

@section('title')
ケアメニュー
@endsection