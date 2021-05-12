<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Comment;

use Illuminate\Support\Facades\Auth;
 
class ChatCareController extends Controller
{
    public function login() {
        return view('chat_care');
    }
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function chat()
    {
        $comments = Comment::get();
        return view('chat_care_chat', ['comments' => $comments]);
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