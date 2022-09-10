<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    // Connect the role to many groups in groups_profiles_roles pivot table
    public function groups() 
    {
        return $this->belongsToMany(Group::class, 'groups_profiles_roles');
    }

    // Connect the role to many profiles in groups_profiles_roles pivot table
    public function profiles() 
    {
        return $this->belongsToMany(Profile::class, 'groups_profiles_roles');
    }

    public function groups_profiles_roles() 
    {
        return $this->hasMany(GroupsProfilesRoles::class);
    }
}
