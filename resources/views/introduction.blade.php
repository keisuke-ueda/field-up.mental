@extends('layouts.common')

@section('content')
<div id="introduction">

  <div class="row">
    <div class="container">
      <div class="justify-content-center mx-auto">
        <div class="col-md-12 page-title mt-5 pb-5">
          <h1 class="text-center"><br class="br-sp"/>事業紹介</h1>
          <div class="col-md-12 rounded" style="background-color: rgba(16, 182, 225, 0.5)">
            <img src='{{ asset("/image/事業デザイン.jpg") }}' alt="..." class="col-md-12 mt-5 mb-5">
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="justify-content-center mx-auto">
        <div class="col-md-12 page-title pb-5">
          <h1 class="text-center"><br class="br-sp"/>サービス紹介</h1>
        </div>
      </div>
    </div>
  </div>

  <div class="row justify-content-center">
      <div class="col-md-5 item rounded m-5 p-5 service-contents" style="background-color: rgba(255, 255, 255, 0.7);">
        <h2>メンタルヘルス関連業<br>(カウンセリングなど)</h2>
        <p>仕事の悩みから私生活の悩みまでご相談に乗ります</p>
        <p>今の辛い気持ちを一緒に解消しましょう</p>
      </div>

      <div class="col-md-5 item rounded m-5 p-5 service-contents" style="background-color: rgba(255, 255, 255, 0.7);">
        <h2>健康予防に関する情報の提供</h2>
        <p>病気になる前に予防の知識が意外と普及しきっていない現代</p>
        <p>健康予防管理専門士、予防医学の知識を持った専門家が</p>
        <p>健康の本質をお教えします</p>
      </div>

      <div class="col-md-5 item rounded m-5 p-5 service-contents" style="background-color: rgba(255, 255, 255, 0.7);">
        <h2>仕事で使える心理ノウハウ提供</h2>
        <p>仕事の失敗を引きずってしまう</p>
        <p>思った通りのパフォーマンスをすることができない</p>
        <p>メンタルコントールさえできれば、</p>
        <p>あなたの本当の力を発揮することができます</p>
        <p>心の仕組みを日本とアメリカ2つのカレッジを出た講師が教えます</p>
      </div>

      <div class="col-md-5 item rounded m-5 p-5 service-contents" style="background-color: rgba(255, 255, 255, 0.7);">
        <h2>ミニセミナー、コンテンツ公開</h2>
        <p>様々な形で、情報やスキルを提供していきます</p>
      </div>
  </div>

  <div class="row">
    <div class="container">
      <div class="justify-content-center mx-auto">
        <div class="col-md-12 page-title mt-5 pb-5">
          <h1 class="text-center"><br class="br-sp"/>会社情報</h1>
          <div class="rounded mt-5 p-5" style="background-color: rgba(16, 182, 225, 0.5);">
            <h2 class="p-3">会社名：Field-UP</h2>
            <h2 class="p-3">所在地：〒114-0011 東京都北区昭和町1-3-18</h2>
            <h2 class="p-3">代表者名：上田　敬介</h2>
            <h2 class="p-3">設立年月日：2020年6月1日</h2>
            <h2 class="p-3">従業員数：1名</h2>
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
事業紹介
@endsection