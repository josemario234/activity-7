<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class roboticsKit extends Model
{
    public function Kits() { 
    return $this->hasMany(Courses::class); 
    }
}
