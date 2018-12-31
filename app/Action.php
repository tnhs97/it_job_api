<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    public function models()
    {
        return $this->belongsToMany('App\Table','right','action_id','model_id')
        ->using('App\Right')->withPivot('is_active');
    }

}
