<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class ContactsFaqController extends Controller
{
    public function show() {
        return view('contacts_faq');
    }
}