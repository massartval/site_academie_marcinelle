<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function show()
    {
        // Use it to return the dashboard view and any user-relevant information
        $groups = auth()->user()->profile->isStudentInGroup()->orderBy('course_id')->get();
        return view('dashboard', compact('groups'));
    }
}
