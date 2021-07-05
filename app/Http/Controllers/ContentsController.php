<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class ContentsController extends Controller
{
    public function select($page_number) {
        return view("contents/content${page_number}");
    }
}