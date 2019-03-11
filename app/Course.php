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
        'name', 'short_name', 'active', 'start', 'end', 'description', 'generation','active_inscription'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];

    //RELACIONES
    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function modules()
    {
        return $this->hasMany(Module::class);
    }

    public function forums()
    {
        return $this->hasMany(Forum::class);
    }

    public function quizzes()
    {
        return $this->hasMany(Quiz::class);
    }

    //SCOPE
    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }

    public function scopeActiveInscription($query)
    {
        return $query->where('active_inscription', 1);
    }

    //getters
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
