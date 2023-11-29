jQuery(function ($) {
    var fadeIn = $('.fadeUpTrigger');
    $(window).on('scroll', function () {
      $(fadeIn).each(function () {
        var offset = $(this).offset().top;
        var scroll = $(window).scrollTop(); 
        var windowHeight = window.innerHeight;

        var kijun = offset - windowHeight;
        console.log(scroll);
        console.log(offset);
        console.log(windowHeight);
        console.log(kijun);

        // 要素の縦位置から表示画面の高さを引いて200pxを足した数字よりscrollのほうが大きい場合
        if(scroll > kijun + 150 ) {
            // .fadeUpを追加する
            $(this).addClass('fadeUp');
        } else {
            // そうでない場合は.fadeUpを削除する
            $(this).removeClass('fadeUp');
        }
      });
    });
  });





// $(function() {
//     // スクロールイベント
//     $(window).scroll(function() {
//         // フェードアニメーションを呼び出す
//         fadeAnime();
//     });

    
//     // フェードアニメーションの設定
//     // 数値変更
//     function fadeAnime() {
//         $('.fadeUpTrigger').each(function() {
//         var offset = $(this).offset().top;
//         var scroll = $(window).scrollTop(); 
//         const windowHeight = $(window).height();
//         var kijun = offset - windowHeight;

//         console.log(scroll);
//         console.log(windowHeight);
//         console.log(offset);
//         console.log(kijun);

//         // 要素の縦位置から表示画面の高さを引いて200pxを足した数字よりscrollのほうが大きい場合
//         if(scroll > kijun + 150 ) {
//             // .fadeUpを追加する
//             $(this).addClass('fadeUp');
//         } else {
//             // そうでない場合は.fadeUpを削除する
//             $(this).removeClass('fadeUp');
//         }
//         });
//     };    
// });


// let fadeInTarget = document.querySelectorAll('.fadeUpTrigger fade-in-up');
// window.addEventListener('scroll', () => {
//   for (let i = 0; i < fadeInTarget.length; i++){
//     const rect = fadeInTarget[i].getBoundingClientRect().top;
//     const scroll = window.pageYOffset || document.documentElement.scrollTop;
//     const offset = rect + scroll;
//     const windowHeight = window.innerHeight; // 現在のブラウザの高さ
    
//     console.log(windowHeight);
//     console.log(offset);
//     console.log(rect);

//     if (scroll > offset - windowHeight + 150) {
//       fadeInTarget[i].classList.add('fadeUp');
//     }
//   }
// });