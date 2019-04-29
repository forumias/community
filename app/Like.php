<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Like extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'like_type','post_id', 'user_ids','like_count','created_at',
    ];

    public function commentInfo()
    {
        return $this->hasMany('App\Comment', 'post_id', 'id' );
    }

}
