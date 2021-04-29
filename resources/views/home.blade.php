@extends('layouts.common')

@section('content')
<div id="home">
<!--
  背景テスト1:0.5
  背景テスト2:0.3
  背景テスト3:0.3
  背景テスト4:0.3
  背景テスト5:0.5
  背景テスト6:0.3
  背景テスト7:0.2
  背景テスト8:0.3
  背景テスト9:0.3
-->

  <div class="container-fruid">
    <div class="row">
      <div class="col-md-12" style="height: 50px;">
      </div>
      <div class="col-md-12 item div-link" style="height: 250px;">
        <p>心理テストへ遷移</p>
        <a class ="link" href="{{ route('psychology_test.show') }}"></a>
      </div>
      <div class="col-md-12" style="height: 50px;">
      </div>
    </div>
  </div>

  <div class="container-fruid">
    <div class="row">
      <div class="col-md-12" style="height: 50px;">
      </div>
      <div class="col-md-12 item div-link" style="height: 250px;">
        <p>コンテンツへ遷移</p>
        <a class ="link" href="{{ route('contents_list.show') }}"></a>
      </div>
      <div class="col-md-12" style="height: 50px;">
      </div>
    </div>
  </div>

  <div class="container-fruid">
    <div class="row">
      <div class="col-md-12" style="height: 50px;">
      </div>
      <div class="col-md-12 item div-link" style="height: 250px;">
        <p>ケアページへ遷移</p>
        <a class ="link" href="{{ route('care.show') }}"></a>
      </div>
      <div class="col-md-12" style="height: 50px;">
      </div>
    </div>
  </div>
</div>
@endsection

@section('js')
@endsection

@section('title')
Field-UP ~技術とヒトに寄りそう~
@endsection