<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class smallCategories extends Model
{
    protected $table="smallCategories";

    public $timestamps=false;

    public function categories(){
    	return $this->belongsTo('app\categories','id_category','id');
    }

    public function products(){
    	return $this->hasMany('app\products','id_small_category','id');
    }
}
