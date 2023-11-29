@extends('layouts.common')
<meta name="description" content="心理学をもっと身近に感じてもらいたいというのが私たちの願いです。近年ストレスを感じている方がとても多い中でField-UPはそんなメンタルの問題に立ち向かっていきます。">
@section('content')
<div id="introduction">
  <div class="container">
    
    <h1 class="text-center f1 pt-3 mb-3">心理事業紹介</h1>

    <div class="col-12 justify-content-center mx-auto fadeUpTrigger fade-in-up fade-in">
      <img src='{{ asset("/image/事業デザイン.png") }}' alt="Field-UP心理事業紹介" class="col-12 mt-2 mb-2">
    </div>

    <div class="row">
      <h2 class="text-center f1">代表の思い</h2>
      <div class="col-md-8 fadeUpTrigger fade-in-up fade-in">
        <div class="card01 rounded p-3 text01">
          <p>メンタルは何事においてもとても大事です。<br>
          自分本来の力を出すためには、安定したメンタルがとても大事です。</p>
          <p>メンタルが不安定というだけで、本来の力が発揮できないだけでなく、次の挑戦の機械すら失ってしまいます。<br>
          それは決して、その人が弱いからというわけではありません。メンタルの強度は人それぞれで、そこに良し悪しはありません。</p>
          <p>ダメージに対して耐えられるということだけが強さではありません。一度落ちてしまってもまた回復できるための早さもまた強さです。心の強さというのは人それぞれで色んな形があります。</p>
          <p>あなたなりの【心の強さ】や【メンタルの保ち方】を一緒に見つけてみませんか？</p>
          <p>Field-UPはそんな方たちを応援しています。</p>
        </div>
      </div>
      <div class="col-md-4 fadeUpTrigger fade-in-up fade-in">
      <img src='{{ asset("/image/ceo1.jpg") }}' alt="Field-UP 代表上田敬介" class="col-12 mt-2 mb-2">
      </div>
    </div>

    <h2 class="text-center f1">サービス紹介</h2>

    <div class="row flexbox">
      <div class="col-md-6 fadeUpTrigger fade-in-up fade-in">
        <h3 class="f3 text-center mt-4">メンタルヘルス関連業<br>(カウンセリングなど)</h3>
        <div class="card01 rounded p-3">
          <p class="text01">仕事の悩みから私生活の悩みまでご相談に乗ります<br>
          今の辛い気持ちを一緒に解消しましょう</p>
        </div>
      </div>
      <div class="col-md-6 fadeUpTrigger fade-in-up fade-in">
        <h3 class="f3 text-center mt-4">健康予防に関する<br>情報の提供</h3>
        <div class="card01 rounded p-3">
          <p class="text01">予防の知識が意外と普及しきっていない現代<br>
          健康予防管理専門士、予防医学の知識を持った専門家が<br>
          健康の本質をお教えします</p>
        </div>
      </div>
    </div>
    <div class="row flexbox">
      <div class="col-md-6 fadeUpTrigger fade-in-up fade-in">
        <h3 class="f3 text-center mt-4">仕事で使える<br>心理ノウハウ提供</h3>
        <div class="card01 rounded p-3">
          <p class="text01">仕事の失敗を引きずってしまう<br>
          思った通りのパフォーマンスをすることができない<br>
          メンタルコントールさえできれば<br>
          あなたの本当の力を発揮することができます<br>
          心の仕組みを日本とアメリカ2つのカレッジを出た講師が教えます</p>
        </div>
      </div>
      <div class="col-md-6 fadeUpTrigger fade-in-up fade-in">
        <h3 class="f3 text-center mt-4">ミニセミナー<br>コンテンツ公開</h3>
        <div class="card01 rounded p-3">

          <p class="text01">会社の教育プログラムの一環や、オンライン講座<br>
        アニメーション風の動画の投稿や、さらには今はやりのVRの導入も!?<br>
        時代に合わせたコンテンツや、セミナーをどんどん公開していきます!!</p>
        </div>
      </div>
    </div>

    <div class="row flexbox mt-5 pb-5">
      <h2 class="text-center f1 text-center">会社情報</h2>
      <div class="col-8 justify-content-center mx-auto rounded fadeUpTrigger fade-in-up fade-in">
        <div class="rounded card01 mb-4">
          <p class="text-center text01">会社名：Field-UP
            <br>所在地：〒114-0011 東京都北区昭和町1-4-7
            <br>代表者名：上田　敬介
            <br>設立年月日：2020年6月1日
            <br>従業員数：1名
          </p>
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

@section('js_bottom')

@endsection

@section('title')
心理事業紹介|Field-UP 心理事業
@endsection