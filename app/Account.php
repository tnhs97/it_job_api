<?php

namespace App;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Notifications\Notifiable;
class Account extends Authenticatable implements JWTSubject
{
  use Notifiable;

    public $timestamps=false;
    protected $guarded = [];

    protected $hidden = [
      'password', 'remember_token',
  ];

    public function accountable()
    {
        return $this->morphTo();
    }

    public function getJWTIdentifier()
    {
      return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
      return [];
    }
    
    public function groups()
    {
        return $this->belongsToMany('App\Group')->withPivot('is_active');
    }


}
