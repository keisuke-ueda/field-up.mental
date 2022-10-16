@extends('layouts.common')
<meta name="description" content="メンタルヘルや、心理カウンセリングを初め様々なメンタルにかかわるサービスを行っています。さらに健康予防や、脳力向上のための方法などもレクチャーしています。悩みや不安を感じている方は是非一度お問い合わせ下さい。オンラインや、メールカウンセリングなども実施しております。">
@section('content')
<div id="home">
  <div class="container-fruid">

<div class="row">
  <div class="col-md-12 mt-5 mb-5">
    <h2 class="f1 text-center">心理学って面白い!!<br>
    前に向かって一緒に進んでいこう!!</h2>
  </div>
</div>

<div class="row">
    <div class="container">
      <video src='{{ asset("/image/OP_rev1.mp4")}}' controls muted autoplay playsinline loop style="width: 100%;"></video>
      <a class ="link" href="{{ route('psychology_test.show') }}"><img src='{{ asset("/image/サイトページ心理テストrev1.png")}}' class="card-img mt-5 d-block mx-auto img-fluid" alt="心理テスト" style="width: 80%;"></a>
      <a class ="link" href="{{ route('contents_list.show') }}"><img src='{{ asset("/image/サイトページ画像コンテンツrev1.png")}}' class="card-img mt-5 d-block mx-auto img-fluid" alt="メンタルコンテンツ" style="width: 80%;"></a>
      <a class ="link" href="{{ route('contacts_faq.show') }}"><img src='{{ asset("/image/サイトページ画像お問合せFAQrev1.png")}}' class="card-img mt-5 mb-5 d-block mx-auto img-fluid" alt="お問い合わせ" style="width: 80%;"></a>
    </div>
  </div>
</div>

@endsection

@section('js')
@endsection

@section('title')
Field-UP|心理カウンセリング・メンタルヘルス
@endsection