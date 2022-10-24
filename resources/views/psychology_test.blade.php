@extends('layouts.common')
<meta name="description" content="皆さんは心理テストは好きですか？世の中にはいろんな心理テストがあります。このページではそんな心理テストをいくつか紹介していきますので、試してみて下さい。">
@section('content')
<div id="psychology_test">
  <div class="row justify-content-center mx-auto">
    <div class="col-7 page-title mt-3 pb-3">
      <h1 class="text-center f1">心理テスト</h1>
      <p class="text-center text01">手軽に心理テストができちゃう<br>どんな結果が出るかな？</p>
    </div>
  </div>

  <div class="container pb-5">
    <div class="row"> 
      <!--{{-- @for ($i = 0; $i < 3; $i++) --}}-->
      <div class="col-md-4 item">
        <div class="card" style="margin: 10px;">
          <a href='psychology_test/egogram' class="w-100 h-100">
            <img src='{{ asset("/image/psychology_test_img/心理テスト(エゴグラム).jpg") }}' class="card-img" alt="エゴグラム">
            <h3 class="card-title">【エゴグラム】あなたはどんな特性があるのかな？</h3>
          </a>
        </div>
      </div>

      <div class="col-md-4 item">
        <div class="card" style="margin: 10px;">
          <a href='psychology_test/dream_analysis' class="w-100 h-100">
            <img src='{{ asset("/image/psychology_test_img/夢分析.jpg") }}' class="card-img" alt="夢分析ページ">
            <h3 class="card-title">【夢分析】その日見た夢にあなたの心が映る!?</h3>
          </a>
        </div>
      </div>

      <div class="col-md-4 item">
        <div class="card" style="margin: 10px;">
          <a href='making_now' class="w-100 h-100">
            <img src='{{ asset("/image/psychology_test_img/製作中ページ.jpg") }}' class="card-img" alt="開設準備中">
            <h3 class="card-title">【準備中】ちょっと待っててね</h3>
          </a>
        </div>
      </div>

      <div class="col-md-4 item">
        <div class="card" style="margin: 10px;">
          <a href='making_now' class="w-100 h-100">
            <img src='{{ asset("/image/psychology_test_img/製作中ページ.jpg") }}' class="card-img" alt="開設準備中">
            <h3 class="card-title">【準備中】ちょっと待っててね</h3>
          </a>
        </div>
      </div>

      <div class="col-md-4 item">
        <div class="card" style="margin: 10px;">
          <a href='making_now' class="w-100 h-100">
            <img src='{{ asset("/image/psychology_test_img/製作中ページ.jpg") }}' class="card-img" alt="開設準備中">
            <h3 class="card-title">【準備中】ちょっと待っててね</h3>
          </a>
        </div>
      </div>

      <div class="col-md-4 item">
        <div class="card" style="margin: 10px;">
          <a href='making_now' class="w-100 h-100">
            <img src='{{ asset("/image/psychology_test_img/製作中ページ.jpg") }}' class="card-img" alt="開設準備中">
            <h3 class="card-title">【準備中】ちょっと待っててね</h3>
          </a>
        </div>
      </div>

      <div class="col-md-4 item">
        <div class="card" style="margin: 10px;">
          <a href='making_now' class="w-100 h-100">
            <img src='{{ asset("/image/psychology_test_img/製作中ページ.jpg") }}' class="card-img" alt="開設準備中">
            <h3 class="card-title">【準備中】ちょっと待っててね</h3>
          </a>
        </div>
      </div>

      <div class="col-md-4 item">
        <div class="card" style="margin: 10px;">
          <a href='making_now' class="w-100 h-100">
            <img src='{{ asset("/image/psychology_test_img/製作中ページ.jpg") }}' class="card-img" alt="開設準備中">
            <h3 class="card-title">【準備中】ちょっと待っててね</h3>
          </a>
        </div>
      </div>

      <div class="col-md-4 item">
        <div class="card" style="margin: 10px;">
          <a href='making_now' class="w-100 h-100">
            <img src='{{ asset("/image/psychology_test_img/製作中ページ.jpg") }}' class="card-img" alt="開設準備中">
            <h3 class="card-title">【準備中】ちょっと待っててね</h3>
          </a>
        </div>
      </div>

      <!--{{-- @endfor --}}-->
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

@section('title')
心理テスト|Field-UP 心理事業
@endsection