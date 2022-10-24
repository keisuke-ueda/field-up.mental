@extends('layouts.common')
<meta name="description" content="生きている以上悩みが全くない人はおそらくいません。悩みがあっても感じていないという人もいると思います。悩みがいっぱいある人はそれだけ自分に期待をしているということです。もっといい環境に、もっと楽しく楽になるためにはどうすればいいかをその悩みをヒントに改善していきましょう。">
@section('content')
<div id="mental_care_contents">
  <div class="container">
      <div class="row mx-auto">
        <div class="col-md-7 page-title pt-5 pb-3 d-block mx-auto">
        <h1 class="text-center"><br class="br-sp"/>悩みと心理</h1>
        <p class="text-center text01">人間関係、仕事、家族、子育て、友人<br>
        悩みの種は至る所にあり、それらすべてを除外することはできません<br>
        悩みとどう向き合うかのコツは意外なところにあるかもしれません</p>
      </div>
    </div>

    <div class="row">

      <div class="col-md-4 item mb-5">
        <div class="card p-3">
          <a href='{{ route("contents_sec.select", ["page_number"=>401])}}' class="w-100 h-100">
            <img src='{{ asset("/image/sec4_image/周りの評価と成果の関係(1).jpg") }}' class="card-img" alt="周囲の評価と成果の関係">
            <h3 class="card-title">【周りの評価と成果の関係】実力を出し切れないのは意外な部分に原因が!?</h3>
          </a>
        </div>
      </div>

      <div class="col-md-4 item mb-5">
        <div class="card p-3">
          <a href='{{ route("making_now.show") }}' class="w-100 h-100">
            <img src='{{ asset("/image/製作中ページ.jpg") }}' class="card-img" alt="開設準備中">
            <h3 class="card-title">【準備中】ちょっと待っててね</h3>
          </a>
        </div>
      </div>
      
      <div class="col-md-4 item mb-5">
        <div class="card p-3">
          <a href='{{ route("making_now.show") }}' class="w-100 h-100">
            <img src='{{ asset("/image/製作中ページ.jpg") }}' class="card-img" alt="開設準備中">
            <h3 class="card-title">【準備中】ちょっと待っててね</h3>
          </a>
        </div>
      </div>

      <div class="col-md-4 item mb-5">
        <div class="card p-3">
          <a href='{{ route("making_now.show") }}' class="w-100 h-100">
            <img src='{{ asset("/image/製作中ページ.jpg") }}' class="card-img" alt="開設準備中">
            <h3 class="card-title">【準備中】ちょっと待っててね</h3>
          </a>
        </div>
      </div>

      <div class="col-md-4 item mb-5">
        <div class="card p-3">
          <a href='{{ route("making_now.show") }}' class="w-100 h-100">
            <img src='{{ asset("/image/製作中ページ.jpg") }}' class="card-img" alt="開設準備中">
            <h3 class="card-title">【準備中】ちょっと待っててね</h3>
          </a>
        </div>
      </div>

      <div class="col-md-4 item mb-5">
        <div class="card p-3">
          <a href='{{ route("making_now.show") }}' class="w-100 h-100">
            <img src='{{ asset("/image/製作中ページ.jpg") }}' class="card-img" alt="開設準備中">
            <h3 class="card-title">【準備中】ちょっと待っててね</h3>
          </a>
        </div>
      </div>

      <div class="col-md-4 item mb-5">
        <div class="card p-3">
          <a href='{{ route("making_now.show") }}' class="w-100 h-100">
            <img src='{{ asset("/image/製作中ページ.jpg") }}' class="card-img" alt="開設準備中">
            <h3 class="card-title">【準備中】ちょっと待っててね</h3>
          </a>
        </div>
      </div>

      <div class="col-md-4 item mb-5">
        <div class="card p-3">
          <a href='{{ route("making_now.show") }}' class="w-100 h-100">
            <img src='{{ asset("/image/製作中ページ.jpg") }}' class="card-img" alt="開設準備中">
            <h3 class="card-title">【準備中】ちょっと待っててね</h3>
          </a>
        </div>
      </div>

      <div class="col-md-4 item mb-5">
        <div class="card p-3">
          <a href='{{ route("making_now.show") }}' class="w-100 h-100">
            <img src='{{ asset("/image/製作中ページ.jpg") }}' class="card-img" alt="開設準備中">
            <h3 class="card-title">【準備中】ちょっと待っててね</h3>
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
悩みと心理|Field-UP 心理事業
@endsection