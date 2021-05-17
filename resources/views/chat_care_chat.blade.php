@extends('layouts.function')

@section('content')
<div id="care">
  <div class="position-absolute ml-3 mt-3">
    <button class="btn btn-secondary" onClick="window.close(); return false;">チャット画面を閉じる</a>
  </div>

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
    <div class="chat-container row justify-content-center">
      <div class="chat-area">
        <div class="card">
          <div class="card-header">Comment</div>
          <div class="card-body chat-card">
            <div id="comment-data" class="overflow-auto" style="height: 350px;"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <form name="commentForm" method="POST" action="{{route('chat_care.add')}}" target="send-comment">
      @csrf
      <div class="comment-container row justify-content-center">
        <div class="input-group comment-area">
          <textarea class="form-control w-100" id="commentArea" name="comment" placeholder="push massage (shift + Enter)"
            aria-label="With textarea"
            onkeydown="if(event.shiftKey&&event.keyCode==13){document.getElementById('submitBtn').click();return false};"></textarea>
          <button type="button" id="submitBtn" class="btn btn-primary comment-btn mx-auto">送信</button>
        </div>
      </div>
    </form>
  </div>
</div>

<!-- 送信時に存在しないものを開かせる設定で実質何も開かなくする設定-->
<iframe name="send-comment" style="width:0px;height:0px;border:0px;"></iframe>
@endsection

@section('js')
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
@endsection

@section('js_bottom')
<script>
  $(function () {
    get_data();
  });

// 送信ボタン
var btn = document.getElementById('submitBtn');
// コメント入力欄
var commentArea = document.getElementById("commentArea");

// 送信ボタンが押された際の挙動
btn.addEventListener('click', function() {
  // submit()でフォームの内容を送信
  document.commentForm.submit();
  // コメント入力欄を空にする
  commentArea.value = '';
  // コメント入力欄にフォーカスする
  commentArea.focus();
})

  function get_data() {
    $.ajax({
      url: "result/ajax/",
      dataType: "json",
      success: data => {
        $("#comment-data")
          .find(".comment-visible")
          .remove();
        const username = '{{ $username }}';
        for (var i = 0; i < data.comments.length; i++) {
          var html = '';
          if ((data.comments[i].name) === username){
            html = `
                            <div class="media comment-visible">
                                <div class="media-body comment-body" id="chat-frame">
                                    <div class="row">
                                        <p class="chat-talk mytalk">
                                        <span class="" id="name">${data.comments[i].name}</span>
                                        <!--
                                        <span class="comment-body-time" id="created_at">${data.comments[i].created_at}</span>
                                        --!>
                                        <span class="talk-icon">
                                          <img src="image/ドラえもん.jpg" alt="myicon" width="50px" height="50px" />
                                        </span>
                                        <span class="talk-content" id="comment">${data.comments[i].comment}</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        `;
          } else {
            html = `
                            <div class="media comment-visible">
                                <div class="media-body comment-body" id="chat-frame">
                                    <div class="row">
                                        <p class="chat-talk">
                                        <span class="" id="name">${data.comments[i].name}</span>
                                        <!--
                                        <span class="comment-body-time" id="created_at">${data.comments[i].created_at}</span>
                                        --!>
                                        <span class="talk-icon">
                                          <img src="image/のび太.jpg" alt="myicon" width="50px" height="50px" />
                                        </span>
                                        <span class="talk-content" id="comment">${data.comments[i].comment}</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        `;
          }
          $("#comment-data").append(html);
        }
      },
      error: () => {
        // alert("ajax Error");
      }
    });

    setTimeout("get_data()", 1000);
  }
</script>
@endsection

@section('style')
<style>
  #care {
    height: 100%;
  }

  textarea {
    resize: none !important;
  }
</style>

@section('title')
チャット
@endsection