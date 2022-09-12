<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;

    // Connect the level to many groups
    public function groups() 
    {
        return $this->hasMany(Group::class);
    }
}
