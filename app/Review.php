<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'reviews';

    protected $fillable = [
        "title",
        "body",
        "author_id",
        "movie_id"
    ];

    public function movie(){
        return $this->belongsTo(Movie::class);
    }

    public function rates() {
        return $this->belongsToMany(Rate::class)->withTimestamps();
    }
}
