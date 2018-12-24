<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    public function action_models()
    {
        return $this->belongsToMany('App\Action_Model','group_action_model','group_id','action_model_id');
    }

    public function accounts()
    {
        return $this->belongsToMany('App\Account');
    }

}
