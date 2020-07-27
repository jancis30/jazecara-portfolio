<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [

    'title','content','featured'
    ];

    public function getFeaturedAttribute($featured) {
        
        return asset($featured);
    }
}
