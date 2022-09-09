<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    // Connect the group to a course
    public function course() 
    {
        return $this->belongsTo(Course::class);
    }

    // Connect the group to many profiles in group_profile_role pivot table
    public function profiles() 
    {
        return $this->belongsToMany(Profile::class, 'group_profile_role');
    }

    // Connect the group to many roles in group_profile_role pivot table
    public function roles() 
    {
        return $this->belongsToMany(Role::class, 'group_profile_role');
    }
}
