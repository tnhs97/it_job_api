<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
   	protected $table="categories";
    public $timestamps=false;
    public function  SmallCategories(){
        return $this->hasMany('app\smallCategories','id_category','id');
    }
}
