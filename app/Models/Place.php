<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Place extends Model
{
    use HasFactory;

    #One to Many (Inverse) / Belongs To
    public function category(){
        return $this->belongsTo(Category::class);
    }

 #One to Many Inverse
    public function parent(){
        return $this->belongsTo(Place::class, 'category_id');
    }

    #One to Many
    public function children(){
        return $this->hasMany(Place::class, 'category_id');
    }

    #One to Many
    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
