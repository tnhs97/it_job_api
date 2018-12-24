<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    protected $table = "employers";
    public $timestamps=false;

    protected $guarded = [];
    public function account()
    {
        return $this->morphOne('App\Account', 'accountable');
    }

}
