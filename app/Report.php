<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Report extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'post_id','user_id','reason','description','created_at',
    ];

    public function userInfo()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
   
    public function likeInfo()
    {
        return $this->belongsTo('App\Like', 'post_id', 'post_id' );
    }

}
