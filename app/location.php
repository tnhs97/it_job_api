<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public $timestamps=false;
    public function employer(){
        return $this->belongsTo('app\employer','id_Location','id');
    }

    public function userInLocations(){
        return $this->hasMany('App\UserInLocation');
    }

    public function employerInLocations(){
        return $this->hasMany('App\EmployerInLocation');
    }

}
