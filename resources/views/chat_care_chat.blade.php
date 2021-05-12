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
  <!-- <div class="container">
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
  </div> -->

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
    <form method="POST" action="{{route('chat_care.add')}}">
      @csrf
      <div class="comment-container row justify-content-center">
        <div class="input-group comment-area">
          <textarea class="form-control w-100" id="comment" name="comment" placeholder="push massage (shift + Enter)"
            aria-label="With textarea"
            onkeydown="if(event.shiftKey&&event.keyCode==13){document.getElementById('submit').click();return false};"></textarea>
          <button type="submit" id="submit" class="btn btn-primary comment-btn mx-auto">Submit</button>
        </div>
      </div>
    </form>
  </div>
</div>
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

  function get_data() {
    $.ajax({
      url: "result/ajax/",
      dataType: "json",
      success: data => {
        $("#comment-data")
          .find(".comment-visible")
          .remove();

        for (var i = 0; i < data.comments.length; i++) {
          var html = '';
          if ((data.comments[i].name) === "横田秀喜"){
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
                            // <div id="chat-frame" style="height: 400px;">
                            //   <p class="chat-talk">
                            //     <span class="talk-icon">
                            //       <img src="" alt="tartgeticon" width="XX" height="XX" />
                            //     </span>
                            //     <span class="talk-content">[トーク内容を記載]</span>
                            //   </p>
                            //   <p class="chat-talk mytalk">
                            //     <span class="talk-icon">
                            //       <img src="" alt="myicon" width="XX" height="XX" />
                            //     </span>
                            //     <span class="talk-content">[トーク内容を記載]</span>
                            //   </p>
                            // </div>

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
                            // <div id="chat-frame" style="height: 400px;">
                            //   <p class="chat-talk">
                            //     <span class="talk-icon">
                            //       <img src="" alt="tartgeticon" width="XX" height="XX" />
                            //     </span>
                            //     <span class="talk-content">[トーク内容を記載]</span>
                            //   </p>
                            //   <p class="chat-talk mytalk">
                            //     <span class="talk-icon">
                            //       <img src="" alt="myicon" width="XX" height="XX" />
                            //     </span>
                            //     <span class="talk-content">[トーク内容を記載]</span>
                            //   </p>
                            // </div>
          }
          $("#comment-data").append(html);
        }
      },
      error: () => {
        alert("ajax Error");
      }
    });

    setTimeout("get_data()", 3000);
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