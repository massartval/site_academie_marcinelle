<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    // Connects the group to a course
    public function course() 
    {
        return $this->belongsTo(Course::class);
    }

    // Connects the group to many profiles
    public function profiles() 
    {
        return $this->belongsToMany(Profile::class);
    }
}
