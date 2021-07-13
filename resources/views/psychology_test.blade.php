@extends('layouts.common')

@section('content')
<div id="psychology_test">
  <div class="row justify-content-center container mx-auto">
    <div class="col-md-7 page-title mt-5 pb-3">
      <h1 class="text-center">心理テスト</h1>
      <p class="text-center">手軽に心理テストができちゃう<br>どんな結果が出るかな？</p>
    </div>
  </div>

  <div class="container pb-5">
    <div class="row"> 
      <!--{{-- @for ($i = 0; $i < 3; $i++) --}}-->
      <div class="col-md-4 item">
        <div class="card" style="margin: 10px;">
          <a href='psychology_test/egogram' class="w-100 h-100">
            <img src='{{ asset("/image/psychology_test_img/心理テスト(エゴグラム).jpg") }}' class="card-img" alt="...">
            <h3 class="card-title">【エゴグラム】あなたはどんな特性があるのかな？</h3>
          </a>
        </div>
      </div>

      <div class="col-md-4 item">
        <div class="card" style="margin: 10px;">
          <a href='making_now' class="w-100 h-100">
            <img src='{{ asset("/image/psychology_test_img/製作中ページ.jpg") }}' class="card-img" alt="...">
            <h3 class="card-title">【準備中】ちょっと待っててね</h3>
          </a>
        </div>
      </div>

      <div class="col-md-4 item">
        <div class="card" style="margin: 10px;">
          <a href='making_now' class="w-100 h-100">
            <img src='{{ asset("/image/psychology_test_img/製作中ページ.jpg") }}' class="card-img" alt="...">
            <h3 class="card-title">【準備中】ちょっと待っててね</h3>
          </a>
        </div>
      </div>

      <div class="col-md-4 item">
        <div class="card" style="margin: 10px;">
          <a href='making_now' class="w-100 h-100">
            <img src='{{ asset("/image/psychology_test_img/製作中ページ.jpg") }}' class="card-img" alt="...">
            <h3 class="card-title">【準備中】ちょっと待っててね</h3>
          </a>
        </div>
      </div>

      <div class="col-md-4 item">
        <div class="card" style="margin: 10px;">
          <a href='making_now' class="w-100 h-100">
            <img src='{{ asset("/image/psychology_test_img/製作中ページ.jpg") }}' class="card-img" alt="...">
            <h3 class="card-title">【準備中】ちょっと待っててね</h3>
          </a>
        </div>
      </div>

      <div class="col-md-4 item">
        <div class="card" style="margin: 10px;">
          <a href='making_now' class="w-100 h-100">
            <img src='{{ asset("/image/psychology_test_img/製作中ページ.jpg") }}' class="card-img" alt="...">
            <h3 class="card-title">【準備中】ちょっと待っててね</h3>
          </a>
        </div>
      </div>

      <div class="col-md-4 item">
        <div class="card" style="margin: 10px;">
          <a href='making_now' class="w-100 h-100">
            <img src='{{ asset("/image/psychology_test_img/製作中ページ.jpg") }}' class="card-img" alt="...">
            <h3 class="card-title">【準備中】ちょっと待っててね</h3>
          </a>
        </div>
      </div>

      <div class="col-md-4 item">
        <div class="card" style="margin: 10px;">
          <a href='making_now' class="w-100 h-100">
            <img src='{{ asset("/image/psychology_test_img/製作中ページ.jpg") }}' class="card-img" alt="...">
            <h3 class="card-title">【準備中】ちょっと待っててね</h3>
          </a>
        </div>
      </div>

      <div class="col-md-4 item">
        <div class="card" style="margin: 10px;">
          <a href='making_now' class="w-100 h-100">
            <img src='{{ asset("/image/psychology_test_img/製作中ページ.jpg") }}' class="card-img" alt="...">
            <h3 class="card-title">【準備中】ちょっと待っててね</h3>
          </a>
        </div>
      </div>

      <!--{{-- @endfor --}}-->
    </div>
  </div>
</div>
@endsection

@section('js')
@endsection

@section('title')
心理テスト
@endsection