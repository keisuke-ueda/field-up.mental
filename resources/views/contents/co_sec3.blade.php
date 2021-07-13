@extends('layouts.common')

@section('content')
<div id="mental_care_contents">
  <div class="row justify-content-center container mx-auto">
    <div class="col-md-7 page_title mt-5 pb-3">
      <h1 class="text-center"><br class="br-sp"/>ココロとカラダ</h1>
      <p class="text-center">テキストテキスト</p>
    </div>
  </div>

  <div class="container">
    <div class="row">

      <div class="col-md-4 item mb-5">
        <div class="card" style="margin: 10px;">
          <a href='{{ route("contents_sec.select", ["page_number"=>301])}}' class="w-100 h-100">
            <img src='{{ asset("/image/sec3_image/導入編(1).jpg") }}' class="card-img" alt="...">
            <h3 class="card-title">【導入編】基礎知識の解説だよ</h3>
          </a>
        </div>
      </div>
      
      <div class="col-md-4 item mb-5">
        <div class="card" style="margin: 10px;">
          <a href='{{ route("contents_sec.select", ["page_number"=>302])}}' class="w-100 h-100">
            <img src='{{ asset("/image/sec3_image/高血圧(2).jpg")}}' class="card-img" alt="...">
            <h3 class="card-title">【好きなものを食べられないときのストレス(高血圧)】高血圧ってこうやってなるんだぁ...</h3>
          </a>
        </div>
      </div>

      <div class="d-md-none" style="height: 50px;">
      </div>

      <div class="col-md-4 item mb-5">
        <div class="card" style="margin: 10px;">
          <a href='{{ route("contents_sec.select", ["page_number"=>303])}}' class="w-100 h-100">
            <img src='{{ asset("/image/sec3_image/脳と神経(3).jpg") }}' class="card-img" alt="...">
            <h3 class="card-title">【カラダを動かさないとココロも動かない(脳と神経)】脳ってすごいっ!!</h3>
          </a>
        </div>
      </div>

      <div class="col-md-4 item mb-5">
        <div class="card" style="margin: 10px;">
          <a href='{{ route("contents_sec.select", ["page_number"=>304])}}' class="w-100 h-100">
            <img src='{{ asset("/image/sec3_image/ダイエット(4).jpg")}}' class="card-img" alt="...">
            <h3 class="card-title">【好きなものを食べられないときのストレス(ダイエット)】美味しいものをいっぱい食べたいっ!!</h3>
          </a>
        </div>
      </div>

      <div class="col-md-4 item mb-5">
        <div class="card" style="margin: 10px;">
          <a href='{{ route("contents_sec.select", ["page_number"=>305])}}' class="w-100 h-100">
            <img src='{{ asset("/image/sec3_image/迷走神経とリラックス(5).jpg")}}' class="card-img" alt="...">
            <h3 class="card-title">【カラダを動かさないとココロも動かなかい(迷走神経とリラックス)】ゆっくり休憩♪</h3>
          </a>
        </div>
      </div>

      <div class="col-md-4 item mb-5">
        <div class="card" style="margin: 10px;">
          <a href='{{ route("contents_sec.select", ["page_number"=>306])}}' class="w-100 h-100">
            <img src='{{ asset("/image/sec3_image/高血糖(6).jpg")}}' class="card-img" alt="...">
            <h3 class="card-title">【好きなものを食べられないときのストレス(高血糖)】甘いもの大好き!!</h3>
          </a>
        </div>
      </div>

      <div class="col-md-4 item mb-5">
        <div class="card" style="margin: 10px;">
          <a href='{{ route("contents_sec.select", ["page_number"=>307])}}' class="w-100 h-100">
            <img src='{{ asset("/image/sec3_image/若々しい(7).jpg")}}' class="card-img" alt="...">
            <h3 class="card-title">【カラダを動かさないとココロも動かない(若々しいカラダづくり)】綺麗な肌には秘密がある</h3>
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