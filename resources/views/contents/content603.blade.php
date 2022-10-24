@extends('layouts.common')
<meta name="description" content="デザインをするうえで色選びはとても大事です。目にぱっと飛び込んでくるのは形もそうですが色の印象がかなり大きいです。綺麗な色だからといって組み合わせによっては合わないことだってあります。どんな色の相性がいいのかを見てみましょう。">
@section('content')
<div id="mental_care_contents">
  <div class="row justify-content-center container mx-auto">
    <div class="col-md-7 page-title  mt-5 pb-3">
      <h1 class="text-center">色とデザイン</h1>
    </div>
  </div>

  <div class="row justify-content-center container mx-auto">
    <div class="col-md-10 item content-lead-text m-3 pb-3">
      <p>色のデザインが難しい<br>
        そう感じたことはありませんか？<br>
        デザインテクニックも大事ですが、色がそもそもどうやって見えているかがわかると<br>
        表現力が一気に上がりますよ</p>
    </div>

    <div class="col-md-10 item text-center youtube mb-5">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/irNc_pR_eKU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <div class="container row flexbox">
      <div class="col-6 mb-3 box1">
        <img class="d-block mx-auto" alt="色とデザイン1" src="{{ asset('image/contents_img/content603/1-1.jpg')}}" style="width:100%;"/>
      </div>

      <div class="col-6 mb-3 box2">
        <img class="d-block mx-auto" alt="色とデザイン2" src="{{ asset('image/contents_img/content603/1-2.jpg')}}" style="width:100%;"/>
      </div>

      <div class="col-6 mb-3 box1">
        <img class="d-block mx-auto" alt="色とデザイン3" src="{{ asset('image/contents_img/content603/1-3.jpg')}}" style="width:100%;"/>
      </div>

      <div class="col-6 mb-3 box2">
        <img class="d-block mx-auto" alt="色とデザイン4" src="{{ asset('image/contents_img/content603/1-4.jpg')}}" style="width:100%;"/>
      </div>
    </div>

  </div>

</div>
@endsection

@section('js')
@endsection

@section('title')
色とデザイン|Field-UP 心理事業
@endsection