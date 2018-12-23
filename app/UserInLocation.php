<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserInLocation extends Model
{
    protected $table="user_in_locations";
    protected $guarded = [];
    public $timestamps=false;

    public function location(){
        return $this->belongsTo('App\Location');
    }
}
