@extends('layouts.common')
<meta name="description" content="頑張ったのに評価してもらえない。成果として認めてくれない。そんことがあるととても悲しくなってしまいますよね。今の年代は絶対評価で育ってきたため、相対評価の社会でストレスを感じる方は多くいます。周りが認めてくれなくても自分だけは自分を褒めてあげてください。必ず報われます。">
@section('content')
<div id="mental_care_contents">
  <div class="row justify-content-center container mx-auto">
    <div class="col-md-7 page-title  mt-5 pb-3">
      <h1 class="text-center">周りの評価と成果の関係</h1>
    </div>
  </div>

  <div class="row justify-content-center container mx-auto">
    <div class="col-md-10 item content-lead-text mt-3 pb-3">
      <p>わたしたちは多くの人と共に生きています<br>
        周りからの反応が自身のやる気に深く係っているだけではなく、<br>
        成果にも周りの評価が関係していること、心理効果をうまく使っていく方法を勉強しましょう
      </p>
    </div>

    <div class="col-md-10 item text-center youtube mb-5">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/deD8U0XxDJQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <div class="container row">
      <div class="col m-4" style="height: 250px;">
        <img class="h-100" alt="評価と成果1" src="{{ asset('image/contents_img/content401/1-1.jpg')}}" />
      </div>

      <div class="col m-4" style="height: 250px;">
        <img class="h-100" alt="評価と成果2" src="{{ asset('image/contents_img/content401/1-2.jpg')}}" />
      </div>

      <div class="col m-4" style="height: 250px;">
        <img class="h-100" alt="評価と成果3" src="{{ asset('image/contents_img/content401/1-3.jpg')}}" />
      </div>

      <div class="col m-4" style="height: 250px;">
        <img class="h-100" alt="評価と成果4" src="{{ asset('image/contents_img/content401/1-4.jpg')}}" />
      </div>
    </div>

  </div>

</div>
@endsection

@section('js')
@endsection

@section('title')
評価と成果|Field-UP 心理事業
@endsection