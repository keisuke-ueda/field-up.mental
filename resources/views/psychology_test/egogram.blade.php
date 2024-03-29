@extends('layouts.common')
<meta name="description" content="エゴグラムとは自分の特性を知るための心理テストです。このテストの結果にいい悪いはありません。自分がどんなタイプなのかをきちんと知ることによって、身分で走れなかった自分を知ることができます。是非やってみてください。">
@section('content')
<div id="psychology_test">
  <div class="container pb-3">

      <div class="col-7 page-title pt-5 pb-3 d-block mx-auto">
        <h1 class="text-center">エゴグラム</h1>
        <p class="text-center text01">あなたの特性を知ろう！！</p>
      </div>

    <div class="row justify-content-center">
      <div class="col-12">
        <h3 class="text-center mx-2 p-2 eg-back">○ = 当てはまる、<br class="br-sp" />△ = どちらでもない、<br class="br-sp" />✗ = 当てはまらない、<br />で質問に答えていこう</h3>
      </div>
      @for($i = 0; $i < 5; $i++)
        <div class="col-md-6 mr-3 mt-3 mx-auto">
          <h3>エリア
            @if($i == 0)
              {{"Ⅰ"}}
            @elseif($i == 1)
              {{"Ⅱ"}}
            @elseif($i == 2)
              {{"Ⅲ"}}
            @elseif($i == 3)
              {{"Ⅳ"}}
            @elseif($i == 4)
              {{"Ⅴ"}}
            @endif
          </h3>
          <table class="table text-white mx-2 p-2 mx-auto">
            <tbody class="table-back p-4">
              {{--
                <tr>
                  <td>{{ $big_question[$i] }}</td>
                </tr>
                <tr>
                --}}
                <th>質問</th>
                <th>○</th>
                <th>△</th>
                <th>✗</th>
              <tr>
          @for ($j = 1; $j % 11 != 0; $j++)
              <tr>
                <?php
                  $array = $arrays[$i*10 + ($j-1)]; ?>
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
              @endfor
            </tbody>
          </table>
        </div>
          @endfor
      </div>


        <div class="col-10 mb-3 p-3 justify-content-center eg-back d-block mx-auto">
          <canvas id="ex_chart"></canvas>
        </div>

        <div class="w-100">
          <button type="button" class="btn btn-secondary mx-auto d-block btn-lg" id="openModal">分析してみよう</button>
        </div>
 
      </div>
      

    </div>



  <!-- モーダルエリアここから -->
  <section id="modalArea" class="modalArea">
    <div id="modalBg" class="modalBg"></div>
    <div class="modalWrapper">
      <div class="modalContents">
        <h2 class="h1">診断結果一覧</h2>
        <button id="result-1">結果1</button>
        <div id="result_content-1" class="result_content-1">
          <div id="modalBg" class="modalBg"></div>
          <div class="modalWrapper">
            <div class="modalContents">
              <h2 class="h1">結果1内容</h2>
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
エゴグラム|Field-UP 心理事業
@endsection