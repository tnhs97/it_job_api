<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employer extends Model
{
   	protected $table="employer";
    public $timestamps=false;
    public function  location(){
        return $this->hasMany('app\location','id_Location','id');
    }
}
