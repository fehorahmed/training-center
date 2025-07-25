<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $courses = Course::with('batches')->where('status', 1)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('frontend.home', compact('courses'));
    }
    public function contactUs(){
        return view('frontend.contact_us');
    }
}
