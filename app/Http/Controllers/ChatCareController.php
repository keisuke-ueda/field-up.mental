<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class ChatCareController extends Controller
{
    public function login() {
        return view('chat_care');
    }

    public function chat() {
        return view('chat_care_chat');
    }
}