<header style="background-color: #dcebf9;">
  <div class="xxxx" style="height: 150px;">  
    <img src="image/屋号ロゴ.png" alt="" width="300px" height="" style="margin-left: 25px; margin-top: 50px;">
  </div>
  <nav class="navbar navbar-expand-md navbar-light" style="background-color: #8ca7e1;">
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto w-100 nav-justified text-nowrap">
        <li class="nav-item">
          <a class="nav-link" href="/home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('introduction.show') }}">Introduction</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('news.show') }}">News</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('egogram.show') }}">PsychologyTest</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href=" {{ route('contents_list.show') }}">Content</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('care.show') }}">Care</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('contacts_faq.show') }}">Contacts&FAQ</a>
        </li>

        @guest
          @if (Route::has('login'))
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>
          @endif
          
          @if (Route::has('register'))
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
              </li>
          @endif
        @else
          <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }}
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
              </div>
          </li>
        @endguest
      </ul>
    </div>
  </nav>
</header>