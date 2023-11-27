// 動きのきっかけとなるアニメーションの名前を定義
$(function() {
    // スクロールイベント
    $(window).scroll(function() {
        // フェードアニメーションを呼び出す
        fadeAnime();
    });
    $(window).ready(function() {
        // フェードアニメーションを呼び出す
        fadeAnime();
    });
    
    // フェードアニメーションの設定
    function fadeAnime() {
        $('.fadeUpTrigger').each(function() {
        // 縦位置を取得
        let target = $(this).offset().top;
        // スクロール位置
        let scroll = $(window).scrollTop();

        console.log(target);
        console.log(scroll);

        // 要素の縦位置から表示画面の高さを引いて200pxを足した数字よりscrollのほうが大きい場合
        if(scroll > target - 500) {
            // .fadeUpを追加する
            $(this).addClass('fadeUp');
        } else {
            // そうでない場合は.fadeUpを削除する
            $(this).removeClass('fadeUp');
        }
        });
    };    
});