<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'parent', 'title', 'slug', 'description', 'is_visible',
    ];

     public function posts()
    {
        return $this->hasMany('App\Post');
    }

    public function parentCategory()
    {
        return $this->belongsTo('App\Category', 'parent');
    }

    public function childCategory()
    {
        return $this->hasMany('App\Category', 'parent');
    }
}


