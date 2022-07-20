<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    public function reviews(){
        return $this->belongsToMany(Review::class)->withTimestamps();
    }
}
