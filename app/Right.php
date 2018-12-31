<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Right extends Pivot
{
    protected $table ='right';
    public function groups()
    {
        return $this->belongsToMany('App\Group','group_right','right_id','group_id')
        ->withPivot('is_active');
    }

}
