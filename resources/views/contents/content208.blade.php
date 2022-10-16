@extends('layouts.common')
<meta name="description" content="ストレスや不安を感じたとき、いったい脳内ではどんなことが起きているか知っていますか?少しでもその部分がわかってくるとどうすれば気持ちが楽になるかがわかってくるかもしれません。動画で確認してみましょう。">
@section('content')
<div id="mental_care_contents">
  <div class="row justify-content-center container mx-auto">
    <div class="col-md-7 page-title  mt-5 pb-3">
      <h1 class="text-center">脳内で起きていること</h1>
    </div>
  </div>

  <div class="row justify-content-center container mx-auto">
    <div class="col-md-10 item content-lead-text mt-3 pb-3">
      <p>私たちの脳の中では、ストレスを受けたときにどんなことが起きているのでしょうか？<br>
      ストレスに対してどうとらえたり、どんな栄養素がいいかをわかりやすく解説します</p>
    </div>

    <div class="col-md-10 item text-center youtube mb-5">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/S5LXWfdJ5LE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <div class="container row">
      <div class="col m-4" style="height: 250px;">
        <img class="h-100" alt="脳内で起きていること1" src="{{ asset('image/contents_img/content208/1-1.jpg')}}" />
      </div>

      <div class="col m-4" style="height: 250px;">
        <img class="h-100" alt="脳内で起きていること2" src="{{ asset('image/contents_img/content208/1-2.jpg')}}" />
      </div>

      <div class="col m-4" style="height: 250px;">
        <img class="h-100" alt="脳内で起きていること3" src="{{ asset('image/contents_img/content208/1-3.jpg')}}" />
      </div>

      <div class="col m-4" style="height: 250px;">
        <img class="h-100" alt="脳内で起きていること4" src="{{ asset('image/contents_img/content208/1-4.jpg')}}" />
      </div>
    </div>

  </div>

</div>
@endsection

@section('js')
@endsection

@section('title')
脳内で起きていること|Field-UP 心理事業
@endsection