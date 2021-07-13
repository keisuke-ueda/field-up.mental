@extends('layouts.common')

@section('content')
<div id="news">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-7  page_title mt-5">
        <h1 class="text-center">ニュース</h1>
      </div>
    </div>
  </div>

  <div class="container mt-5 pb-5">
    <div class="row justify-content-center mt-5 pd-5">
      <!--@for ($i = 0; $i < 1; $i++)-->
      <div class="card border-dark col-sm-10 item　mt-5">
          <div class="card-body text-dark">
            <p>2021/8/1 日曜日</p><br>
            <h5>サイトリニューアル</h5><br>
            <p>各種コンテンツ開設しております<br>
            完成までしばしお待ちください</p>
          </div>
      </div>
      <!--@endfor-->
    </div>
  </div>
</div>
@endsection

@section('js')
@endsection

@section('title')
ニュース
@endsection