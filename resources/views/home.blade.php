@extends('layouts.common')

@section('content')
<?php $bg_img = asset('/image/test_main.jpg') ?>
  <div class="parallax-bg" style="background-image: url('{{$bg_img}}'); height: 50px;">
  </div>

  <div class="scrollbox">
    <p>心理テストへ遷移</p>
  </div>

  <div class="parallax-bg" style="background-image: url('{{$bg_img}}'); height: 50px;">
  </div>

  <div class="scrollbox">
    <p>コンテンツへ遷移</p>
  </div>

  <div class="parallax-bg" style="background-image: url('{{$bg_img}}'); height: 50px;">
  </div>

  <div class="scrollbox">
    <p>ケアページへ遷移</p>
  </div>
@endsection

@section('js')
@endsection

@section('title')
Field-UP ~技術とヒトに寄りそう~
@endsection