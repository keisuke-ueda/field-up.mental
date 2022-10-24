@extends('layouts.common')
<meta name="description" content="生活していくうえで仕事は必須です。ですが仕事をするために無理をして体調を崩したり、メンタル不調になっては言語道断です。あなたの身を本当に守れるのはあなたしかいません。もし辛いと感じたときは、仕事の仲間に助けを求めたり、カウンセラーに相談もして下さい。">
@section('content')
<div id="mental_care_contents">
  <div class="row justify-content-center container mx-auto">
    <div class="col-md-7 page-title  mt-5 pb-3">
      <h1 class="text-center">仕事によるストレス</h1>
    </div>
  </div>

  <div class="row justify-content-center container mx-auto">
    <div class="lead col-md-10 item content-lead-text m-3 pb-3 pt-3">
      <p>人生において「仕事」の比重はとても高く、ストレス要因も仕事に関係することが多いです<br>
        仕事からくるストレスにはどういったものがあるかを理解し、<br>
        環境改善に働きかけ、働きやすい状態に近づけるためにできることを知りましょう</p>
    </div>

    <div class="col-md-10 item text-center youtube mb-5">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/pWhaNW47KlQ" title="YouTube video player"
        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen></iframe>
    </div>

    <div class="container row flexbox">
      <div class="col-6 mb-3 box1">
        <img class="d-block mx-auto" alt="仕事によるストレス1" src="{{ asset('image/contents_img/content207/1-1.jpg')}}" style="width:100%;"/>
      </div>

      <div class="col-6 mb-3 box2">
        <img class="d-block mx-auto" alt="仕事によるストレス2" src="{{ asset('image/contents_img/content207/1-2.jpg')}}" style="width:100%;"/>
      </div>

      <div class="col-6 mb-3 box1">
        <img class="d-block mx-auto" alt="仕事によるストレス3" src="{{ asset('image/contents_img/content207/1-3.jpg')}}" style="width:100%;"/>
      </div>

      <div class="col-6 mb-3 box2">
        <img class="d-block mx-auto" alt="仕事によるストレス4" src="{{ asset('image/contents_img/content207/1-4.jpg')}}" style="width:100%;"/>
      </div>
    </div>

  </div>

</div>
@endsection

@section('js')
@endsection

@section('title')
仕事によるストレス|Field-UP 心理事業
@endsection