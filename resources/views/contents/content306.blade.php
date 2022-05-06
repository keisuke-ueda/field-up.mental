@extends('layouts.common')

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
    <div class="col-md-10 item content-lead-text mt-3 pb-3">
      <p>高血糖とは血液中の糖濃度が高い状態です<br>
        日本人は主食がお米のため多くの人が高血糖状態になりやすいです<br>
        高血糖について知ることで高血糖に対する恐怖をなくしていきましょう</p>
    </div>

    <div class="col-md-10 item text-center youtube mb-5">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/-T1dGR-7HA8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <div class="container row">
      <div class="col m-4" style="height: 250px;">
        <img class="h-100" src="{{ asset('image/contents_img/content306/1-1.jpg')}}" />
      </div>

      <div class="col m-4" style="height: 250px;">
        <img class="h-100" src="{{ asset('image/contents_img/content306/1-2.jpg')}}" />
      </div>

      <div class="col m-4" style="height: 250px;">
        <img class="h-100" src="{{ asset('image/contents_img/content306/1-3.jpg')}}" />
      </div>

      <div class="col m-4" style="height: 250px;">
        <img class="h-100" src="{{ asset('image/contents_img/content306/1-4.jpg')}}" />
      </div>
    </div>

  </div>

</div>
@endsection

@section('js')
@endsection

@section('title')
好きなものを食べられないときのストレス(高血糖)
@endsection