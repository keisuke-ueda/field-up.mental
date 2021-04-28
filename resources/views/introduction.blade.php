@extends('layouts.common')

@section('content')
<?php $bg_img = asset('/image/背景テスト8.jpg') ?>
<div class="parallax-bg" style="background-image: url('{{$bg_img}}'); height: 50px;">
</div>

<div class="parallax-bg" style="background-image: url('{{$bg_img}}');">
  <div class="container parallax-bg" style="background-image: url('{{$bg_img}}');">
    <div class="scrollbox"  style="height: auto; color: white;">
      <div class="row parallax-bg" style="background-image: url('{{$bg_img}}');">
        <div class="col-md-3 parallax-bg" style="background-image: url('{{$bg_img}}');">
        </div>
        <div class="col-md-6">
          <h1 style="text-align: center;">事業紹介</h1>
        </div>
        <div class="col-md-3 parallax-bg" style="background-image: url('{{$bg_img}}');">
        </div>
      </div>
    </div>
  </div>
</div>

<div class="parallax-bg" style="background-image: url('{{$bg_img}}'); height: 50px;">
</div>

<div class="parallax-bg" style="background-image: url('{{$bg_img}}');">
  <div class="container parallax-bg" style="background-image: url('{{$bg_img}}');">
    <div class="scrollbox" style="height: auto; color: white;">
      <div class="row parallax-bg" style="background-image: url('{{$bg_img}}');">

        <div class="col-md-8 bg-secondary"  style="filter: opacity(0.5); height: 325px; background-color: blanchedalmond;">
          <h3>問題提起</h3>
          画像を配置
        </div>
        <div class="col-md-4 parallax-bg" style="background-image: url('{{$bg_img}}');">
        </div>

        <div class="col-md-4 parallax-bg" style="background-image: url('{{$bg_img}}');">
        </div>
    
        <div class="col-md-8 bg-secondary"  style="filter: opacity(0.5); height: 325px; background-color: aquamarine; position:relative; bottom: 50px;">
          <h3>現代の問題として精神疾患や、うつ病などメンタルに大きくかかわる問題が溢れている</h3>
          <p>・家族間の心の不一致--親の面倒を見るのが大変、奥さん、旦那がわかってくれない、生活困窮している</p>
          <p>・子供都の不一致--相談してくれない、反抗してくる、将来が心配、グレている、病気の治療が大変</p>
          <p>・職場での問題-上司とのいざこざ、部下とのいざこざ、自分の仕事が上手くいかない、誰かに迷惑をかけられている、仕事したくない</p>
          <p>・精神の不調が身体の不調につながている--心の不調からくる健康不調、健康不調からくる心の不調</p>
        </div>

      </div>
    </div>
  </div>
</div>

<div class="parallax-bg" style="background-image: url('{{$bg_img}}');">
</div>

<div class="parallax-bg" style="background-image: url('{{$bg_img}}');">
  <div class="container parallax-bg" style="background-image: url('{{$bg_img}}');">
    <div class="scrollbox" style="height: auto; color: white;">
      <div class="row">
        <div class="col-md-5 bg-secondary"  style="filter: opacity(0.5); height: 200px;">
          <h4>メンタルヘルス関連業(カウンセリングなど)</h4>
          <p>仕事の悩みから私生活の悩みまでご相談に乗ります</p>
          <p>今の辛い気持ちを一緒に解消しましょう</p>
        </div>
        <div class="col-md-2 parallax-bg" style="background-image: url('{{$bg_img}}');">
        </div>
        <div class="col-md-5 bg-secondary"  style="filter: opacity(0.5); height: 200px;">
          <h4>健康予防に関する情報の提供</h4>
          <p>病気になる前に予防の知識が意外と普及しきっていない現代</p>
          <p>健康予防管理専門士、予防医学の知識を持った専門家が健康の本質をお教えします</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4 parallax-bg" style="background-image: url('{{$bg_img}}');">
        </div>
        <div class="col-md-4-info" style="height: 50px" >
          <h3>サービス紹介</h3>
        </div>
        <div class="col-md-4 parallax-bg" style="background-image: url('{{$bg_img}}');">
        </div>
      </div>

      <div class="row">
        <div class="col-md-5 bg-secondary"  style="filter: opacity(0.5);height: 200px;">
          <h4>仕事で使える心理ノウハウ提供</h4>
          <p>仕事の失敗を引きずってしまう</p>
          <p>思った通りのパフォーマンスをすることができない</p>
          <p>メンタルコントールさえできれば、あなたの本当の力を発揮することができます</p>
          <p>心の仕組みを日本とアメリカ2つのカレッジを出た講師が教えます</p>
        </div>
        <div class="col-md-2 parallax-bg" style="background-image: url('{{$bg_img}}');">
        </div>
        <div class="col-md-5 bg-secondary"  style="filter: opacity(0.5); height: 200px;">
          <h4>ミニセミナー、コンテンツ公開</h4>
          <p>様々な形で、情報やスキルを提供していきます</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="parallax-bg" style="background-image: url('{{$bg_img}}');">
</div>
@endsection

@section('js')
@endsection

@section('title')
事業紹介
@endsection