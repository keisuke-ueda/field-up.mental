@extends('layouts.common')

@section('content')
<div id="mental_care_contents">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12" style="height: 50px;">
      </div>
      <div class="col-md-7 page_title">
        <h1 class="text-center"><br class="br-sp"/>コンテンツライブラリ</h1>
        <p class="text-center">気になるコンテンツをチェックしてみようかな</p>
      </div>
      <div class="col-md-12" style="height: 50px;">
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
    {{--  <!--@for ($i = 0; $i < 3; $i++) <div class="col-md-4 item">--> --}}
      <div class="col-md-4 item">
        <div class="card" style="margin: 10px;">
        <a href='{{ route("contents_list.select", ["page_number"=>1]) }}' class="w-100 h-100">
        {{-- <!--<a href='{{ route("contents_list.select", ["page_number"=>$i*4+1]) }}' class="w-100 h-100">--> --}}
          <img src='{{ asset("/image/サムネ(心理の本質).jpg") }}' class="card-img" alt="...">
            <h3 class="card-title">【心理の本質】心理学って何だろう？</h3>
            <p class="card-text">
            </p>
        </a>
        </div>
      </div>
      
      <div class="col-md-4 item">
        <div class="card" style="margin: 10px;">
          <a href='{{ route("contents_list.select", ["page_number"=>2]) }}' class="w-100 h-100">
            <img src='{{ asset("/image/サムネ(ストレスと心理).jpg") }}' class="card-img" alt="...">
              <h3 class="card-title">【ストレスと心理】どんなことがストレスになるの？</h3>
              <p class="card-text">
              </p>
          </a>
        </div>
      </div>

      <div class="d-md-none" style="height: 50px;">
      </div>

      <div class="col-md-4 item">
        <div class="card" style="margin: 10px;">
          <a href='{{ route("contents_list.select", ["page_number"=>3]) }}' class="card w-100 h-100">
            <img src='{{ asset("/image/サムネ(カラダとココロ).jpg") }}' class="card-img" alt="...">
              <h3 class="card-title">【カラダとココロ】カラダはココロと繋がっている!?</h3>
              <p class="card-text">
              </p>
          </a>
        </div>
      </div>

      <div class="col-md-4 item">
        <div class="card" style="margin: 10px;">
          <a href='{{ route("contents_list.select", ["page_number"=>4]) }}' class="w-100 h-100">
            <img src='{{ asset("/image/サムネ(悩みと心理).jpg") }}' class="card-img" alt="...">
              <h3 class="card-title">【悩みと心理】独りで抱え込まないでね</h3>
              <p class="card-text">
              </p>
          </a>
        </div>
      </div>

      <div class="col-md-4 item">
        <div class="card" style="margin: 10px;">
          <a href='{{ route("contents_list.select", ["page_number"=>5]) }}' class="w-100 h-100">
            <img src='{{ asset("/image/サムネ(仕事と心理).jpg") }}' class="card-img" alt="...">
              <h3 class="card-title">【仕事と心理】気持ちよく仕事しよう!!</h3>
              <p class="card-text">
              </p>
          </a>
        </div>
      </div>

      <div class="col-md-4 item">
        <div class="card" style="margin: 10px;">
          <a href='{{ route("contents_list.select", ["page_number"=>6]) }}' class="w-100 h-100">
            <img src='{{ asset("/image/サムネ(遊びと心理).jpg") }}' class="card-img" alt="...">
              <h3 class="card-title">【遊びと心理】身近に隠れている心理学</h3>
              <p class="card-text">
              </p>
          </a>
        </div>
      </div>


      <div class="w-100" style="height: 50px;">
      </div>

      {{-- <!--@endfor -->  --}}
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
コンテンツ一覧
@endsection