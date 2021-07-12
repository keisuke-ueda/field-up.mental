<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class MakingNowController extends Controller
{
    public function show() {
        return view('making_now');
    }


}