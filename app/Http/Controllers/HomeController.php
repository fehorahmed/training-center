<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('frontend.home');
    }
    public function contactUs(){
        return view('frontend.contact_us');
    }
}
