<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class ContentsListController extends Controller
{
    public function show() {
        return view('contents_list');
    }
}