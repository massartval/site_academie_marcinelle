<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupsProfilesRoles extends Model
{
    use HasFactory;
    
    public function group() {
        return $this->belongsTo(Group::class);
    }
    
    public function profile() {
        return $this->belongsTo(Profile::class);
    }

    public function role() {
        return $this->belongsTo(Role::class);
    }
}
