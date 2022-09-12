<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    // Connect the course to a domain
    public function domain() 
    {
        return $this->belongsTo(Domain::class);
    }

    // Connect the course to many groups
    public function groups() 
    {
        return $this->hasMany(Group::class);
    }
}
