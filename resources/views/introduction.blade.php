@extends('layouts.common')
<meta name="description" content="心理学をもっと身近に感じてもらいたいというのが私たちの願いです。近年ストレスを感じている方がとても多い中でField-UPはそんなメンタルの問題に立ち向かっていきます。">
@section('content')
<div id="introduction">

  <div class="row">
    <div class="container">
      <div class="justify-content-center mx-auto">
        <div class="col-md-12 page-title mt-5 pb-5">
          <h1 class="text-center"><br class="br-sp"/>心理事業紹介</h1>
          <div class="col-md-12 rounded" style="background-color: rgba(16, 182, 225, 0.5)">
            <img src='{{ asset("/image/事業デザイン.png") }}' alt="Field-UP心理事業紹介" class="col-md-12 mt-5 mb-5">
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="justify-content-center mx-auto">
        <div class="col-md-12 page-title pb-5">
          <h2 class="text-center h1"><br class="br-sp"/>サービス紹介</h2>
        </div>
      </div>
    </div>
  </div>

  <div class="row justify-content-center">
      <div class="col-md-5 item rounded m-5 p-5" style="background-color: rgba(255, 255, 255, 0.7);">
        <h2 class="p-5">メンタルヘルス関連業<br>(カウンセリングなど)</h2>
        <p>仕事の悩みから私生活の悩みまでご相談に乗ります<br>
        今の辛い気持ちを一緒に解消しましょう</p>
      </div>

      <div class="col-md-5 item rounded m-5 p-5" style="background-color: rgba(255, 255, 255, 0.7);">
        <h2 class="p-5">健康予防に関する情報の提供</h2>
        <p>予防の知識が意外と普及しきっていない現代<br>
        健康予防管理専門士、予防医学の知識を持った専門家が<br>
        健康の本質をお教えします</p>
      </div>

      <div class="col-md-5 item rounded m-5 p-5" style="background-color: rgba(255, 255, 255, 0.7);">
        <h2 class="p-5">仕事で使える<br>心理ノウハウ提供</h2>
        <p>仕事の失敗を引きずってしまう<br>
        思った通りのパフォーマンスをすることができない<br>
        メンタルコントールさえできれば<br>
        あなたの本当の力を発揮することができます<br>
        心の仕組みを日本とアメリカ2つのカレッジを出た講師が教えます</p>
      </div>

      <div class="col-md-5 item rounded m-5 p-5" style="background-color: rgba(255, 255, 255, 0.7);">
        <h2 class="p-5">ミニセミナー<br>コンテンツ公開</h2>
        <p>会社の教育プログラムの一環や、オンライン講座<br>
        アニメーション風の動画の投稿や、さらには今はやりのVRの導入も!?<br>
        時代に合わせたコンテンツや、セミナーをどんどん公開していきます!!</p>
      </div>
  </div>

  <div class="row">
    <div class="container">
      <div class="justify-content-center mx-auto">
        <div class="col-md-12 mt-5 pb-5">
          <h2 class="text-center h1"><br class="br-sp"/>会社情報</h2>
          <div class="rounded mt-5 p-5" style="background-color: rgba(255, 255, 255, 1);">
            <p class="">会社名：Field-UP</p>
            <p class="">所在地：〒114-0011 東京都北区昭和町1-4-7</p>
            <p class="">代表者名：上田　敬介</p>
            <p class="">設立年月日：2020年6月1日</p>
            <p class="">従業員数：1名</p>
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

@section('style')
<style type="text/css">
  div.item p {
    text-align: center;
  }
  div.item h4 {
    text-align: center;
  }

  .inner{
    width: 75%;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translateY(-50%) translateX(-50%);
  }

  span {
    display: inline-block;
  }

  .introduction-image {
    width: 100%;
    position: fixed;
  }
</style>
@endsection

@section('title')
心理事業紹介|Field-UP 心理事業
@endsection