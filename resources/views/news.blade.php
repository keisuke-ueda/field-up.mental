@extends('layouts.common')
<meta name="description" content="Field-UPの最新ニュースを紹介しています。世の中の状況に合わせていろんな形でコンテンツを配信していく予定なので、是非チェックしてください。">
@section('content')
<div id="news">
  <div class="container">

    <h1 class="text-center f1 pt-3 mb-3">メンタルニュース</h1>

    <div class="row justify-content-center mt-2 mb-5 pd-5">
      <div class="border-dark col-sm-10 item m-3">
        <div class="card text-dark bg-light p-3">
          <p class="text01">2021/8/1 : <b>サイトリニューアル</b>
            <br>各種コンテンツ開設しております
            <br>完成までしばしお待ちください
          </p>
        </div>
      </div>

      <div class="border-dark col-sm-10 item m-3">
        <div class="card text-dark bg-light p-3">
            <p class="text01">2021/12/1 : <b>BTL大学　教授業</b>
              <br>オンラインプラットフォームで動画授業を随時開講しております<br>
              是非ご覧下さい<br>
              <a href= "https://www.youtube.com/watch?v=9j0RCelJI_0" target="_blank">動画はこちらから</a>
            </p>
        </div>
      </div>

      <div class="border-dark col-sm-10 item m-3">
        <div class="card text-dark bg-light p-3">
            <p class="text01">2022/5/1 : <b>夢分析ショート動画配信開始!!</b>
              <br>ユング心理学で有名な夢分析をショート動画でシリーズ化<br>
              気軽に楽しんで下さい<br>
              <a href= "https://www.youtube.com/shorts/RglDIfyJfmA" target="_blank">動画はこちらから</a>
            </p>
        </div>
      </div>

      <div class="border-dark col-sm-10 item m-3">
        <div class="card text-dark bg-light p-3">
            <p class="text01">2022/10/17 : <b>Field-UP　総合サイト開設</b>
              <br>Field-UPの事業全体を紹介したサイトが開設しました。
              <br>いろんなコンテンツを掲載しているので、是非見てください。
              <a href= "https://www.field-up.work/" target="_blank">サイトはこちらから</a>
            </p>
        </div>
      </div>

      <div class="border-dark col-sm-10 item m-3">
        <div class="card text-dark bg-light p-3">
            <p class="text01">2022/10/25 : <b>心理テストページ・ケアページ更新</b>
              <br>本サイトのコンテンツを更新しました。
              <br>今後もどんどん面白いコンテンツを増やしていきますので楽しみにお待ちください。
            </p>
        </div>
      </div>



<!-- ニュース end -->

    </div>
  </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<img src='{{ asset("/image/foam1.png")}}' class="foam01" alt="泡1" style="width:20%;">
<img src='{{ asset("/image/foam2.png")}}' class="foam02" alt="泡2" style="width:30%;">
<img src='{{ asset("/image/foam3.png")}}' class="foam03" alt="泡3" style="width:30%;">
<img src='{{ asset("/image/foam4.png")}}' class="foam04" alt="泡4" style="width:15%;">
<img src='{{ asset("/image/foam1.png")}}' class="foam05" alt="泡1" style="width:10%;">
<img src='{{ asset("/image/foam2.png")}}' class="foam06" alt="泡2" style="width:15%;">
<img src='{{ asset("/image/foam3.png")}}' class="foam07" alt="泡3" style="width:20%;">
<img src='{{ asset("/image/foam4.png")}}' class="foam08" alt="泡4" style="width:20%;">

<script>
  window.addEventListener('load', (event) => {
    var foam01 = $('.foam01');
    var foam02 = $('.foam02');
    var foam03 = $('.foam03');
    var foam04 = $('.foam04');
    var foam05 = $('.foam05');
    var foam06 = $('.foam06');
    var foam07 = $('.foam07');
    var foam08 = $('.foam08');

    var scroll_y = window.scrollY;
    window.addEventListener('scroll', (event) => {
      var scroll_y = window.scrollY;
      console.log(scroll_y);
      foam01.stop().animate({
        'bottom': scroll_y + 100
        }, 300); 
      foam02.stop().animate({
        'bottom': scroll_y * 2 - 50
        }, 300); 
      foam03.stop().animate({
        'bottom': scroll_y * 0.65 - 250
        }, 300);      
      foam04.stop().animate({
        'bottom': scroll_y * 2 - 350
        }, 300); 
      foam05.stop().animate({
        'bottom': scroll_y * 0.5 - 450
        }, 300); 
      foam06.stop().animate({
        'bottom': scroll_y * 0.4 - 550
        }, 300); 
      foam07.stop().animate({
        'bottom': scroll_y * 0.8 - 650
        }, 300); 
      foam08.stop().animate({
        'bottom': scroll_y * 1 - 750
        }, 300); 
    });
  });
</script>


@endsection

@section('js')
@endsection

@section('title')
ニュース|FIeld-UP 心理事業
@endsection