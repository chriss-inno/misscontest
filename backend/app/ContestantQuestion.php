<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContestantQuestion extends Model
{
    //
    public function answers()
    {
        return $this->hasMany('\App\ReviewAnswers','question_id','id');
    }
}
