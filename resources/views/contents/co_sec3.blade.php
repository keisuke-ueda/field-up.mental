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
@endsection

@section('js')
@endsection

@section('bg_img')
test_cont.jpg
@endsection

@section('title')
ココロとカラダ|Field-UP 心理事業
@endsection