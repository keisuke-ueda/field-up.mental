@extends('layouts.function')

@section('content')
<div id="care">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12" style="height: 50px;">
      </div>
      <div class="col-md-7 page-title">
        <h1 class="text-center">チャット</h1>
      </div>
      <div class="col-md-12" style="height: 50px;">
      </div>
    </div>
  </div>
  
  <div class="container">
    <div class="row">
      <div id="chat-frame" style="height: 400px;">
        <p class="chat-talk">
          <span class="talk-icon">
            <img src="" alt="tartgeticon" width="XX" height="XX" />
          </span>
          <span class="talk-content">[トーク内容を記載]</span>
        </p>
        <p class="chat-talk mytalk">
          <span class="talk-icon">
            <img src="" alt="myicon" width="XX" height="XX" />
          </span>
          <span class="talk-content">[トーク内容を記載]</span>
        </p>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="w-100" style="height: 30px;">
      </div>
      <div class="text-center">
        <textarea class="w-50" style="height: 50px;"></textarea>
      </div>
    </div>
  </div>
</div>
@endsection

@section('js')
@endsection

@section('style')
<style>
  #care {
    height: 100%;
  }
  textarea {
    resize: none!important;
  }
</style>

@section('title')
チャット
@endsection