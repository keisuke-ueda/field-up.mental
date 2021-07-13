@extends('layouts.common')

@section('content')

<div class="contacts_faq">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12" style="height: 50px;">
        </div>
        <div class="col-md-7 page_title">
          <h1 class="text-center">よくある質問</h1>
          <p class="">Q.</p>
          <p class="">A.</p>
          <p class="">Q.</p>
          <p class="">A.</p>
          <p class="">Q.</p>
          <p class="">A.</p>
          <p class="">Q.</p>
          <p class="">A.</p>
        </div>
        <div class="col-md-12" style="height: 50px;">
        </div>
      </div>
    </div>
</div>

<div class="contacts_faq">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12" style="height: 50px;">
      </div>
      <div class="col-md-7 page_title">
        <h1 class="text-center">お問い合わせ</h1>
        <p class="text-center"></p>
      </div>
      <div class="col-md-12" style="height: 50px;">
      </div>
    </div>
  </div>

  <div class="container my-5">
    <form method="post" action="">
      <div class="form-group">
        <input type="email" name="email" class="form-control" placeholder="メールアドレス">
      </div>
      <div class="form-group">
        <input type="text" name="name" class="form-control" placeholder="お名前">
      </div>
      <div class="form-group">
        <textarea rows="4" cols="50" placeholder="質問などはこちらへお願い致します。" name="" type="text" class="form-control"></textarea>
      </div>
      <div class="text-center">
        <button type="submit" class="btn btn-primary">送信</button> 
      </div>
    </form>
  </div>

@endsection

@section('js')
@endsection

@section('title')
よくある質問とお問い合わせ
@endsection