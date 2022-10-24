<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class Dream_analysisController extends Controller
{
    public function show() {
        return view('psychology_test/dream_analysis');
    }
}