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

    // Connect the profile to many groups in group_profile_role pivot table
    public function groups() 
    {
        return $this->belongsToMany(Group::class, 'group_profile_role');
    }

    // Connect the profile to many roles in group_profile_role pivot table
    public function roles() 
    {
        return $this->belongsToMany(Role::class, 'group_profile_role');
    }
}
