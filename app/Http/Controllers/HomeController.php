<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\OurLeader;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $courses = Course::with('batches')->where('status', 1)
            ->orderBy('created_at', 'desc')
            ->get();
        $leaders = OurLeader::where('status', 1)
            ->orderBy('created_at', 'desc')
            ->get();
        return view('frontend.home', compact('courses', 'leaders'));
    }
    public function contactUs(){
        return view('frontend.contact_us');
    }
    public function courseView($course){
        $course = Course::where('name', $course)->firstOrFail();
        if (!$course || $course->status != 1) {
            abort(404);
        }

        return view('frontend.course_view', compact('course'));
    }
    public function leaderView($leader){
        $leader = OurLeader::where('slug', $leader)->firstOrFail();
        if (!$leader || $leader->status != 1) {
            abort(404);
        }

        return view('frontend.leader_view', compact('leader'));
    }
}
