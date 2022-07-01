@extends('layouts.common')

@section('content')
<div id="news">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-7  page-title mt-5">
        <h1 class="text-center">ニュース</h1>
      </div>
    </div>
  </div>

  <div class="container mt-5 pb-5">
    <div class="row justify-content-center mt-5 mb-5 pd-5">
      <div class="card border-dark col-sm-10 item mt-5 mb-5">
        <div class="card-body text-dark bg-light">
          <p>2021/8/1 日曜日</p><br>
          <h5>サイトリニューアル</h5><br>
          <p>各種コンテンツ開設しております<br>
            完成までしばしお待ちください</p>
        </div>
      </div>

      <div class="card border-dark col-sm-10 item mt-5 mb-5">
        <div class="card-body text-dark bg-light">
          <p>2021/12/1 水曜日</p><br>
          <h5>BTL大学　教授業</h5><br>
          <p>オンラインプラットフォームで動画授業を随時開講しております<br>
            是非ご覧下さい<br>
            <a href= "https://www.youtube.com/watch?v=9j0RCelJI_0" >動画はこちらから</a></p>
        </div>
      </div>

      <div class="card border-dark col-sm-10 item mt-5 mb-5">
      <div class="card-body text-dark bg-light">
          <p>2022/5/1 日曜日</p><br>
          <h5>夢分析ショート動画配信開始!!</h5><br>
          <p>ユング心理学で有名な夢分析をショート動画でシリーズ化<br>
            気軽に楽しんで下さい<br>
            <a href= "https://www.youtube.com/shorts/RglDIfyJfmA" >動画はこちらから</a></p>
        </div>
      </div>

    </div>
  </div>
</div>
@endsection

@section('js')
@endsection

@section('title')
ニュース
@endsection