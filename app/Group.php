<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    public function rights()
    {
        return $this->belongsToMany('App\Right','group_right','group_id','right_id')->withPivot('is_active');
    }

    public function accounts()
    {
        return $this->belongsToMany('App\Account')->withPivot('is_active');
    }

}
