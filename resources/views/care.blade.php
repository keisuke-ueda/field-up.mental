@extends('layouts.common')
<meta name="description" content="オンラインメンタルカウンセリング、仕事や人間関係のお悩み相談や、キャリアアップのカウンセリングなど多くのお悩みに対応が可能。是非一度お試しください。">
@section('content')
<div id="care" class="pb-5">
  <div class="container">

    <div class="col-7 page-title pt-5 d-block mx-auto">
      <h1 class="text-center f1 pt-3 mb-3">ケアメニュー</h1>
      <p class="text-center text01">先ずは相談してください</p>
    </div>

    <div class="card01 m-5">
      <p class="text01">　<b>聴くプロ</b>という資格を持ったカウンセラーとして多くの職種や年齢層の方のご相談をお受けしてきました。
        <br>　皆さんの悩みはどれも特別で、簡単には解決できなさそうなモノばかりです。
        <br>　だからこそ、<b>きちんと資格を持ったカウンセラー</b>が必要になります。
        <br>　コチラのサイトから相談の予約が取れます。
      </p>
      <p class="text-center">
        <a href="https://www.street-academy.com/onetime/services/2949" target="_blank" rel="noopener noreferrer"><strong>→予約はこちらから</strong></a>
      </p>
      <img src='{{ asset("/image/mental.jpg")}}' class="mt-4 link d-block mx-auto" alt="夢分析解説" style="width:70%;">
      
    </div>
    
    <div class="row">
      <div class="col-6">
        <!-- <a href="{{ route('chat_care.login') }}"></a> -->
        <p class="text-center bg-light">チャットページ</p>
        <img src='{{ asset("/image/製作中ページ.jpg") }}' class="card-img d-block mx-auto" alt="開設準備中" style="width: 50%;">
      </div>

      <div class="col-6">
        <p class="text-center bg-light">チャット予約ページ</p>
        <img src='{{ asset("/image/製作中ページ.jpg") }}' class="card-img d-block mx-auto" alt="開設準備中" style="width: 50%;">
      </div>

    </div>
  </div>
  
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<img src='{{ asset("/image/foam1.png")}}' class="foam01" alt="泡1" style="width:20%;">
<img src='{{ asset("/image/foam2.png")}}' class="foam02" alt="泡2" style="width:20%;">
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
ケアメニュー
@endsection