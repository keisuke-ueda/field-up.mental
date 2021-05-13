<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Comment;

use Illuminate\Support\Facades\Auth;
 
class ChatCareController extends Controller
{
    public function login() {
        return view('chat_care_login');
    }

    public function auth() {
        if ( Auth::check() ) {
            // ログインしている時
            return view('chat_care_chat');
          } else {
              //ログインしていない時
            return view('chat_care_login');
          }
    }
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function chat()
    {
        $comments = Comment::get();
        $user = \Auth::user();
        $username = $user->name;
        return view('chat_care_chat')->with([
            'comments' => $comments,
            'username' => $username
            ]);
    }

    public function add(Request $request)
    {
        $user = Auth::user();
        $comment = $request->input('comment');
        Comment::create([
            'login_id' => $user->id,
            'name' => $user->name,
            'comment' => $comment
        ]);
        return redirect()->route('chat_care.chat');
    }

    public function getData()
    {
        $comments = Comment::orderBy('created_at', 'desc')->get();
        $json = ["comments" => $comments];
        return response()->json($json);
    }
}