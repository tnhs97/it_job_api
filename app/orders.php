<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
	protected $table="orders";

    public $timestamps=false;

	public function users(){
	    return $this->belongsTo('app\users','id_user','id');
	}

	public function  order_details(){
        return $this->hasMany('app\order_details','id_order','id');
    }
}
