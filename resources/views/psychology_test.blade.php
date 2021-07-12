@extends('layouts.common')

@section('content')
<div id="psychology_test">
  <div class="container">
    <div class="row justify-content-center">
      <div class="w-100" style="height: 50px;">
      </div>
      <div class="col-md-7 page-title">
        <h1 class="text-center">心理テスト</h1>
        <p class="text-center">気になったテストをやってみよう</p>
      </div>
      <div class="w-100" style="height: 50px;">
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      
      {{-- @for ($i = 0; $i < 3; $i++) --}} 
      <div class="col-md-4 item">
        <div class="card" style="margin: 10px;">
        <a href='psychology_test/egogram' class="w-100 h-100">
          <img src='{{ asset("/image/psychology_test_img/心理テスト(エゴグラム).jpg") }}' class="card-img" alt="...">
          {{-- <a href='psychology_test/egogram' class="w-100 h-100">
          <img src='{{ asset("/image/コンテンツサムネ" . ($i*4+1) . ".jpg") }}' class="card-img" alt="..."> --}}
            <h3 class="card-title">【すぐ実践できる】健やかに生きるための心構え</h3>
            <p class="card-text">
            </p>
        </a>
        </div>
      </div>
      
      <div class="col-md-4 item">
        <div class="card" style="margin: 10px;">
          <a href='{{ route("making_now.show") }}' class="w-100 h-100">
            <img src='{{ asset("/image/psychology_test_img/製作中ページ.jpg") }}' class="card-img" alt="...">
            {{-- <a href='{{ route("contents_list.select", ["page_number"=>$i*4+2]) }}' class="w-100 h-100">
            <img src='{{ asset("/image/コンテンツサムネ" . ($i*4+2) . ".jpg") }}' class="card-img" alt="..."> --}}
              <h3 class="card-title">【すぐ実践できる】健やかに生きるための心構え</h3>
              <p class="card-text">
              </p>
          </a>
        </div>
      </div>

      <div class="d-md-none" style="height: 50px;">
      </div>

      <div class="col-md-4 item">
        <div class="card" style="margin: 10px;">
          <a href='{{ route("making_now.show") }}' class="card w-100 h-100">
            <img src='{{ asset("/image/psychology_test_img/製作中ページ.jpg") }}' class="card-img" alt="...">
            {{-- <a href='{{ route("contents_list.select", ["page_number"=>$i*4+3]) }}' class="card w-100 h-100">
            <img src='{{ asset("/image/コンテンツサムネ" . ($i*4+2) . ".jpg") }}' class="card-img" alt="..."> --}}
              <h3 class="card-title">【すぐ実践できる】健やかに生きるための心構え</h3>
              <p class="card-text">
              </p>
          </a>
        </div>
      </div>


      <div class="col-md-4 item">
        <div class="card" style="margin: 10px;">
          <a href='{{ route("making_now.show") }}' class="w-100 h-100">
            <img src='{{ asset("/image/psychology_test_img/製作中ページ.jpg") }}' class="card-img" alt="...">
            {{--  <a href='{{ route("contents_list.select", ["page_number"=>$i*4+4]) }}' class="w-100 h-100">
            <img src='{{ asset("/image/コンテンツサムネ" . ($i*4+2) . ".jpg") }}' class="card-img" alt="..."> --}}
              <h3 class="card-title">【すぐ実践できる】健やかに生きるための心構え</h3>
              <p class="card-text">
              </p>
          </a>
        </div>
      </div>

      <div class="col-md-4 item">
        <div class="card" style="margin: 10px;">
          <a href='{{ route("making_now.show") }}' class="w-100 h-100">
            <img src='{{ asset("/image/psychology_test_img/製作中ページ.jpg") }}' class="card-img" alt="...">
            {{--  <a href='{{ route("contents_list.select", ["page_number"=>$i*4+4]) }}' class="w-100 h-100">
            <img src='{{ asset("/image/コンテンツサムネ" . ($i*4+2) . ".jpg") }}' class="card-img" alt="..."> --}}
              <h3 class="card-title">【すぐ実践できる】健やかに生きるための心構え</h3>
              <p class="card-text">
              </p>
          </a>
        </div>
      </div>

      <div class="col-md-4 item">
        <div class="card" style="margin: 10px;">
          <a href='{{ route("making_now.show") }}' class="w-100 h-100">
            <img src='{{ asset("/image/psychology_test_img/製作中ページ.jpg") }}' class="card-img" alt="...">
            {{--  <a href='{{ route("contents_list.select", ["page_number"=>$i*4+4]) }}' class="w-100 h-100">
            <img src='{{ asset("/image/コンテンツサムネ" . ($i*4+2) . ".jpg") }}' class="card-img" alt="..."> --}}
              <h3 class="card-title">【すぐ実践できる】健やかに生きるための心構え</h3>
              <p class="card-text">
              </p>
          </a>
        </div>
      </div>

      <div class="col-md-4 item">
        <div class="card" style="margin: 10px;">
          <a href='{{ route("making_now.show") }}' class="w-100 h-100">
            <img src='{{ asset("/image/psychology_test_img/製作中ページ.jpg") }}' class="card-img" alt="...">
            {{--  <a href='{{ route("contents_list.select", ["page_number"=>$i*4+4]) }}' class="w-100 h-100">
            <img src='{{ asset("/image/コンテンツサムネ" . ($i*4+2) . ".jpg") }}' class="card-img" alt="..."> --}}
              <h3 class="card-title">【すぐ実践できる】健やかに生きるための心構え</h3>
              <p class="card-text">
              </p>
          </a>
        </div>
      </div>

      <div class="col-md-4 item">
        <div class="card" style="margin: 10px;">
          <a href='{{ route("making_now.show") }}' class="w-100 h-100">
            <img src='{{ asset("/image/psychology_test_img/製作中ページ.jpg") }}' class="card-img" alt="...">
            {{--  <a href='{{ route("contents_list.select", ["page_number"=>$i*4+4]) }}' class="w-100 h-100">
            <img src='{{ asset("/image/コンテンツサムネ" . ($i*4+2) . ".jpg") }}' class="card-img" alt="..."> --}}
              <h3 class="card-title">【すぐ実践できる】健やかに生きるための心構え</h3>
              <p class="card-text">
              </p>
          </a>
        </div>
      </div>

      <div class="col-md-4 item">
        <div class="card" style="margin: 10px;">
          <a href='{{ route("making_now.show") }}' class="w-100 h-100">
            <img src='{{ asset("/image/psychology_test_img/製作中ページ.jpg") }}' class="card-img" alt="...">
            {{--  <a href='{{ route("contents_list.select", ["page_number"=>$i*4+4]) }}' class="w-100 h-100">
            <img src='{{ asset("/image/コンテンツサムネ" . ($i*4+2) . ".jpg") }}' class="card-img" alt="..."> --}}
              <h3 class="card-title">【すぐ実践できる】健やかに生きるための心構え</h3>
              <p class="card-text">
              </p>
          </a>
        </div>
      </div>




      <div class="w-100" style="height: 50px;">
      </div>
      
      {{-- @endfor --}}
    </div>
  </div>
</div>
@endsection

@section('js')
@endsection

@section('title')
心理テスト
@endsection