@extends('layouts.common')

@section('content')
<?php $bg_img = 'home' ?>
  <div class="parallax-bg bg {{$bg_img}}">
  </div>

  <div class="scrollbox">
    <p>心理テストへ遷移</p>
  </div>

  <div class="parallax-bg bg {{$bg_img}}">
  </div>

  <div class="scrollbox">
    <p>コンテンツへ遷移</p>
  </div>

  <div class="parallax-bg bg {{$bg_img}}">
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