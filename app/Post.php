<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Post extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id','category_id','tag_id','tag_name', 'type', 'title', 'img','description','status','created_at',
    ];

    public function userInfo()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
    public function commentInfo()
    {
        return $this->hasMany('App\Comment', 'post_id', 'id' );
    }
    public function likeInfo()
    {
        return $this->belongsTo('App\Like', 'id', 'post_id' );
    }

}
