<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class type_users extends Model
{
    protected $table="type_users";
    public $timestamps=false;
    public function  users(){
        return $this->hasMany('app\users','id_type','id');
    }
}
