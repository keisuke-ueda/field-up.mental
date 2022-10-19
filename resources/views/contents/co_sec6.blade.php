@extends('layouts.common')
<meta name="description" content="心理学は意外と身近なものに隠れています。タロットカードや、占い。心理テストや、デザインなんかにも実は心理学が多く使われています。仕事で心理学を駆使して成功している方も多くいます。あなたも心理学を日常生活や、仕事に生かしてみませんか？遊びの中で学んでいきましょう。">
@section('content')
<div id="mental_care_contents">
  <div class="container">
    <div class="row mx-auto">
      <div class="col-md-7 page-title pt-5 pb-3 d-block mx-auto">
        <h1 class="text-center"><br class="br-sp"/>遊びと心理</h1>
        <p class="text-center text01">身近なものに心理学は多く隠れています<br>
        日常的に触れているものが実は人の心を映し出す鏡だったとしると<br>
        ちょっと毎日が楽しくなるかも♪</p>
      </div>
    </div>

    <div class="row">

      <div class="col-md-4 item mb-5">
        <div class="card p-3">
          <a href='{{ route("contents_sec.select", ["page_number"=>601])}}' class="w-100 h-100">
            <img src='{{ asset("/image/sec6_image/色とイメージ(1).jpg")}}' class="card-img" alt="色とイメージ">
            <h3 class="card-title">【色とイメージ】みんなは色にどんなイメージを持っていますか？</h3>
          </a>
        </div>
      </div>
      
      <div class="col-md-4 item mb-5">
        <div class="card p-3">
          <a href='{{ route("contents_sec.select", ["page_number"=>602])}}' class="w-100 h-100">
            <img src='{{ asset("/image/sec6_image/色と理論(2).jpg")}}' class="card-img" alt="色と理論">
              <h3 class="card-title">【色と理論】普段使っている色の使いかを見直してみよう</h3>
              <p class="card-text">
              </p>
          </a>
        </div>
      </div>

      <div class="col-md-4 item mb-5">
        <div class="card p-3">
        <a href='{{ route("contents_sec.select", ["page_number"=>603])}}' class="w-100 h-100">
            <img src='{{ asset("/image/sec6_image/色とデザイン(3).jpg")}}' class="card-img" alt="色とデザイン">
              <h3 class="card-title">【色とデザイン】デザインて実は心理学なんですよ♪♪</h3>
              <p class="card-text">
              </p>
          </a>
        </div>
      </div>

      <div class="col-md-4 item mb-5">
        <div class="card p-3">
          <a href='{{ route("making_now.show") }}' class="w-100 h-100">
            <img src='{{ asset("/image/製作中ページ.jpg") }}' class="card-img" alt="開設準備中">
              <h3 class="card-title">【準備中】ちょっと待っててね</h3>
              <p class="card-text">
              </p>
          </a>
        </div>
      </div>

      <div class="col-md-4 item mb-5">
        <div class="card p-3">
          <a href='{{ route("making_now.show") }}' class="w-100 h-100">
            <img src='{{ asset("/image/製作中ページ.jpg") }}' class="card-img" alt="開設準備中">
              <h3 class="card-title">【準備中】ちょっと待っててね</h3>
              <p class="card-text">
              </p>
          </a>
        </div>
      </div>

      <div class="col-md-4 item mb-5">
        <div class="card p-3">
          <a href='{{ route("making_now.show") }}' class="w-100 h-100">
            <img src='{{ asset("/image/製作中ページ.jpg") }}' class="card-img" alt="開設準備中">
              <h3 class="card-title">【準備中】ちょっと待っててね</h3>
              <p class="card-text">
              </p>
          </a>
        </div>
      </div>

      <div class="col-md-4 item mb-5">
        <div class="card p-3">
          <a href='{{ route("making_now.show") }}' class="w-100 h-100">
            <img src='{{ asset("/image/製作中ページ.jpg") }}' class="card-img" alt="開設準備中">
              <h3 class="card-title">【準備中】ちょっと待っててね</h3>
              <p class="card-text">
              </p>
          </a>
        </div>
      </div>

      <div class="col-md-4 item mb-5">
        <div class="card p-3">
          <a href='{{ route("making_now.show") }}' class="w-100 h-100">
            <img src='{{ asset("/image/製作中ページ.jpg") }}' class="card-img" alt="開設準備中">
              <h3 class="card-title">【準備中】ちょっと待っててね</h3>
              <p class="card-text">
              </p>
          </a>
        </div>
      </div>

      <div class="col-md-4 item mb-5">
        <div class="card p-3">
          <a href='{{ route("making_now.show") }}' class="w-100 h-100">
            <img src='{{ asset("/image/製作中ページ.jpg") }}' class="card-img" alt="開設準備中">
              <h3 class="card-title">【準備中】ちょっと待っててね</h3>
              <p class="card-text">
              </p>
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
遊びと心理|Field-UP 心理事業
@endsection