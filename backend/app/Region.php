<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    //
    public function districts()
    {
        return $this->hasMany('\App\District','region_id','id');
    }
}
