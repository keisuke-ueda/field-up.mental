<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class EditMemberInfoController extends Controller
{
    public function show() {
        return view('edit_member_info');
    }
}