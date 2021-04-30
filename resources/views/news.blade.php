@extends('layouts.common')

@section('content')
<div id="news">
  <div class="container page_title">
    <div class="row justify-content-center">
      <div class="col-md-12" style="height: 50px;">
      </div>
      <div class="col-md-7 item align-self-center">
        <h1 style="text-align: center;">ニュース</h1>
      </div>
      <div class="col-md-12" style="height: 50px;">
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row justify-content-center">
      @for ($i = 0; $i < 20; $i++)
      <div class="col-sm-10 item" style="height: 150px;">
        <a href="#" class="card border-dark mb-3 w-100 h-100">
          <div class="card-body text-dark">
            <p>2021/4/30 金曜日</p>
            <h5 class="card-title">新型コロナウィルス感染症緊急事態宣言</h5>
            <p class="card-text">ほにゃららほにゃらら</p>
          </div>
        </a>
      </div>
      <div class="col-xs-12" style="height: 50px;">

      </div>
      @endfor
    </div>
  </div>
</div>
@endsection

@section('js')
@endsection

@section('title')
ニュース
@endsection