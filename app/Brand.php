<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
     @var array
     */
    protected $fillable = [
        'title', 'slug','summary','is_visible',
    ];

    public function brands()
    {
        return $this->belongsTo('App\User');
    }
}
