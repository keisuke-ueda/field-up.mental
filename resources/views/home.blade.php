@extends('layouts.common')
<meta name="description" content="フィールドアップ。東京都で、メンタルヘルスや、心理カウンセリングを初め様々なメンタルにかかわるサービスを行っています。さらに健康予防や、脳力向上のための方法などもレクチャーしています。悩みや不安を感じている方は是非一度お問い合わせ下さい。オンラインや、メールカウンセリングなども実施しております。">
@section('content')

<div id="home" class="pb-4">
  <video src='{{ asset("/image/mental_site.mp4")}}' muted autoplay playsinline loop style="width: 100%;"></video>
  <div class="row">
    <div class="col-md-12 mt-5 mb-2">
      <h2 class="f1 text-center">心理学って面白い!!<br>
      前に向かって一緒に進んでいこう!!</h2>
    </div>
  </div>
  <div class="mt-3 ">
    <a title="THE INNOVATOR Field-UP 上田敬介" href="https://the-innovator.jp/interviewees/ueda_keisuke/" target="_blank">
        <img src="https://the-innovator.jp/img/banner/TI_banner01.jpg" alt="Field-UP 上田敬介" class="d-block mx-auto news1"/>
    </a>
    <a title="Qualitas Plus Field-UP 上田敬介" href="https://www.qualitas-web.com/book1vgdb.html" target="_blank" class="mt-4">
      <img src="https://www.qualitas-web.com/banner/new-1-202309-m02zb.png" alt="Qualitas Plus Field-UP 上田敬介" width="350" height="240" border="0" class="d-block mx-auto mt-4"/>
    </a>
  </div>
  
  <div class="mt-4 mb-4 fadeUpTrigger fade-in-up fade-in">
    <div class="in-content">
      <h2 class="f1 top-text">心理テスト</h2>
      <div class="bg-light p-4 text-dark bg-opacity-75 top-block text01">
        <p>皆さんは心理テストは好きですか？<br><br>
        心理テストの多くは【ユング心理学】がベースになっていて、その中の【象徴】や、【元型】という考え方がとても大事になっています。<br><br>
        例えば、複数の動物の中から好きな動物を選んでくださいというテストがあったとします。その人の潜在意識、無意識下で、今の心情やあなたの特性によって選択される動物が違ってきたりもします。<br><br>
        心理テストは、その時に自身の心の状態を確認するのにとても良い指標になるので、楽しみながらチェックしてみませんか？
        </p>
      </div>
      <div class="d-flex align-items-center justify-content-center">
        <a href="{{ route('psychology_test.show') }}" class="btn btn-info text01 text-light p-2 btnripple3">
          →→簡単なテストを<br class="sp-br">やってみよう←←
        </a>
      </div>
    </div>
    <img src='{{ asset("/image/sea-4002951_1920.jpg")}}' class="context" alt="心理テスト">
  </div>

  <div class="mt-4 mb-4 fadeUpTrigger fade-in-up fade-in">
    <div class="in-content">
      <h2 class="f1 top-text">動画コンテンツ</h2>
      <div class="bg-light p-4 text-dark bg-opacity-75 top-block text01">
        <p>心理学を学んで、仕事や人間関係に生かしたいけど勉強方法が分からないし、難しい事ばかり書いてある本が多いから理解しづらい。そんな声をよく耳にします。<br><br>
        心理学はどうしても【概念】のような話が多くて、例題みたいなケースで説明してもらわないとわかりづらいことが多いです。でも、そのケースも人それぞれ違っていて中々しっくりこないものです。<br><br>
        Field-UPのYoutubeチャンネルやSNSの動画では、アニメーションやイラストを使って多くのケースを使って心理学の解説をしているので是非参考にしてみて下さい。
        </p>
      </div>
      <div class="d-flex align-items-center justify-content-center">
        <a href="{{ route('contents_list.show') }}" class="btn btn-info text01 text-light p-2 btnripple3">
        →→動画で<br class="sp-br">楽しく心理学♪←←
        </a>
      </div>
    </div>
    <img src='{{ asset("/image/macey-bundt-AVXrEyc5ViE-unsplash.jpg")}}' class="context" alt="動画コンテンツ">
  </div>

  <div class="mt-4 mb-4 fadeUpTrigger fade-in-up fade-in">
    <div class="in-content">
      <h2 class="f1 top-text">ケア・カウンセリング</h2>
      <div class="bg-light p-4 text-dark bg-opacity-75 top-block text01">
        <p>悩み事は人それぞれ様々です。本当に自分自身の悩みを分かってくれる人は、自分以外にはいないのかもしれません。<br>
        どれだけ多くのクライエントの相談を受けても、同じケースは１度もありません。それでも私たち心理カウンセラーを頼ってほしいです。<br><br>
        数多くのケースを見て、聴いてきているからこそ今までと違った角度のアドバイスや、提案などをできる事には自信があります。<br><br>
        心が疲れたときには誰かに話して、状況を整理してみるということも大事なことなので、どんなことでも気軽に相談してください。
        </p>
      </div>
      <div class="d-flex align-items-center justify-content-center">
        <a href="{{ route('care.show') }}" class="btn btn-info text01 text-light p-2 btnripple3">
        →→カウンセラーに気軽に相談←←
        </a>
      </div>
    </div>
    <img src='{{ asset("/image/chirag-saini-AtUirmlqsVE-unsplash.jpg")}}' class="context" alt="動画コンテンツ">
  </div>

  <div class="mt-4 mb-4 fadeUpTrigger fade-in-up fade-in">
    <div class="in-content">
      <h2 class="f1 top-text">お問合せ＆FAQ</h2>
      <div class="bg-light p-4 text-dark bg-opacity-75 top-block text01">
        <p>悩み事は人それぞれ様々です。本当に自分自身の悩みを分かってくれる人は、自分以外にはいないのかもしれません。<br>
        どれだけ多くのクライエントの相談を受けても、同じケースは１度もありません。それでも私たち心理カウンセラーを頼ってほしいです。<br><br>
        数多くのケースを見て、聴いてきているからこそ今までと違った角度のアドバイスや、提案などをできる事には自信があります。<br><br>
        心が疲れたときには誰かに話して、状況を整理してみるということも大事なことなので、どんなことでも気軽に相談してください。
        </p>
      </div>
      <div class="d-flex align-items-center justify-content-center">
        <a href="{{ route('contacts_faq.show') }}" class="btn btn-info text01 text-light p-2 btnripple3">
        →→なんでも聴いてね←←
        </a>
      </div>
    </div>
    <img src='{{ asset("/image/devon-janse-van-rensburg-qjIzxfkoqrI-unsplash.jpg")}}' class="context" alt="お問い合わせ">
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
      // console.log(scroll_y);
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