<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    public function topic()
    {
        return $this->belongsTo('App\Topic');
    }

    public function users()
    {
        return $this->belongsToMany('App\User')->withTimestamps();
    }
}
