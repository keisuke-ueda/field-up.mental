@extends('layouts.common')

@section('content')
<?php $bg_img = asset('/image/test_care.jpg'); ?>
  <div class="parallax-bg">
    <p>パララックス</p>
  </div>

  <div class="scrollbox">
    PsychologyTest
  </div>

  <div class="parallax-bg">
    <p>パララックス</p>
  </div>

  <div class="scrollbox">
    Content
  </div>

  <div class="parallax-bg">
    <p>パララックス</p>
  </div>

  <div class="scrollbox">
    Care
  </div>
@endsection

@section('js')
@endsection

@section('title')
ケアメニュー
@endsection