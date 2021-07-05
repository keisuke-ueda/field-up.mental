<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class PsychologyTestController extends Controller
{
    public function show() {
        return view('psychology_test');
    }

    public function select($page_number) {
        return redirect("psychology_test/egogram");
    }
}