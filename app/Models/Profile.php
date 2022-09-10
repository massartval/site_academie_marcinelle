<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    // Connect the profile to a user
    public function user() 
    {
        return $this->belongsTo(User::class);
    }

    // Connect the profile to many groups in groups_profiles_roles pivot table
    public function groups() 
    {
        return $this->belongsToMany(Group::class, 'groups_profiles_roles');
    }

    // Connect the profile to many roles in groups_profiles_roles pivot table
    public function roles() 
    {
        return $this->belongsToMany(Role::class, 'groups_profiles_roles');
    }

    public function groups_profiles_roles() 
    {
        return $this->hasMany(GroupsProfilesRoles::class);
    }
}
