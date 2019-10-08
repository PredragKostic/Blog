<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    protected $fillable = [
        'title', 'slug', 'user_id', 'brand_id', 'description', 'image', 'is_visible', 'published_at', 'views',
    ];

    public function getImagePath($fileName){

        return 'storage/'. request()->file($fileName)->storeAs('products', $this->slug . '-' . $this->id. $fileName. '.' . request()->file($fileName)->getClientOriginalExtension());

    }
	/**
     * Get the product that belongs to user.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Get the product that belongs to brand.
     */

    public function brand()
    {
        return $this->belongsTo('App\Brand');
    }
}
