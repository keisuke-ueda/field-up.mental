@extends('layouts.common')
<meta name="description" content="心理学とストレスはとても深い関りがあります。ストレスと聞くとイヤなイメージを持たれる方が多いかと思いますが、実は程よいストレスはその人の実力を引き出してくれる手伝いをしてくれることもあります。">
@section('content')
<div id="mental_care_contents">
  <div class="container">
    <div class="row mx-auto">
      <div class="col-md-7 page-title pt-5 pb-3 d-block mx-auto">
        <h1 class="text-center f1"><br class="br-sp"/>ストレスと心理</h1>
        <p class="text-center text01">ストレスフリーな生活をしたい!!<br>
        そんな人は多いのではないですか？<br>
        どんなことがストレスになるかがわかれば、対策が見えてきますよ</p>
      </div>
    </div>

  
    <div class="row">

      <div class="col-md-4 item mb-5">
        <div class="card p-3">
          <a href='{{ route("contents_sec.select", ["page_number"=>201])}}' class="w-100 h-100">
            <img src='{{ asset("/image/sec2_image/ストレスとは(1).jpg") }}' class="card-img" alt="ストレスとは">
            <h3 class="">【ストレスとは】ストレスの正体ってなんだろう？</h3>
          </a>
        </div>
      </div>
      
      <div class="col-md-4 item mb-5">
        <div class="card p-3">
          <a href='{{ route("contents_sec.select", ["page_number"=>202])}}' class="w-100 h-100">
            <img src='{{ asset("/image/sec2_image/不安とは何か(2).jpg")}}' class="card-img" alt="不安とは何か">
            <h3 class="">【不安とは何か】不安の正体がわかるよ</h3>
          </a>
        </div>
      </div>

      <div class="col-md-4 item mb-5">
        <div class="card p-3">
          <a href='{{ route("contents_sec.select", ["page_number"=>203])}}' class="w-100 h-100">
            <img src='{{ asset("/image/sec2_image/感じ方は人それぞれ(3).jpg") }}' class="card-img" alt="感じ方は人それぞれ">
            <h3 class="">【感じ方は人それぞれ】周りの人はどう感じているのだろう?</h3>
          </a>
        </div>
      </div>

      <div class="col-md-4 item mb-5">
        <div class="card p-3">
          <a href='{{ route("contents_sec.select", ["page_number"=>204])}}' class="w-100 h-100">
            <img src='{{ asset("/image/sec2_image/コミュニケーション(4).jpg")}}' class="card-img" alt="よりよいコミュニケーション">
            <h3 class="">【よりよいコミュニケーション】いろんな方法がわかるよ</h3>
          </a>
        </div>
      </div>

      <div class="col-md-4 item mb-5">
        <div class="card p-3">
          <a href='{{ route("contents_sec.select", ["page_number"=>205])}}' class="w-100 h-100">
            <img src='{{ asset("/image/sec2_image/ストレスダメージ(5).jpg")}}' class="card-img" alt="職場で生じるストレスダメージ">
            <h3 class="">【職場で生じるストレスダメージ】ココロからのシグナルを無視しないでね</h3>
          </a>
        </div>
      </div>

      <div class="col-md-4 item mb-5">
        <div class="card p-3">
          <a href='{{ route("contents_sec.select", ["page_number"=>206])}}' class="w-100 h-100">
            <img src='{{ asset("/image/sec2_image/周りのためにできること(6).jpg")}}' class="card-img" alt=".周りのためにできること">
            <h3 class="">【周りのためにできること】あなたのできることをしてあげましょう</h3>
          </a>
        </div>
      </div>

      <div class="col-md-4 item mb-5">
        <div class="card p-3">
          <a href='{{ route("contents_sec.select", ["page_number"=>207])}}' class="w-100 h-100">
            <img src='{{ asset("/image/sec2_image/仕事によるストレス(7).jpg")}}' class="card-img" alt="仕事によるストレス">
            <h3 class="">【仕事によるストレス】あぁ～こんなことあるある...</h3>
          </a>
        </div>
      </div>

      <div class="col-md-4 item mb-5">
        <div class="card p-3">
        <a href='{{ route("contents_sec.select", ["page_number"=>208])}}' class="w-100 h-100">
          <img src='{{ asset("/image/sec2_image/脳の中で起きていること(8).jpg")}}' class="card-img" alt="脳内で起きていること">
              <h3 class="">【脳の中で起きていること】ドーパミン?アセチルコリン?</h3>
          </a>
        </div>
      </div>

      <div class="col-md-4 item mb-5">
        <div class="card p-3">
          <a href='{{ route("making_now.show") }}' class="w-100 h-100">
            <img src='{{ asset("/image/製作中ページ.jpg") }}' class="card-img" alt="開設準備中">
              <h3 class="">【準備中】ちょっと待っててね</h3>
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
ストレスと心理|Field-UP 心理事業
@endsection