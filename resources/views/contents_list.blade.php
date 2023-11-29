@extends('layouts.common')
<meta name="description" content="心理学をもっとよくしてもらうためにアニメーション動画で心理学についてまとめてみました。各分野ごとに分けて作っていますので、気になるものがあれば是非ご覧ください。">
@section('content')
<div id="mental_care_contents">
  <div class="container">

    <div class="row mx-auto">
      <div class="col-md-7 page-title pt-5 pb-3 d-block mx-auto">
        <h1 class="text-center f1 pt-5 mb-3">コンテンツライブラリ</h1>
        <p class="text-center text01">動画でわかりやすく解説<br>難しい専門用語も、動画でなら簡単に覚えられるよ</p>
      </div>
    </div>
  
    <div class="row">

      <div class="col-md-4 item mb-5 fadeUpTrigger fade-in-up fade-in">
        <div class="card" style="margin: 10px;">
          <a href='{{ route("contents_list.select", ["page_number"=>1]) }}' class="w-100 h-100">
            <img src='{{ asset("/image/サムネ(心理の本質).jpg") }}' class="card-img" alt="心理と本質">
            <h3 class="">【心理の本質】心理学って何だろう？</h3>
          </a>
        </div>
      </div>
      
      <div class="col-md-4 item mb-5 fadeUpTrigger fade-in-up fade-in">
        <div class="card" style="margin: 10px;">
          <a href='{{ route("contents_list.select", ["page_number"=>2]) }}' class="w-100 h-100">
            <img src='{{ asset("/image/サムネ(ストレスと心理).jpg") }}' class="card-img" alt="ストレスと心理">
            <h3 class="">【ストレスと心理】どんなことがストレスになるの？</h3>
          </a>
        </div>
      </div>

      <div class="col-md-4 item mb-5 fadeUpTrigger fade-in-up fade-in">
        <div class="card" style="margin: 10px;">
          <a href='{{ route("contents_list.select", ["page_number"=>3]) }}' class="card w-100 h-100">
            <img src='{{ asset("/image/サムネ(カラダとココロ).jpg") }}' class="card-img" alt="カラダとココロ">
            <h3 class="">【カラダとココロ】カラダはココロと繋がっている!?</h3>
          </a>
        </div>
      </div>

      <div class="col-md-4 item mb-5 fadeUpTrigger fade-in-up fade-in">
        <div class="card" style="margin: 10px;">
          <a href='{{ route("contents_list.select", ["page_number"=>4]) }}' class="w-100 h-100">
            <img src='{{ asset("/image/サムネ(悩みと心理).jpg") }}' class="card-img" alt="悩みと心理">
            <h3 class="">【悩みと心理】独りで抱え込まないでね</h3>
          </a>
        </div>
      </div>

      <div class="col-md-4 item mb-5 fadeUpTrigger fade-in-up fade-in">
        <div class="card" style="margin: 10px;">
          <a href='{{ route("contents_list.select", ["page_number"=>5]) }}' class="w-100 h-100">
            <img src='{{ asset("/image/サムネ(仕事と心理).jpg") }}' class="card-img" alt="仕事と心理">
            <h3 class="">【仕事と心理】気持ちよく仕事しよう!!</h3>
          </a>
        </div>
      </div>

      <div class="col-md-4 item mb-5 fadeUpTrigger fade-in-up fade-in">
        <div class="card" style="margin: 10px;">
          <a href='{{ route("contents_list.select", ["page_number"=>6]) }}' class="w-100 h-100">
            <img src='{{ asset("/image/サムネ(遊びと心理).jpg") }}' class="card-img" alt="遊びと心理">
            <h3 class="">【遊びと心理】身近に隠れている心理学</h3>
          </a>
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

@section('bg_img')
test_cont.jpg
@endsection

@section('title')
コンテンツ一覧|Field-UP 心理事業
@endsection