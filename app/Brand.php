<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'slug', 'summary', 'is_visible',
    ];

    

    public function brands()
    {
        return $this->belongsTo('App\User');
    }
}
