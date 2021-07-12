@extends('layouts.common')

@section('content')
<div id="mental_care_contents">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12" style="height: 50px;">
      </div>
      <div class="col-md-7 page_title">
        <h1 class="text-center"><br class="br-sp"/>ココロとカラダ</h1>
        <p class="text-center">テキストテキスト</p>
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
        <a href='{{ route("contents_sec.select", ["page_number"=>301])}}' class="w-100 h-100">
        {{--  <!--<a href='{{ route("contents_list.select", ["page_number"=>$i*4+1]) }}' class="w-100 h-100">--> --}}
          <img src='{{ asset("/image/sec3_image/導入編(1).jpg") }}' class="card-img" alt="...">
            <h3 class="card-title">【導入編】テキストテキスト</h3>
            <p class="card-text">
            </p>
        </a>
        </div>
      </div>
      
      <div class="col-md-4 item">
        <div class="card" style="margin: 10px;">
          <a href='{{ route("making_now.show") }}' class="w-100 h-100">
            <img src='{{ asset("/image/sec3_image/高血圧(2).jpg")}}' class="card-img" alt="...">
              <h3 class="card-title">【好きなものを食べられないときのストレス(高血圧)】テキストテキスト</h3>
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
            <img src='{{ asset("/image/sec3_image/脳と神経(3).jpg") }}' class="card-img" alt="...">
              <h3 class="card-title">【カラダを動かさないとココロも動かない(脳と神経)】テキストテキスト</h3>
              <p class="card-text">
              </p>
          </a>
        </div>
      </div>

      <div class="col-md-4 item">
        <div class="card" style="margin: 10px;">
          <a href='{{ route("making_now.show") }}' class="w-100 h-100">
            <img src='{{ asset("/image/sec3_image/ダイエット(4).jpg")}}' class="card-img" alt="...">
              <h3 class="card-title">【好きなものを食べられないときのストレス(ダイエット)】テキストテキスト</h3>
              <p class="card-text">
              </p>
          </a>
        </div>
      </div>

      <div class="col-md-4 item">
        <div class="card" style="margin: 10px;">
          <a href='{{ route("making_now.show") }}' class="w-100 h-100">
            <img src='{{ asset("/image/sec3_image/迷走神経とリラックス(5).jpg")}}' class="card-img" alt="...">
              <h3 class="card-title">【カラダを動かさないとココロも動かなかい(迷走神経とリラックス)】テキストテキスト</h3>
              <p class="card-text">
              </p>
          </a>
        </div>
      </div>

      <div class="col-md-4 item">
        <div class="card" style="margin: 10px;">
          <a href='{{ route("making_now.show") }}' class="w-100 h-100">
            <img src='{{ asset("/image/sec3_image/高血糖(6).jpg")}}' class="card-img" alt="...">
              <h3 class="card-title">【好きなものを食べられないときのストレス(高血糖)】テキストテキスト</h3>
              <p class="card-text">
              </p>
          </a>
        </div>
      </div>

      <div class="col-md-4 item">
        <div class="card" style="margin: 10px;">
          <a href='{{ route("making_now.show") }}' class="w-100 h-100">
            <img src='{{ asset("/image/sec3_image/若々しい(7).jpg")}}' class="card-img" alt="...">
              <h3 class="card-title">【カラダを動かさないとココロも動かない(若々しいカラダづくり)】テキストテキスト</h3>
              <p class="card-text">
              </p>
          </a>
        </div>
      </div>

      <div class="col-md-4 item">
        <div class="card" style="margin: 10px;">
          <a href='{{ route("making_now.show") }}' class="w-100 h-100">
            <img src='{{ asset("/image/sec3_image/製作中ページ.jpg")}}' class="card-img" alt="...">
              <h3 class="card-title">【導入編】テキストテキスト</h3>
              <p class="card-text">
              </p>
          </a>
        </div>
      </div>

      <div class="col-md-4 item">
        <div class="card" style="margin: 10px;">
          <a href='{{ route("making_now.show") }}' class="w-100 h-100">
            <img src='{{ asset("/image/sec3_image/製作中ページ.jpg")}}' class="card-img" alt="...">
              <h3 class="card-title">【導入編】テキストテキスト</h3>
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