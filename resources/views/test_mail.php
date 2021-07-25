<html>
<head>
  <meta charset="utf-8" />
</head>
<body>
<?php
  mb_language("Japanese");
  mb_internal_encoding("UTF-8");

  $to = 'keisuke.ueda@field-up.work';
  $subject = '相談内容(心理サイトより)';
  $headers = $_POST['to'];
  $check = $_POST['kakunin'];
  $message = '名前 : '.$_POST['kanji']."\n".'問い合わせ内容 : '.$_POST['message'];

  if (!empty($headers))
  {
    if ($headers == $check)
    {
      if(mb_send_mail($to,$subject,$message,$headers)){
        readfile('送信完了ページ.html');
      }
      else{
        readfile('送信失敗ページ.html');
      }
    }
    else {
      readfile('送信失敗ページ.html');
    }
  }
  else {
    readfile('送信失敗ページ.html');
  }

 ?>
</body>
</html>
