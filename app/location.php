<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public $timestamps=false;
    public function employer(){
        return $this->belongsTo('app\employer','id_Location','id');
    }

    public function userInLocation(){
        return $this->hasMany('App\UserInLocation');
    }

    public function employerInLocation(){
        return $this->hasMany('App\EmployerInLocation');
    }

}
