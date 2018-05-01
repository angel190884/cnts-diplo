<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];

    public function getCreatedAtFormatBasicAttribute()
    {
        $dt=Carbon::parse($this->created_at);
        return $dt->format('d-m-Y');
    }

    public function getStartFormatBasicAttribute()
    {
        $dt=Carbon::parse($this->start);
        return $dt->format('d-m-Y');
    }

    public function getEndFormatBasicAttribute()
    {
        $dt=Carbon::parse($this->end);
        return $dt->format('d-m-Y');
    }
}
