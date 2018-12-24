<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Action_Model extends Model
{
    public function groups()
    {
        return $this->belongsToMany('App\Group','group_action_model','action_model_id','group_id');
    }

}
