<header style="background-color: #dcebf9;">
  <div class="container-fruid">
    <div class="row">
      <div class="col-md-7" style="height: 150px;">  
        <a href="{{ route('home') }}"><img src="{{ asset('/image/屋号ロゴ.png') }}" alt="" width="300px" height="" style="margin-left: 25px; margin-top: 50px;"/></a>
      </div>
      <div class="col-md-5 d-none d-md-block" style="height: 150px;">
        <div class="float-right">
          <img src="{{ asset('/image/gif_test.gif') }}" alt="" style="height: 150px;"/>
        </div>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-expand-md navbar-light" style="background-color: #8ca7e1;">
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto w-100 nav-justified text-nowrap">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('introduction.show') }}">Introduction</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('news.show') }}">News</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('psychology_test.show') }}">PsychologyTest</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href=" {{ route('contents_list.show') }}">Content</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href='{{ route("making_now.show") }}'>Care</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('contacts_faq.show') }}">Contacts&FAQ</a>
        </li>
      </ul>
    </div>
  </nav>
</header>