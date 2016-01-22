<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contestant extends Model
{
    //
    public function district()
    {
        return $this->belongsTo('\App\District','district_id');
    }
    public function region()
    {
        return $this->belongsTo('\App\Region','region_id');
    }
}
