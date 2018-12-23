<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployerInLocation extends Model
{
    protected $table="employer_in_locations";
    protected $guarded = [];
    public $timestamps=false;

    public function location(){
        return $this->belongsTo('App\Location');
    }

}
