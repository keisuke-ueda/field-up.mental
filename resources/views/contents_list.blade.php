@extends('layouts.common')

@section('content')
<?php $bg_img = asset('/image/背景テスト4.jpg'); ?>

<div class="parallax-bg" style="background-image: url('{{$bg_img}}');height: 50px;">
</div>

<div class="parallax-bg" style="background-image: url('{{$bg_img}}');">
  <div class="container parallax-bg" style="background-image: url('{{$bg_img}}');">
    <div class="scrollbox" style="height: auto; color: white;">
      <div class="row justify-content-center parallax-bg" style="background-image: url('{{$bg_img}}');">
        <div class="col-md-7 align-self-center">
          <h1 style="text-align: center;">コンテンツライブラリ</h1>
          <p style="text-align: center;">気になるコンテンツをチェックしてみよう</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="parallax-bg" style="background-image: url('{{$bg_img}}');height: 50px;">
</div>

<div class="parallax-bg" style="background-image: url('{{$bg_img}}');">
  <div class="container parallax-bg" style="background-image: url('{{$bg_img}}');">
    <div class="scrollbox" style="height: auto; color: white;">
      <div class="row">
        @for ($i = 0; $i < 5; $i++)
        <div class="col-md-5" style="height: 150px;">
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

        <div class="col-md-2 parallax-bg" style="background-image: url('{{$bg_img}}');">
        </div>
        <div class="col-md-5" style="height: 150px;">
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

        <div class="col-md-12 parallax-bg" style="background-image: url('{{$bg_img}}');height: 20px;">
        </div>
        @endfor
      </div>
    </div>
  </div>
</div>

<div class="parallax-bg" style="background-image: url('{{$bg_img}}');">
</div>
@endsection

@section('js')
@endsection

@section('bg_img')
test_cont.jpg
@endsection

@section('title')
コンテンツ一覧
@endsection