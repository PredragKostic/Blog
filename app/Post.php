<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'slug', 'user_id', 'category_id', 'summary', 'image1', 'image2', 'content', 'is_visible', 'published_at', 'views',
    ];

    public function getImagePath($fileName){

        return 'storage/'. request()->file($fileName)->storeAs('posts', $this->slug . '-' . $this->id. $fileName. '.' . request()->file($fileName)->getClientOriginalExtension());

    }

    /**
     * Get the post that belongs to user.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Get the post that belongs to category.
     */
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
}
