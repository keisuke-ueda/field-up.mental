@extends('layouts.common')

@section('content')
<?php $bg_img = asset('/image/背景テスト1.jpg') ?>
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
  <div class="parallax-bg" style="background-image: url('{{$bg_img}}'); height: 250px;">
  </div>

  <div class="container-fruid parallax-bg" style="background-image: url('{{$bg_img}}');">
    <div class="scrollbox" style="filter: opacity(0.5);">
      <p>心理テストへ遷移</p>
    </div>
  </div>

  <div class="parallax-bg" style="background-image: url('{{$bg_img}}'); height: 250px;">
  </div>

  <div class="container-fruid parallax-bg" style="background-image: url('{{$bg_img}}');">
    <div class="scrollbox" style="filter: opacity(0.5);">
      <p>心理テストへ遷移</p>
    </div>
  </div>

  <div class="parallax-bg" style="background-image: url('{{$bg_img}}'); height: 250px;">
  </div>

  <div class="container-fruid parallax-bg" style="background-image: url('{{$bg_img}}');">
    <div class="scrollbox" style="filter: opacity(0.5);">
      <p>心理テストへ遷移</p>
    </div>
  </div>
@endsection

@section('js')
@endsection

@section('title')
Field-UP ~技術とヒトに寄りそう~
@endsection