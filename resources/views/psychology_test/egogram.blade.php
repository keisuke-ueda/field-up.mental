@extends('layouts.common')

@section('content')
<div id="psychology_test">

  <div class="container page_title">
    <div class="row justify-content-center">
      <div class="col-md-12" style="height: 50px;">
      </div>
      <div class="col-md-7 item align-self-center">
        <h1 style="text-align: center;">エゴグラム</h1>
        <p style="text-align: center;">あなたの特性を知ろう！！</p>
      </div>
      <div class="col-md-12" style="height: 50px;">
      </div>
    </div>
  </div>


  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10 item" style="background-color: rgb(199, 114, 185);">
        <form action="#" method="post">
          <table class="table mt-5">
            <tbody>
              <tr>
                <th>質問</th>
                <th>○</th>
                <th>△</th>
                <th>✗</th>
              <tr>
                @foreach($arrays as $array)
              <tr>
                <td>{{ $array['question'] }}</td>
                <td>
                  <input type="radio" onclick="onClick()" value="round_count" name="ego<?=$array['id']?>" />
                </td>
                <td>
                  <input type="radio" onclick="onClick()" value="triangle_count" name="ego<?=$array['id']?>" />
                </td>
                <td>
                  <input type="radio" onclick="onClick()" value="cross_count" name="ego<?=$array['id']?>" />
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </form>
      </div>
      <div class="w-100 " style="height: 50px;">
      </div>
      <div class="w-100">
        <button type="button" class="btn btn-secondary mx-auto d-block btn-lg"
          onclick="OnButtonClick();">どうなるかな？</button>
      </div>
      <div class="col-md-2">
      </div>
    </div>
  </div>


  <div style="height: 100px;">
  </div>


  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10 overflow-auto" style="height: 400px; background-color:rgb(226, 235, 232);">
        <canvas id="ex_chart"></canvas>
      </div>
      <div class="w-100 " style="height: 50px;">
      </div>
      <div class="w-100">
        <button type="button" class="btn btn-secondary mx-auto d-block btn-lg" id="openModal">分析してみよう</button>
      </div>
      <div class="col-md-2">
      </div>
    </div>
    <div class="col-md-12" style="height: 100px;">
    </div>
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
</div>
@endsection

@section('js')
<script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="{{ asset('/js/egogram.js') }}" defer></script>
@endsection

@section('title')
エゴグラム
@endsection