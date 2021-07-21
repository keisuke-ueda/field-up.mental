@extends('layouts.common')

@section('content')
<div id="mental_care_contents">
  <div class="row justify-content-center container mx-auto">
    <div class="col-md-7 page-title mt-5 pb-3">
      <h1 class="text-center"><br class="br-sp"/>ストレスと心理</h1>
      <p class="text-center">ストレスフリーな生活をしたい!!<br>
      そんな人は多いのではないですか？<br>
      どんなことがストレスになるかがわかれば、対策が見えてきますよ</p>
    </div>
  </div>

  <div class="container">
    <div class="row">

      <div class="col-md-4 item mb-5">
        <div class="card" style="margin: 10px;">
          <a href='{{ route("contents_sec.select", ["page_number"=>201])}}' class="w-100 h-100">
            <img src='{{ asset("/image/sec2_image/ストレスとは(1).jpg") }}' class="card-img" alt="...">
            <h3 class="card-title">【ストレスとは】ストレスの正体ってなんだろう？</h3>
          </a>
        </div>
      </div>
      
      <div class="col-md-4 item mb-5">
        <div class="card" style="margin: 10px;">
          <a href='{{ route("contents_sec.select", ["page_number"=>202])}}' class="w-100 h-100">
            <img src='{{ asset("/image/sec2_image/不安とは何か(2).jpg")}}' class="card-img" alt="...">
            <h3 class="card-title">【不安とは何か】不安の正体がわかるよ</h3>
          </a>
        </div>
      </div>

      <div class="col-md-4 item mb-5">
        <div class="card" style="margin: 10px;">
          <a href='{{ route("contents_sec.select", ["page_number"=>203])}}' class="w-100 h-100">
            <img src='{{ asset("/image/sec2_image/感じ方は人それぞれ(3).jpg") }}' class="card-img" alt="...">
            <h3 class="card-title">【感じ方は人それぞれ】周りの人はどう感じているのだろう?</h3>
          </a>
        </div>
      </div>

      <div class="col-md-4 item mb-5">
        <div class="card" style="margin: 10px;">
          <a href='{{ route("contents_sec.select", ["page_number"=>204])}}' class="w-100 h-100">
            <img src='{{ asset("/image/sec2_image/コミュニケーション(4).jpg")}}' class="card-img" alt="...">
            <h3 class="card-title">【よりよいコミュニケーション】いろんな方法がわかるよ</h3>
          </a>
        </div>
      </div>

      <div class="col-md-4 item mb-5">
        <div class="card" style="margin: 10px;">
          <a href='{{ route("contents_sec.select", ["page_number"=>205])}}' class="w-100 h-100">
            <img src='{{ asset("/image/sec2_image/ストレスダメージ(5).jpg")}}' class="card-img" alt="...">
            <h3 class="card-title">【職場で生じるストレスダメージ】ココロからのシグナルを無視しないでね</h3>
          </a>
        </div>
      </div>

      <div class="col-md-4 item mb-5">
        <div class="card" style="margin: 10px;">
          <a href='{{ route("contents_sec.select", ["page_number"=>206])}}' class="w-100 h-100">
            <img src='{{ asset("/image/sec2_image/周りのためにできること(6).jpg")}}' class="card-img" alt="...">
            <h3 class="card-title">【周りのためにできること】あなたのできることをしてあげましょう</h3>
          </a>
        </div>
      </div>

      <div class="col-md-4 item mb-5">
        <div class="card" style="margin: 10px;">
          <a href='{{ route("contents_sec.select", ["page_number"=>207])}}' class="w-100 h-100">
            <img src='{{ asset("/image/sec2_image/仕事によるストレス(7).jpg")}}' class="card-img" alt="...">
            <h3 class="card-title">【仕事によるストレス】あぁ～こんなことあるある...</h3>
          </a>
        </div>
      </div>

      <div class="col-md-4 item mb-5">
        <div class="card" style="margin: 10px;">
          <a href='{{ route("making_now.show") }}' class="w-100 h-100">
            <img src='{{ asset("/image/製作中ページ.jpg") }}' class="card-img" alt="...">
              <h3 class="card-title">【準備中】ちょっと待っててね</h3>
          </a>
        </div>
      </div>

      <div class="col-md-4 item mb-5">
        <div class="card" style="margin: 10px;">
          <a href='{{ route("making_now.show") }}' class="w-100 h-100">
            <img src='{{ asset("/image/製作中ページ.jpg") }}' class="card-img" alt="...">
              <h3 class="card-title">【準備中】ちょっと待っててね</h3>
          </a>
        </div>
      </div>

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