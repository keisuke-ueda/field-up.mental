<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class SendContactsController extends Controller
{
    public function send() {
        mb_language("Japanese");
        mb_internal_encoding("UTF-8");

        $view_ref = "";
      
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
              $view_ref = "successful_transmission";
            }
            else{
              $view_ref = "failure_transmission";
            }
          }
          else {
            $view_ref = "failure_transmission";
          }
        }
        else {
          $view_ref = "failure_transmission";
        }
        return view($view_ref);
      
    }
}