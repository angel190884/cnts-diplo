<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        setlocale(LC_TIME, 'es_MX.utf8');
        Carbon::setUtf8(false);
    }

    public function users()
    {
        return $this->belongsToMany('App\User')->withTimestamps()->withPivot(['score']);
    }

    /*
     * todo revizar si funciona funcion si no eliminar!
     */
    public function teacher()
    {
        return $this->belongsTo('App\User','teacher_id','id');
    }

    public function course()
    {
        return$this->belongsTo('App\Course');
    }

    //SCOPE
    public function scopeCourseFilter($query, $courseId)
    {
        if ($courseId)
        {
            return $query->where('course_id', '=', $courseId);
        }
    }

    public function scopeTeacherFilter($query, $teacherId)
    {
        if ($teacherId)
        {
            return $query->where('teacher_id', '=', $teacherId);
        }
    }

    //getters
    public function getFullNameAttribute()
    {
        return strtoupper("{$this->name} {$this->last_name}");
    }
    public function getFormattedStartAttribute()
    {
        $dt=Carbon::parse($this->start, 'America/Mexico_City');
        return $dt->formatLocalized('%A %d %B %Y');
    }
    public function getFormattedEndAttribute()
    {
        $dt=Carbon::parse($this->end,'America/Mexico_City');
        return $dt->formatLocalized('%A %d %B %Y');
    }
}
