<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Movie extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'movies';

    protected $fillable = [
        "title",
        "description"
    ];

    public function reviews() {
        return $this->hasMany(Review::class);
    }
}
