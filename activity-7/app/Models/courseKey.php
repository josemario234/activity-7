<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class courseKey extends Model
{
    public function CoursesKeys() { 
    return $this->hasMany(Courses::class); 
    }
}
