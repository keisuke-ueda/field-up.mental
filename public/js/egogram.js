$(function () {
  $('#button-1').click(function() {
    alert('ボタンテスト');
  });
});

$(function () {
  $('#openModal').click(function(){
      $('#modalArea').fadeIn();
  });
});

$(function () {
  $('#closeModal , #modalBg').click(function(){
    $('#modalArea').fadeOut();
  });
});

$(function () {
  $('#result-1').click(function() {
    $('#result_content-1').fadeIn();
  });
});

$(function () {
  $('#closeContent , #modalBg').click(function () {
    $('#result_content-1').fadeOut();
  });
});


// グラフ描画
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

function onClick() {

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