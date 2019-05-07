<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Follow extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type', 'tag_id', 'user_id','follow_by','created_at','updated_at',
    ];

    public function mytags()
    {
        return $this->belongsTo('App\Tag', 'tag_id');
    }
    public function postInfo()
    {
        return $this->hasMany('App\Post', 'tag_id', 'tag_id');
    }
    
}
