<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class _Model extends Model
{
    protected $table = 'models';
    public function actions()
    {
        return $this->belongsToMany('App\Action','action_model','model_id','action_id');
    }

}
