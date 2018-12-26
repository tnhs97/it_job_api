<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $table="skill";
    public $timestamps=false;

    public function posts(){
        return $this->hasMany('App\Post','id_skill');
    }
}