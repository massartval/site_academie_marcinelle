<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function index() 
    {
        $groups = Group::get();
        return view('groups.index', compact('groups'));
    }

    public function dashboardIndex() 
    {
        $groups = auth()->user()->profile->isStudentInGroup;
        return view('groups.index', compact('groups'));
    }
}
