<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    public function models()
    {
        return $this->belongsToMany('App\_Model','action_model','action_id','model_id');
    }

}
