<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Group;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // No need for authentication to reach home
        // $this->middleware('auth');
    }

    /**
     * Show the application homepage.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $courses = Course::get();
        return view('home', compact('courses'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function show()
    {
        // Use it to return the dashboard view and any user-relevant information
        $user = auth()->user();
        $groups = $user->profile->groups()->with(
            'classroom', 
            'course', 
            'level', 
            'teachers.user', 
            'students.user'
            )->orderBy('course_id')->get();
        return view('dashboard', compact('groups', 'user'));
    }
}
