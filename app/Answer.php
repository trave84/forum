<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answers extends Model
{
    publicn function question ()
    {
        return $this->belongsTo('App\Question');
    }
}
