@extends('layouts.common')
<meta name="description" content="メンタルヘルや、心理カウンセリングを初め様々なメンタルにかかわるサービスを行っています。さらに健康予防や、脳力向上のための方法などもレクチャーしています。悩みや不安を感じている方は是非一度お問い合わせ下さい。オンラインや、メールカウンセリングなども実施しております。">
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

@endsection

@section('js')
@endsection

@section('title')
Field-UP|心理カウンセリング・メンタルヘルス
@endsection