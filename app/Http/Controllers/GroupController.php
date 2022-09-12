<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\GroupsProfilesRoles;
use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function index() 
    {   
        
        // 1) Working solution, but lots of queries 
        $groups = Group::with('course', 'teachers.profile.user', 'students.profile.user')->orderBy('course_id')->get();

        // 2) Kind of working solution, only 5 queries but I get all the records of profiles-roles, whereas I want only those from the group
        //$groups = Group::with('course','profiles.user', 'profiles.roles')->get(); 

        // 3) Working solution, 6 queries, but I get a collection of full rows, whereas I would like groups[]->students[] and groups[]->teachers[]
        //$gpr = GroupsProfilesRoles::with('group.course', 'profile.user', 'role')->orderBy('group_id')->get();
        return view('groups.index', compact('groups'));
    }
}
