@extends('layouts.common')
<meta name="description" content="体調が悪いのはもしかしたらメンタルが関わっているかもしれません。体調が悪くなるとココロも落ち込みますが、ココロが落ち込んでいると体調が悪くなることだってあるのです。そんな心身症になる前にきちんとケアをしましょう。">
@section('content')
<div id="mental_care_contents">
  <div class="container">
    <div class="row mx-auto">
      <div class="col-md-7 page-title pt-5 pb-3 d-block mx-auto">
        <h1 class="text-center"><br class="br-sp"/>ココロとカラダ</h1>
        <p class="text-center text01">最近なんだか調子がよくない...<br>
        疲れやすいし、気持ちが沈んでなんだか嫌だ<br>
        もしかしたらそれ、メンタルが原因かも!?</p>
      </div>
    </div>
  
    <div class="row">

      <div class="col-md-4 item mb-5">
        <div class="card p-3">
          <a href='{{ route("contents_sec.select", ["page_number"=>301])}}' class="w-100 h-100">
            <img src='{{ asset("/image/sec3_image/導入編(1).jpg") }}' class="card-img" alt="ココロとカラダ基礎">
            <h3 class="card-title">【導入編】基礎知識の解説だよ</h3>
          </a>
        </div>
      </div>
      
      <div class="col-md-4 item mb-5">
        <div class="card p-3">
          <a href='{{ route("contents_sec.select", ["page_number"=>302])}}' class="w-100 h-100">
            <img src='{{ asset("/image/sec3_image/高血圧(2).jpg")}}' class="card-img" alt="高血圧">
            <h3 class="card-title">【好きなものを食べられないときのストレス(高血圧)】高血圧ってこうやってなるんだぁ...</h3>
          </a>
        </div>
      </div>

      <div class="d-md-none" style="height: 50px;">
      </div>

      <div class="col-md-4 item mb-5">
        <div class="card p-3">
          <a href='{{ route("contents_sec.select", ["page_number"=>303])}}' class="w-100 h-100">
            <img src='{{ asset("/image/sec3_image/脳と神経(3).jpg") }}' class="card-img" alt="脳と神経">
            <h3 class="card-title">【カラダを動かさないとココロも動かない(脳と神経)】脳ってすごいっ!!</h3>
          </a>
        </div>
      </div>

      <div class="col-md-4 item mb-5">
        <div class="card p-3">
          <a href='{{ route("contents_sec.select", ["page_number"=>304])}}' class="w-100 h-100">
            <img src='{{ asset("/image/sec3_image/ダイエット(4).jpg")}}' class="card-img" alt="ダイエットのストレス">
            <h3 class="card-title">【好きなものを食べられないときのストレス(ダイエット)】美味しいものをいっぱい食べたいっ!!</h3>
          </a>
        </div>
      </div>

      <div class="col-md-4 item mb-5">
        <div class="card p-3">
          <a href='{{ route("contents_sec.select", ["page_number"=>305])}}' class="w-100 h-100">
            <img src='{{ asset("/image/sec3_image/迷走神経とリラックス(5).jpg")}}' class="card-img" alt="迷走神経とリラックス">
            <h3 class="card-title">【カラダを動かさないとココロも動かなかい(迷走神経とリラックス)】ゆっくり休憩♪</h3>
          </a>
        </div>
      </div>

      <div class="col-md-4 item mb-5">
        <div class="card p-3">
          <a href='{{ route("contents_sec.select", ["page_number"=>306])}}' class="w-100 h-100">
            <img src='{{ asset("/image/sec3_image/高血糖(6).jpg")}}' class="card-img" alt="高血糖">
            <h3 class="card-title">【好きなものを食べられないときのストレス(高血糖)】甘いもの大好き!!</h3>
          </a>
        </div>
      </div>

      <div class="col-md-4 item mb-5">
        <div class="card p-3">
          <a href='{{ route("making_now.show") }}' class="w-100 h-100">
            <img src='{{ asset("/image/製作中ページ.jpg") }}' class="card-img" alt="開設準備中">
            <h3 class="card-title">【準備中】ちょっと待っててね</h3>
          </a>
        </div>
      </div>

      <div class="col-md-4 item mb-5">
        <div class="card p-3">
          <a href='{{ route("making_now.show") }}' class="w-100 h-100">
            <img src='{{ asset("/image/製作中ページ.jpg") }}' class="card-img" alt="開設準備中">
            <h3 class="card-title">【準備中】ちょっと待っててね</h3>
          </a>
        </div>
      </div>

      <div class="col-md-4 item mb-5">
        <div class="card p-3">
          <a href='{{ route("making_now.show") }}' class="w-100 h-100">
            <img src='{{ asset("/image/製作中ページ.jpg") }}' class="card-img" alt="開設準備中">
            <h3 class="card-title">【準備中】ちょっと待っててね</h3>
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
ココロとカラダ|Field-UP 心理事業
@endsection