<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public $timestamps=false;
    protected $table='location';
    public function employers(){
        return $this->hasMany('App\Employer','id_location','id');
    }

    public function posts()
    {
        return $this->hasManyThrough(
            'App\Post', 
            'App\Employer',
            'id_location',
            'id_employer'
        );
    }

    //$loc= App\Location::find(1)
    // public function userInLocations(){
    //     return $this->hasMany('App\UserInLocation');
    // }

    // public function employerInLocations(){
    //     return $this->hasMany('App\EmployerInLocation');
    // }

}
