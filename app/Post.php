<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table="posts";
    public $timestamps=false;

    public function employer(){
        return $this->belongsTo('App\Employer','id_employer','id');
    }

    public function skill(){
        return $this->belongsTo('App\Skill','id_skill');
    }
//$skill = App\Skill::find(2);
}
