<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use App\User;

class Post extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'content',
    ];
    public function user()
    {
    return $this->belongsTo('App\User');
    }
    
    public function like_post()
    {
    return $this->hasMany('App\Like');
    }

}
