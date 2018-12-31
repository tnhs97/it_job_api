<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Table extends Illuminate\Database\Eloquent\Model
{
    protected $table = 'models';
    public function actions()
    {
        return $this->belongsToMany('App\Action','right','model_id','action_id')->using('App\Right')
        ->withPivot('is_active');
    }

}
