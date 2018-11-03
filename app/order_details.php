<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order_details extends Model
{
    protected $table="order_details";

    public $timestamps=false;

	public function orders(){
	    return $this->belongsTo('app\orders','id_order','id');
	}

	public function  products(){
        return $this->hasMany('app\products','id_product','id');
    }

}
