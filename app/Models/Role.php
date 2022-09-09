<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    // Connect the role to many groups in group_profile_role pivot table
    public function groups() 
    {
        return $this->belongsToMany(Group::class, 'group_profile_role');
    }

    // Connect the role to many profiles in group_profile_role pivot table
    public function profiles() 
    {
        return $this->belongsToMany(Profile::class, 'group_profile_role');
    }
}
