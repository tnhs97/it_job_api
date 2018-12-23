<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    protected $table = "employers";
    public function account()
    {
        return $this->morphOne('App\Account', 'accountable');
    }

}
