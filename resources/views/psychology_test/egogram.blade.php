@extends('layouts.common')

@section('content')
<?php $bg_img = asset('/image/test_test.jpg'); ?>

<div class="parallax-bg bg" style="background-image: url('{{$bg_img}}');" style="height: 50px;">
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

<div class="parallax-bg" style="background-image: url('{{$bg_img}}');" style="height: 20px">
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
        <div class="w-100 parallax-bg" style="background-image: url('{{$bg_img}}');" style="height: 50px;">
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

<div class="parallax-bg" style="background-image: url('{{$bg_img}}');" style="height: 100px">
</div>


<div class="parallax-bg" style="background-image: url('{{$bg_img}}');">
  <div class="container parallax-bg" style="background-image: url('{{$bg_img}}');">
    <div class="scrollbox" style="height: auto; color: white;">
      <div class="row justify-content-center parallax-bg" style="background-image: url('{{$bg_img}}');">
        <!-- 位置調整用カラム-->
        <div class="col-md-10 overflow-auto" style="height: 400px; background-color:rgb(226, 235, 232);">
          <canvas id="ex_chart"></canvas>
        </div>
        <div class="w-100 parallax-bg" style="background-image: url('{{$bg_img}}');" style="height: 50px;">
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


<div class="parallax-bg" style="background-image: url('{{$bg_img}}');" style="height: 100px">
</div>

<!-- モーダルエリアここから -->
<section id="modalArea" class="modalArea">
  <div id="modalBg" class="modalBg"></div>
  <div class="modalWrapper">
    <div class="modalContents">
      <h1>Here are modal contents!</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
    </div>
    <div id="closeModal" class="closeModal">
      ×
    </div>
  </div>
</section>
<!-- モーダルエリアここまで -->
@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>
$(function () {
  $('#openModal').click(function(){
      $('#modalArea').fadeIn();
  });
  $('#closeModal , #modalBg').click(function(){
    $('#modalArea').fadeOut();
  });
});

let score_list = new Array(5);

let data = {
    labels: ["CP", "NP", "A", "FC", "AC"],
    datasets: [{
        label: 'エゴグラム',
        data: [score_list[0], score_list[1], score_list[2], score_list[3], score_list[4]],
        borderColor: 'rgba(255, 100, 100, 1)',
        lineTension: 0,
    }]
};

let ctx = document.getElementById('ex_chart');


let options = {
  scales: {
        yAxes: [{
            ticks: {
                min: 0,
                max: 20
                //beginAtZero: true
            }
        }]
  }
};

var ex_chart = new Chart(ctx, {
    type: 'line',
    data: data,
    options: options
});

function OnButtonClick() {

  for (let i = 1; i <= 5; i++) {
    let score = 0;
    for (let j = 1; j <= 10; j++) {
      let elements = document.getElementsByName('ego'+ i + '_' + j);
      let len = elements.length;
      let checkValue = '';
      
      for (let i = 0; i < len; i++){
          if (elements.item(i).checked){
              checkValue = elements.item(i).value;
          }
      }
      if (checkValue === 'round_count') {
        score += 2;
      } else if(checkValue === 'cross_count') {
        score++;
      }
    }
    score_list[i-1] = score;
  }
  console.log(score_list);
  score_list.forEach(score => console.log('score:' + score));

  var data = {
      labels: ["CP", "NP", "A", "FC", "AC"],
      datasets: [{
          label: 'エゴグラム',
          data: [score_list[0], score_list[1], score_list[2], score_list[3], score_list[4]],
          borderColor: 'rgba(255, 100, 100, 1)',
          lineTension: 0
      }]
  };

  ex_chart.destroy()
  ex_chart = new Chart(ctx, {
    type: 'line',
    data: data,
    options: options
});

}
</script>
@endsection

@section('title')
エゴグラム
@endsection