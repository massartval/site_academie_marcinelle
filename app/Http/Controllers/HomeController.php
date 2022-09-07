<?php

namespace App\Http\Controllers;

use App\Models\Course;
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
        $groups = auth()->user()->profile->groups()->orderBy('course_id')->get();
        return view('dashboard', compact('groups'));
    }
}
