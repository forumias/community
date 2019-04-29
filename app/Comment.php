<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Comment extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'post_id','user_id','description', 'status','created_at',
    ];

    public function userInfo()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
    public function subCommentInfo()
    {
        return $this->hasMany('App\Subcomment', 'comment_id','id');
    }
    public function getPost()
    {
        return $this->belongsTo('App\Post', 'post_id');
    }

}
