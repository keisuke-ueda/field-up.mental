@extends('layouts.common')
<meta name="description" content="心理学をもっと身近に感じてもらいたいというのが私たちの願いです。近年ストレスを感じている方がとても多い中でField-UPはそんなメンタルの問題に立ち向かっていきます。">
@section('content')
<div id="introduction">
  <div class="container">
    
    <h1 class="text-center f1 pt-3">心理事業紹介</h1>

    <div class="col-12 justify-content-center mx-auto">
      <img src='{{ asset("/image/事業デザイン.png") }}' alt="Field-UP心理事業紹介" class="col-12 mt-2 mb-2">
    </div>

    <h2 class="text-center f1">サービス紹介</h2>

    <div class="row flexbox">

      <h3 class="f3 text-center mt-4">メンタルヘルス関連業<br>(カウンセリングなど)</h3>
      <div class="card01 rounded p-3">
        <p class="text01">仕事の悩みから私生活の悩みまでご相談に乗ります<br>
        今の辛い気持ちを一緒に解消しましょう</p>
      </div>

      <h3 class="f3 text-center mt-4">健康予防に関する<br>情報の提供</h3>
      <div class="card01 rounded p-3">
        <p class="text01">予防の知識が意外と普及しきっていない現代<br>
        健康予防管理専門士、予防医学の知識を持った専門家が<br>
        健康の本質をお教えします</p>
      </div>

      <h3 class="f3 text-center mt-4">仕事で使える<br>心理ノウハウ提供</h3>
      <div class="card01 rounded p-3">
        <p class="text01">仕事の失敗を引きずってしまう<br>
        思った通りのパフォーマンスをすることができない<br>
        メンタルコントールさえできれば<br>
        あなたの本当の力を発揮することができます<br>
        心の仕組みを日本とアメリカ2つのカレッジを出た講師が教えます</p>
      </div>

      <h3 class="f3 text-center mt-4">ミニセミナー<br>コンテンツ公開</h3>
      <div class="card01 rounded p-3">

        <p class="text01">会社の教育プログラムの一環や、オンライン講座<br>
      アニメーション風の動画の投稿や、さらには今はやりのVRの導入も!?<br>
      時代に合わせたコンテンツや、セミナーをどんどん公開していきます!!</p>
      </div>


    <div class="row flexbox mt-5 mb-4">
      <h2 class="text-center f1 text-center">会社情報</h2>
      <div class="col-8 justify-content-center mx-auto rounded">
        <div class="rounded card01">
          <p class="text-center text01 p-3">会社名：Field-UP
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
@endsection

@section('js')

@endsection

@section('js_bottom')

@endsection

@section('title')
心理事業紹介|Field-UP 心理事業
@endsection