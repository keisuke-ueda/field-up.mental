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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<img src='{{ asset("/image/foam1.png")}}' class="foam01" alt="泡1" style="width:20%;">
<img src='{{ asset("/image/foam2.png")}}' class="foam02" alt="泡2" style="width:30%;">
<img src='{{ asset("/image/foam3.png")}}' class="foam03" alt="泡3" style="width:30%;">
<img src='{{ asset("/image/foam4.png")}}' class="foam04" alt="泡4" style="width:15%;">
<img src='{{ asset("/image/foam1.png")}}' class="foam05" alt="泡1" style="width:10%;">
<img src='{{ asset("/image/foam2.png")}}' class="foam06" alt="泡2" style="width:15%;">
<img src='{{ asset("/image/foam3.png")}}' class="foam07" alt="泡3" style="width:20%;">
<img src='{{ asset("/image/foam4.png")}}' class="foam08" alt="泡4" style="width:20%;">

<script>
  window.addEventListener('load', (event) => {
    var foam01 = $('.foam01');
    var foam02 = $('.foam02');
    var foam03 = $('.foam03');
    var foam04 = $('.foam04');
    var foam05 = $('.foam05');
    var foam06 = $('.foam06');
    var foam07 = $('.foam07');
    var foam08 = $('.foam08');

    var scroll_y = window.scrollY;
    window.addEventListener('scroll', (event) => {
      var scroll_y = window.scrollY;
      console.log(scroll_y);
      foam01.stop().animate({
        'bottom': scroll_y + 100
        }, 300); 
      foam02.stop().animate({
        'bottom': scroll_y * 2 - 50
        }, 300); 
      foam03.stop().animate({
        'bottom': scroll_y * 0.65 - 250
        }, 300);      
      foam04.stop().animate({
        'bottom': scroll_y * 2 - 350
        }, 300); 
      foam05.stop().animate({
        'bottom': scroll_y * 0.5 - 450
        }, 300); 
      foam06.stop().animate({
        'bottom': scroll_y * 0.4 - 550
        }, 300); 
      foam07.stop().animate({
        'bottom': scroll_y * 0.8 - 650
        }, 300); 
      foam08.stop().animate({
        'bottom': scroll_y * 1 - 750
        }, 300); 
    });
  });
</script>


@endsection

@section('js')
@endsection

@section('bg_img')
test_cont.jpg
@endsection

@section('title')
遊びと心理|Field-UP 心理事業
@endsection