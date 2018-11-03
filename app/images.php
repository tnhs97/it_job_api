<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class images extends Model
{
    protected $table="images";

    public function products(){
    	return $this->belongsTo('app\products','id_product','id');
    }
}
