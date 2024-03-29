@extends('layouts.common')
<meta name="description" content="メンタルにかかわる悩みや、ココロの調子が悪いときの対象方法、カウンセラーってどうやってなるの？など今まで寄せられた質問をまとめたページです。問合せフォームもありますのでお気軽にお問い合わせください。">
@section('content')
<div id="contacts_faq">

  <div class="container pb-3">

    <div class="col-md-7 page-title d-block mx-auto">
      <h2 class="text-center f1 pt-5 pb-5">お問い合わせ</h2>
    </div>
    <form method="post" action="{{route('send_contacts.send')}}" method="post">
    @csrf
      <div class="form-group">
        <input type="email" name="to" class="form-control m-2 d-block mx-auto" placeholder="メールアドレス">
        <input type="email" name="kakunin" class="form-control m-2 d-block mx-auto" placeholder="*確認のためもう一度入力下さい">
        <input type="text" name="kanji" class="form-control m-2 d-block mx-auto" placeholder="名前">
        <textarea rows="4" cols="50" placeholder="質問などはこちらへお願い致します" name="message" type="text" class="form-control m-2 d-block mx-auto"></textarea>
        <button type="submit" class="send m-2 d-block mx-auto sub-btn">送    信</button>
      </div>
    </form>

    <div class="d-block mx-auto">
      <div class="col-md-7 page-title d-block mx-auto">
        <h1 class="text-center pt-5 f1 mb-3">よくある質問</h1>
      </div>

      <div class="rounded m-5 p-3 faq fadeUpTrigger fade-in-up fade-in">
        <p class="q-text">Q.カウンセラーと心理士は違い何で、心理士とはどのような職業なのか</p>
        <p class="">A.臨床心理士や産業カウンセラー、心理分析員など『心理の専門家』として【心理士】といわれることが多いです<br>
          これらは基本的に民間資格ですが、日本で唯一の国家資格である公認心理師を【心理師】といいます<br>
          カウンセラーも心理士の一部のようなもので、カウンセラーによって得意な分野が変わります</p>
      </div>
      <div class="rounded m-5 p-3 faq fadeUpTrigger fade-in-up fade-in">
        <p class="q-text">Q.心理テストの結果はどれくらい気にすれば良いのか</p>
        <p class="">A.心理テストは【投影】といって、受けた人の潜在的な意識などを写し出す鏡のようなもので受けたときの状況や状態で結果が変わってきます<br>
          もっと言えば、一つのテストだけでは正確に把握することはできません<br>
          【テストバッテリー】といって複数のテストを組み合わせていくとより適切な結果が見えてきます<br>
          テストの結果はあくまで『今のあなたに対して』なので、その結果を元にこれからどうするかを選択する材料にしてください</p>
      </div>
      <div class="rounded m-5 p-3 faq fadeUpTrigger fade-in-up fade-in">
        <p class="q-text">Q.カウンセリングを受けたいときはどこに問い合わせれば良いか</p>
        <p class="">A.Field-UPのようにフリーでの活動もしているカウンセラーもいれば、心理学会や団体でカウンセリングを実施しているところもあります
        病院で受けるものは保険対応になることがありますが、それ以外の場所では保険対象外になります<br>
        フリーで活動しているカウンセラーでも学会や心理団体に所属している人であればきちんとした知識と経験を持っているので安心してください<br>
        Field-UPは、日本カウンセリング学会、全国心理業連合会、米国NLP協会に所属しております</p>
      </div>
      <div class="rounded m-5 p-3 faq fadeUpTrigger fade-in-up fade-in">
        <p class="q-text">Q.実際のカウンセリングではどのようなことを言われるのか</p>
        <p class="">A.クライエントの方のお話を聴いて、何が悩みの種になっているのかを一緒に考えていきます<br>
        表面的に見えている問題が解決しても、その問題が起きてしまった【本質】とどう向き合うかがカウンセリングの目的になります<br>
        私たちカウンセラーができることはとても少ないです<br>
        ただ私たちの【聴く力】でクライエントの問題解決のお手伝いをしていきます</p>
      </div>
      <div class="rounded m-5 p-3 faq fadeUpTrigger fade-in-up fade-in">
        <p class="q-text">Q.どのような人がカウンセラーなのか</p>
        <p class="">A.一概には言えませんが、誰かのために何かをしてあげたい、誰かの話を聴いて少しでも力になってあげたいという方が多いです<br>
        共通して言えるのは【人が好き】ということ思います<br>
        いろんな人の思いを受け止めていくため、カウンセラー自身が知らず知らずのうちに心にダメージを受けていきますが、セルフケアの訓練も私たちはは受けています<br>
        とてもやりがいのある職業です</p>
      </div>
      <div class="rounded m-5 p-3 faq fadeUpTrigger fade-in-up fade-in">
        <p class="q-text">Q.カウンセリングは気軽に受けても良いのか</p>
        <p class="">A.はい、是非気軽に受けてください<br>
        日本ではまだまだカウンセリングは普及してませんが、アメリカなどの海外では当たり前のようにみんなが受けています<br>
        病院で診察を受けるより、カウンセリングを受ける割合の方が多いぐらいです<br>
        皆さんの身近にカウンセリングという言葉がある時代が近づいてきています</p>
      </div>
      <div class="rounded m-5 p-3 faq fadeUpTrigger fade-in-up fade-in">
        <p class="q-text">Q.心理学とはどのような学問なのか</p>
        <p class="">A.基本は心に関することを学ぶ学問です<br>
        しかし、応用心理学の分野になると様々な分野とコラボをしております<br>
        人工知能の研究、言語学、哲学、神経生物学、各医学、工学など心理学が全くかかわってい名に分野はないと言っても過言ではないです<br>
        有名なフロイトさんも実は物理学からスタートし、のちに生理学でカエルやウナギの研究をしていました<br>
        Field-UPも機械工学からスタートし、様々な分野に今でも関わっています<br>
        今世の中にあるものはすべて『人間』が生み出したものです<br>
        その『人間』のこともっと知れば、あまた新しいものが生まれるきっかけになりえます</p>
      </div>
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
質問とお問合わせ|Field-UP 心理事業
@endsection