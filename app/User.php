<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $guarded = [];
    public $timestamps=false;
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    // protected $hidden = [
    //     'password', 'remember_token',
    // ];

    public function account()
    {
        return $this->morphOne('App\Account', 'accountable');
    }

    public function myJobRobots(){
        return $this->hasMany('App\MyJobRobot');
    }

    public function ranks(){
        return $this->hasMany('App\Rank');
    }

    public function postSaveds(){
        return $this->hasMany('App\PostSaved');
    }
    
    public function employerFollowings(){
        return $this->hasMany('App\EmployerFollowing');
    }
}
