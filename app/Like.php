<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $fillable = [
        'user_id',
        'post_id',
    ];
    
    public function like_user()
    {
    return $this->belongsTo('App\User');
    }
    
    public function like_post()
    {
    return $this->belongsTo('App\Post');
    }
}
