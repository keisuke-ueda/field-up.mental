<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class CareController extends Controller
{
    public function show() {
        return view('care');
    }
}