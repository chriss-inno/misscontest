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
    public function reviews()
    {
        return $this->hasMany('\App\VisitorsReviews','contestant_id','id');
    }
    public function photos()
    {
        return $this->hasMany('\App\ContestantGallery','contestant_id','id');
    }
}
