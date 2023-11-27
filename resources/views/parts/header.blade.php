<header> 
  <nav class="navbar navbar-expand-lg navbar-light bg-white p-2">
    <a href="{{ route('home') }}">
      <img src="{{ asset('/image/屋号ロゴ.png') }}" alt="屋号ロゴ" class="logo"/>
    </a>
    <a class="navbar-brand sp-br" href="#"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav nav-center nav-text">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('introduction.show') }}">事業紹介</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="{{ route('news.show') }}">News</a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link" href="{{ route('psychology_test.show') }}">心理テスト</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href=" {{ route('contents_list.show') }}">動画コンテンツ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href='{{ route("care.show") }}'>ケア・カウンセリング</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{ route('contacts_faq.show') }}">お問合せ&FAQ</a>
        </li>
      </ul>
    </div>
  </nav>
</header>