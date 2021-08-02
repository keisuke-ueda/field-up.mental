<!doctype html>
<html lang="ja">
  <head>
      <meta charset="UTF-8">
      <title>送信完了ページ</title>
      <meta name="description" content="送信完了ページ">
      <!--<link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">-->
      <link href="style.css" rel="stylesheet">
      <link rel="icon" href="fig/屋号ロゴ(不可能図形のみ).jpg">
      <style type="text/css">
        .button {
          display       : inline-block;
          border-radius : 5%;          /* 角丸       */
          font-size     : 18pt;        /* 文字サイズ */
          text-align    : center;      /* 文字位置   */
          cursor        : pointer;     /* カーソル   */
          padding       : 12px 12px;   /* 余白       */
          background    : #000066;     /* 背景色     */
          color         : #ffffff;     /* 文字色     */
          line-height   : 1em;         /* 1行の高さ  */
          transition    : .3s;         /* なめらか変化 */
          box-shadow    : 6px 6px 3px #666666;  /* 影の設定 */
          border        : 2px solid #000066;    /* 枠の指定 */
        }
        .button:hover {
          box-shadow    : none;        /* カーソル時の影消去 */
          color         : #000066;     /* 背景色     */
          background    : #ffffff;     /* 文字色     */
        }
        </style>
  </head>
  <body>
    <header>
      <h1>送信完了いたしました</h1>
    </header>
    <label>送信できました</label>
    <a class="send button" href="{{route('contacts_faq.show')}}">戻る</a><br>
  </body>
  <footer>
    <p> </p>
  </footer>
</html>
