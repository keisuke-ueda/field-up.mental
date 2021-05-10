@extends('layouts.common')

@section('content')
<div id="care">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 item text-dark">
        <div class="card border-0 bg-transparent">
          <div class="card-header border-0 bg-transparent">
            <h1 class="text-center">
              チャットケアログイン
            </h1>
          </div>
          @guest
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <p class="text-center">
                  ログインしていません。
                </p>
                <p class="text-center">{{ __('Please Enter your email address and password.') }}</p>
              </div>
            </div>
            <form method="POST" action="{{ route('login') }}">
              @csrf

              <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address')
                  }}</label>

                <div class="col-md-6">
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                  @error('email')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>

              <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password')
                  }}</label>

                <div class="col-md-6">
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="current-password">

                  @error('password')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-6 offset-md-4">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember')
                      ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                      {{ __('Remember Me') }}
                    </label>
                  </div>
                </div>
              </div>

              <div class="form-group row mb-0">
                <div class="col-md-12 text-center">
                  @if (Route::has('password.request'))
                  <p class="text-center">
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                      {{ __('Forgot Your Password?') }}
                    </a>
                  </p>
                  @endif
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12 text-center">
                  <p>入室IDを入力してください。</p>
                </div>
                <label for="entry-id" class="col-md-4 col-form-label text-md-right">入室ID</label>
                <div class="col-md-6">
                  <input id="#" type="text" class="#" name="#" required>
                </div>
              </div>
              <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-primary">
                  チャットログイン
                </button>
              </div>
            </form>

          </div>
          @else
          <div class="card-body">
            <div class="form-group row">
              <div class="col-sm-12">
                <p class="text-center">
                  {{ Auth::user()->name }}
                  さんでログイン中です。
                </p>
              </div>
              <div class="col-sm-12 text-center">
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                  利用せずに{{ __('Logout') }}する
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                </form>
              </div>
            </div>
            <form method="POST" action="#">
              <div class="col-md-12">
                <p class="text-center">入室IDを入力してください。</p>
              </div>
              <div class="form-group row">
                <label for="entry-id" class="col-md-4 col-form-label text-md-right">入室ID</label>
                <div class="col-md-6">
                  <input id="#" type="text" class="#" name="#" required>
                </div>
              </div>
              <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-primary">
                  チャットログイン
                </button>
              </div>
              </form>
          </div>
          @endguest
        </div>
      </div>
    </div>
  </div>
</div>
<!-- <div id="app">
  <main-component></main-component>
</div> -->
<input type="button" value="新しいウィンドウで開く" onclick="openWindow()"/>
@endsection

@section('js')
<script>
function openWindow() {
  window.open("{{route('home')}}", null, 'width=500,toolbar=yes,menubar=yes,scrollbars=yes');
};
</script>
@endsection

@section('title')
チャットケア
@endsection