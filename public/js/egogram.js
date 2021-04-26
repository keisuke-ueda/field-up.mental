$(function () {
  $('#button-1').click(function() {
    alert('ボタンテスト');
  });
});

$(function () {
  $('#openModal').click(function(){
      $('#modalArea').fadeIn();
  });
  // $('#closeModal , #modalBg').click(function(){
  //   $('#modalArea').fadeOut();
  // });
});

$(function () {
  $('#closeModal , #modalBg').click(function(){
    $('#modalArea').fadeOut();
  });
});