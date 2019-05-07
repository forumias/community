<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Tag extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'title', 'tag_slug', 'tag_img','description','status','created_by',
    ];

    public function followInfo()
    {
        return $this->hasOne('App\Follow', 'tag_id');
    }
    
}
