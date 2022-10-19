@extends('layouts.common')
<meta name="description" content="心理学とストレスはとても深い関りがあります。ストレスと聞くとイヤなイメージを持たれる方が多いかと思いますが、実は程よいストレスはその人の実力を引き出してくれる手伝いをしてくれることもあります。">
@section('content')
<div id="mental_care_contents">
  <div class="container">
    <div class="row mx-auto">
      <div class="col-md-7 page-title pt-5 pb-3 d-block mx-auto">
        <h1 class="text-center"><br class="br-sp"/>ストレスと心理</h1>
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
            <h3 class="card-title">【ストレスとは】ストレスの正体ってなんだろう？</h3>
          </a>
        </div>
      </div>
      
      <div class="col-md-4 item mb-5">
        <div class="card p-3">
          <a href='{{ route("contents_sec.select", ["page_number"=>202])}}' class="w-100 h-100">
            <img src='{{ asset("/image/sec2_image/不安とは何か(2).jpg")}}' class="card-img" alt="不安とは何か">
            <h3 class="card-title">【不安とは何か】不安の正体がわかるよ</h3>
          </a>
        </div>
      </div>

      <div class="col-md-4 item mb-5">
        <div class="card p-3">
          <a href='{{ route("contents_sec.select", ["page_number"=>203])}}' class="w-100 h-100">
            <img src='{{ asset("/image/sec2_image/感じ方は人それぞれ(3).jpg") }}' class="card-img" alt="感じ方は人それぞれ">
            <h3 class="card-title">【感じ方は人それぞれ】周りの人はどう感じているのだろう?</h3>
          </a>
        </div>
      </div>

      <div class="col-md-4 item mb-5">
        <div class="card p-3">
          <a href='{{ route("contents_sec.select", ["page_number"=>204])}}' class="w-100 h-100">
            <img src='{{ asset("/image/sec2_image/コミュニケーション(4).jpg")}}' class="card-img" alt="よりよいコミュニケーション">
            <h3 class="card-title">【よりよいコミュニケーション】いろんな方法がわかるよ</h3>
          </a>
        </div>
      </div>

      <div class="col-md-4 item mb-5">
        <div class="card p-3">
          <a href='{{ route("contents_sec.select", ["page_number"=>205])}}' class="w-100 h-100">
            <img src='{{ asset("/image/sec2_image/ストレスダメージ(5).jpg")}}' class="card-img" alt="職場で生じるストレスダメージ">
            <h3 class="card-title">【職場で生じるストレスダメージ】ココロからのシグナルを無視しないでね</h3>
          </a>
        </div>
      </div>

      <div class="col-md-4 item mb-5">
        <div class="card p-3">
          <a href='{{ route("contents_sec.select", ["page_number"=>206])}}' class="w-100 h-100">
            <img src='{{ asset("/image/sec2_image/周りのためにできること(6).jpg")}}' class="card-img" alt=".周りのためにできること">
            <h3 class="card-title">【周りのためにできること】あなたのできることをしてあげましょう</h3>
          </a>
        </div>
      </div>

      <div class="col-md-4 item mb-5">
        <div class="card p-3">
          <a href='{{ route("contents_sec.select", ["page_number"=>207])}}' class="w-100 h-100">
            <img src='{{ asset("/image/sec2_image/仕事によるストレス(7).jpg")}}' class="card-img" alt="仕事によるストレス">
            <h3 class="card-title">【仕事によるストレス】あぁ～こんなことあるある...</h3>
          </a>
        </div>
      </div>

      <div class="col-md-4 item mb-5">
        <div class="card p-3">
        <a href='{{ route("contents_sec.select", ["page_number"=>208])}}' class="w-100 h-100">
          <img src='{{ asset("/image/sec2_image/脳の中で起きていること(8).jpg")}}' class="card-img" alt="脳内で起きていること">
              <h3 class="card-title">【脳の中で起きていること】ドーパミン?アセチルコリン?</h3>
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
@endsection

@section('js')
@endsection

@section('bg_img')
test_cont.jpg
@endsection

@section('title')
ストレスと心理|Field-UP 心理事業
@endsection