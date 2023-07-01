<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(user::class); // select * from user where project_id = 1;
    }

    // $project->user
    // hasone
    // hasMany
    // belongsTo
    // belongsToMany
    // morphMany
    // morphToMany
}
