@extends('layouts.common')

@section('content')
<div id="mental_care_contents">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12" style="height: 50px;">
      </div>
      <div class="col-md-7 page_title">
        <h1 class="text-center"><br class="br-sp"/>ストレスと心理</h1>
        <p class="text-center">リード文</p>
      </div>
      <div class="col-md-12" style="height: 50px;">
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
    {{--  @for ($i = 0; $i < 3; $i++) <div class="col-md-3 col-6 item"> --}}
      <div class="col-md-4 item">
        <div class="card" style="margin: 10px;">
        <a href='{{ route("making_now.show") }}' class="w-100 h-100">
        {{-- 元のやつ。他のやつはページの数字を変えるだけ <a href='{{ route("contents_sec.select", ["page_number"=>201])}}' class="w-100 h-100"> --}}
        {{--  <!--<a href='{{ route("contents_list.select", ["page_number"=>$i*4+1]) }}' class="w-100 h-100">--> --}}
          <img src='{{ asset("/image/sec2_image/ストレスとは(1).jpg") }}' class="card-img" alt="...">
            <h3 class="card-title">【ストレスとは】ストレスの正体ってなんだろう？</h3>
            <p class="card-text">
            </p>
        </a>
        </div>
      </div>
      
      <div class="col-md-4 item">
        <div class="card" style="margin: 10px;">
          <a href='{{ route("making_now.show") }}' class="w-100 h-100">
            <img src='{{ asset("/image/sec2_image/不安とは何か(2).jpg")}}' class="card-img" alt="...">
              <h3 class="card-title">【不安とは何か】不安の正体がわかるよ</h3>
              <p class="card-text">
              </p>
          </a>
        </div>
      </div>

      <div class="d-md-none" style="height: 50px;">
      </div>

      <div class="col-md-4 item">
        <div class="card" style="margin: 10px;">
          <a href='{{ route("making_now.show") }}' class="card w-100 h-100">
            <img src='{{ asset("/image/sec2_image/感じ方は人それぞれ(3).jpg") }}' class="card-img" alt="...">
              <h3 class="card-title">【感じ方は人それぞれ】周りの人はどう感じているのだろう?</h3>
              <p class="card-text">
              </p>
          </a>
        </div>
      </div>

      <div class="col-md-4 item">
        <div class="card" style="margin: 10px;">
          <a href='{{ route("making_now.show") }}' class="w-100 h-100">
            <img src='{{ asset("/image/sec2_image/コミュニケーション(4).jpg")}}' class="card-img" alt="...">
              <h3 class="card-title">【よりよいコミュニケーション】いろんな方法がわかるよ</h3>
              <p class="card-text">
              </p>
          </a>
        </div>
      </div>

      <div class="col-md-4 item">
        <div class="card" style="margin: 10px;">
          <a href='{{ route("making_now.show") }}' class="w-100 h-100">
            <img src='{{ asset("/image/sec2_image/ストレスダメージ(5).jpg")}}' class="card-img" alt="...">
              <h3 class="card-title">【職場で生じるストレスダメージ】ココロからのシグナルを無視しないでね</h3>
              <p class="card-text">
              </p>
          </a>
        </div>
      </div>

      <div class="col-md-4 item">
        <div class="card" style="margin: 10px;">
          <a href='{{ route("making_now.show") }}' class="w-100 h-100">
            <img src='{{ asset("/image/sec2_image/周りのためにできること(6).jpg")}}' class="card-img" alt="...">
              <h3 class="card-title">【周りのためにできること】あなたのできることをしてあげましょう</h3>
              <p class="card-text">
              </p>
          </a>
        </div>
      </div>

      <div class="col-md-4 item">
        <div class="card" style="margin: 10px;">
          <a href='{{ route("making_now.show") }}' class="w-100 h-100">
            <img src='{{ asset("/image/sec2_image/仕事によるストレス(7).jpg")}}' class="card-img" alt="...">
              <h3 class="card-title">【仕事によるストレス】あぁ～こんなことあるある...</h3>
              <p class="card-text">
              </p>
          </a>
        </div>
      </div>

      <div class="col-md-4 item">
        <div class="card" style="margin: 10px;">
          <a href='{{ route("making_now.show") }}' class="w-100 h-100">
            <img src='{{ asset("/image/sec2_image/脳の中で起きていること(8).jpg")}}' class="card-img" alt="...">
              <h3 class="card-title">【脳の中で起きていること】目で見あないけど、実際起きてるよ</h3>
              <p class="card-text">
              </p>
          </a>
        </div>
      </div>

      <div class="col-md-4 item">
        <div class="card" style="margin: 10px;">
          <a href='{{ route("making_now.show") }}' class="w-100 h-100">
            <img src='{{ asset("/image/製作中ページ.jpg") }}' class="card-img" alt="...">
              <h3 class="card-title">【準備中】ちょっと待っててね</h3>
              <p class="card-text">
              </p>
          </a>
        </div>
      </div>

      <div class="w-100" style="height: 50px;">
      </div>

      {{-- <!--@endfor --> --}}
    </div>
  </div>
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