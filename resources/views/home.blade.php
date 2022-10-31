@extends('layouts.common')
<meta name="description" content="フィールドアップ。東京都で、メンタルヘルスや、心理カウンセリングを初め様々なメンタルにかかわるサービスを行っています。さらに健康予防や、脳力向上のための方法などもレクチャーしています。悩みや不安を感じている方は是非一度お問い合わせ下さい。オンラインや、メールカウンセリングなども実施しております。">
@section('content')
<div id="home" class="pb-4">
  <div class="container">

    <div class="row">
      <div class="col-md-12 mt-5 mb-2">
        <h2 class="f1 text-center">心理学って面白い!!<br>
        前に向かって一緒に進んでいこう!!</h2>
      </div>
    </div>

      <video src='{{ asset("/image/mental_site.mp4")}}' muted autoplay playsinline loop style="width: 100%;"></video>
    
    <div class="row flexbox">
      <div class="col-6 d-block mx-auto box1">
        <a href="{{ route('psychology_test.show') }}"><img src='{{ asset("/image/サイトページ心理テストrev1.png")}}' class="mt-4 link d-block mx-auto" alt="心理テスト" style="width:100%;"><h2 class="text-center f2">↑あなたはどんな結果かな？</h2></a>
      </div>
      <div class="col-6 d-block mx-auto box2">
        <a href="{{ route('contents_list.show') }}"><img src='{{ asset("/image/サイトページ画像コンテンツrev1.png")}}' class="mt-4 link d-block mx-auto" alt="メンタルコンテンツ" style="width:100%;"><h2 class="text-center f2">↑ためになる動画が盛りだくさん♪</h2></a>
      </div>
      <div class="col-6 d-block mx-auto box1">
      <img src='{{ asset("/image/psychology_test_img/製作中ページ.jpg") }}' class="card-img d-block mx-auto" alt="開設準備中" style="width: 60%;">
      </div>
      <div class="col-6 d-block mx-auto box2">
        <a href="{{ route('contacts_faq.show') }}"><img src='{{ asset("/image/サイトページ画像お問合せFAQrev1.png")}}' class="mt-4 link d-block mx-auto" alt="お問い合わせ" style="width:100%;"><h2 class="text-center f2">↑気軽に相談してください</h2></a>
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

@section('title')
Field-UP|心理カウンセリング・メンタルヘルス
@endsection