@extends('layouts.common')
<meta name="description" content="心理学をもっとよくしてもらうためにアニメーション動画で心理学についてまとめてみました。各分野ごとに分けて作っていますので、気になるものがあれば是非ご覧ください。">
@section('content')
<div id="mental_care_contents">
  <div class="container">

    <div class="row mx-auto">
      <div class="col-md-7 page-title pt-5 pb-3 d-block mx-auto">
        <h1 class="text-center f1">コンテンツライブラリ</h1>
        <p class="text-center text01">動画でわかりやすく解説<br>難しい専門用語も、動画でなら簡単に覚えられるよ</p>
      </div>
    </div>
  
    <div class="row">

      <div class="col-md-4 item mb-5">
        <div class="card" style="margin: 10px;">
          <a href='{{ route("contents_list.select", ["page_number"=>1]) }}' class="w-100 h-100">
            <img src='{{ asset("/image/サムネ(心理の本質).jpg") }}' class="card-img" alt="心理と本質">
            <h3 class="card-title">【心理の本質】心理学って何だろう？</h3>
          </a>
        </div>
      </div>
      
      <div class="col-md-4 item mb-5">
        <div class="card" style="margin: 10px;">
          <a href='{{ route("contents_list.select", ["page_number"=>2]) }}' class="w-100 h-100">
            <img src='{{ asset("/image/サムネ(ストレスと心理).jpg") }}' class="card-img" alt="ストレスと心理">
            <h3 class="card-title">【ストレスと心理】どんなことがストレスになるの？</h3>
          </a>
        </div>
      </div>

      <div class="col-md-4 item mb-5">
        <div class="card" style="margin: 10px;">
          <a href='{{ route("contents_list.select", ["page_number"=>3]) }}' class="card w-100 h-100">
            <img src='{{ asset("/image/サムネ(カラダとココロ).jpg") }}' class="card-img" alt="カラダとココロ">
            <h3 class="card-title">【カラダとココロ】カラダはココロと繋がっている!?</h3>
          </a>
        </div>
      </div>

      <div class="col-md-4 item mb-5">
        <div class="card" style="margin: 10px;">
          <a href='{{ route("contents_list.select", ["page_number"=>4]) }}' class="w-100 h-100">
            <img src='{{ asset("/image/サムネ(悩みと心理).jpg") }}' class="card-img" alt="悩みと心理">
            <h3 class="card-title">【悩みと心理】独りで抱え込まないでね</h3>
          </a>
        </div>
      </div>

      <div class="col-md-4 item mb-5">
        <div class="card" style="margin: 10px;">
          <a href='{{ route("contents_list.select", ["page_number"=>5]) }}' class="w-100 h-100">
            <img src='{{ asset("/image/サムネ(仕事と心理).jpg") }}' class="card-img" alt="仕事と心理">
            <h3 class="card-title">【仕事と心理】気持ちよく仕事しよう!!</h3>
          </a>
        </div>
      </div>

      <div class="col-md-4 item mb-5">
        <div class="card" style="margin: 10px;">
          <a href='{{ route("contents_list.select", ["page_number"=>6]) }}' class="w-100 h-100">
            <img src='{{ asset("/image/サムネ(遊びと心理).jpg") }}' class="card-img" alt="遊びと心理">
            <h3 class="card-title">【遊びと心理】身近に隠れている心理学</h3>
          </a>
        </div>
      </div>

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
コンテンツ一覧|Field-UP 心理事業
@endsection