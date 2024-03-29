@extends('layouts.common')
<meta name="description" content="甘いものは美味しいですよね。疲れたときにはもってこいです。でも食べ過ぎてしまうと大変なことに。それでも甘いものは食べたい!!そんな人はこの動画を見て下さい。食べても血糖値が上がりづらい甘いものがあるんです。">
@section('content')
<div id="mental_care_contents">
  <div class="row justify-content-center container mx-auto">
    <div class="col-md-7 page-title  mt-5 pb-3">
      <h1 class="text-center">好きなものを食べられないときの
        <br>ストレス(高血糖)
      </h1>
    </div>
  </div>

  <div class="row justify-content-center container mx-auto">
    <div class="col-md-10 item content-lead-text m-3 pb-3">
      <p>高血糖とは血液中の糖濃度が高い状態です<br>
        日本人は主食がお米のため多くの人が高血糖状態になりやすいです<br>
        高血糖について知ることで高血糖に対する恐怖をなくしていきましょう</p>
    </div>

    <div class="col-md-10 item text-center youtube mb-5">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/-T1dGR-7HA8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <div class="container row flexbox">
      <div class="col-6 mb-3 box1">
        <img class="d-block mx-auto" alt="高血糖1"src="{{ asset('image/contents_img/content306/1-1.jpg')}}" style="width:100%;"/>
      </div>

      <div class="col-6 mb-3 box2">
        <img class="d-block mx-auto" alt="高血糖2" src="{{ asset('image/contents_img/content306/1-2.jpg')}}" style="width:100%;"/>
      </div>

      <div class="col-6 mb-3 box1">
        <img class="d-block mx-auto" alt="高血糖3" src="{{ asset('image/contents_img/content306/1-3.jpg')}}" style="width:100%;"/>
      </div>

      <div class="col-6 mb-3 box2">
        <img class="d-block mx-auto" alt="高血糖4" src="{{ asset('image/contents_img/content306/1-4.jpg')}}" style="width:100%;"/>
      </div>
    </div>

  </div>

</div>
@endsection

@section('js')
@endsection

@section('title')
高血糖|Field-UP 心理事業
@endsection