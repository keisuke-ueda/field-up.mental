@extends('layouts.common')

@section('content')
<?php $bg_img = asset('/image/背景テスト8.jpg'); ?>

<div class="parallax-bg" style="background-image: url('{{$bg_img}}'); height: 50px;">
</div>

<div class="parallax-bg" style="background-image: url('{{$bg_img}}');">
  <div class="container parallax-bg" style="background-image: url('{{$bg_img}}');">
    <div class="scrollbox" style="height: auto; color: white;">
      <div class="row parallax-bg" style="background-image: url('{{$bg_img}}');">
        <div class="col-md-3 parallax-bg" style="background-image: url('{{$bg_img}}');">
        </div>
        <div class="col-md-6">
          <h1 style="text-align: center;">エゴグラム</h1>
          <p style="text-align: center;">あなたの特性を知ろう！！</p>
        </div>
        <div class="col-md-3 parallax-bg" style="background-image: url('{{$bg_img}}');">
        </div> 
      </div>
    </div>
  </div>
</div>

<div class="parallax-bg" style="background-image: url('{{$bg_img}}'); height: 20px;">
</div>


<div class="parallax-bg" style="background-image: url('{{$bg_img}}');">
  <div class="container parallax-bg" style="background-image: url('{{$bg_img}}');">
    <div class="scrollbox" style="height: auto; color: white;">
      <div class="row justify-content-center parallax-bg" style="background-image: url('{{$bg_img}}');">
        <!-- 位置調整用カラム-->
        <div class="col-md-10" style="background-color:aquamarine;">
          <form action="#" method="post">
            <h4>ⅰ</h4>
            <table class="table mt-5">
              <tbody>
                <tr>
                  <th>id</th>
                  <th>質問</th>
                  <th>○</th>
                  <th>△</th>
                  <th>✗</th>
                <tr>
                  @foreach($arrays as $array)
                <tr>
                  <td>{{ $array['id'] }}</td>
                  <td>{{ $array['question'] }}</td>
                  <td>
                    <input type="radio" value="round_count" name="ego<?=$array['id']?>" />
                  </td>
                  <td>
                    <input type="radio" value="triangle_count" name="ego<?=$array['id']?>" />
                  </td>
                  <td>
                    <input type="radio" value="cross_count" name="ego<?=$array['id']?>" />
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </form>
        </div>
        <div class="w-100 parallax-bg" style="background-image: url('{{$bg_img}}'); height: 50px;">
        </div>
        <div class="w-100">
          <button type="button" class="btn btn-secondary mx-auto d-block btn-lg" onclick="OnButtonClick();">どうなるかな？</button>
        </div>
        <!-- 位置調整用カラム-->
        <div class="col-md-2 parallax-bg" style="background-image: url('{{$bg_img}}');">
        </div>
      </div>
    </div>
  </div>
</div>

<div class="parallax-bg" style="background-image: url('{{$bg_img}}'); height: 100px;">
</div>


<div class="parallax-bg" style="background-image: url('{{$bg_img}}');">
  <div class="container parallax-bg" style="background-image: url('{{$bg_img}}');">
    <div class="scrollbox" style="height: auto; color: white;">
      <div class="row justify-content-center parallax-bg" style="background-image: url('{{$bg_img}}');">
        <!-- 位置調整用カラム-->
        <div class="col-md-10 overflow-auto" style="height: 400px; background-color:rgb(226, 235, 232);">
          <canvas id="ex_chart"></canvas>
        </div>
        <div class="w-100 parallax-bg" style="background-image: url('{{$bg_img}}'); height: 50px;">
        </div>
        <div class="w-100">
          <button type="button" class="btn btn-secondary mx-auto d-block btn-lg" id="openModal">分析してみよう</button>
        </div>
        <!-- 位置調整用カラム-->
        <div class="col-md-2 parallax-bg" style="background-image: url('{{$bg_img}}');">
        </div>
      </div>
    </div>
  </div>
</div>


<div class="parallax-bg" style="background-image: url('{{$bg_img}}'); height: 100px;">
</div>

<!-- モーダルエリアここから -->
<section id="modalArea" class="modalArea">
  <div id="modalBg" class="modalBg"></div>
  <div class="modalWrapper">
    <div class="modalContents">
      <h1>診断結果一覧</h1>
      <button id="result-1">結果1</button>
      <div id="result_content-1" class="result_content-1">
        <div id="modalBg" class="modalBg"></div>
        <div class="modalWrapper">
          <div class="modalContents">
            <h1>結果1内容</h1>
          </div>
        </div>
      </div>
    </div>
    <div id="closeModal" class="closeModal">
      ×
    </div>
  </div>
</section>
<!-- モーダルエリアここまで -->
@endsection

@section('js')
<script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="{{ asset('/js/egogram.js') }}" defer></script>
@endsection

@section('title')
エゴグラム
@endsection