<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    // Connects the profile to a user
    public function user() 
    {
        return $this->belongsTo(User::class);
    }

    // Connects the profile to many groups
    public function groups() 
    {
        return $this->belongsToMany(Group::class);
    }
}
