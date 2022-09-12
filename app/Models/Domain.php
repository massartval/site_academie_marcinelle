<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    use HasFactory;

    // Connect the domain to many courses
    public function courses() 
    {
        return $this->hasMany(Course::class);
    }
}
