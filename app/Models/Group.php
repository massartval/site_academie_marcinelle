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

    // Connect the group to many profiles in groups_profiles_roles pivot table
    public function profiles() 
    {
        return $this->belongsToMany(Profile::class, 'groups_profiles_roles');
    }

    // Connect the group to many roles in groups_profiles_roles pivot table
    public function roles() 
    {
        return $this->belongsToMany(Role::class, 'groups_profiles_roles');
    }

    public function groups_profiles_roles() 
    {
        return $this->hasMany(GroupsProfilesRoles::class);
    }
}
