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
        return $this->belongsToMany('App\User')->withTimestamps()->withPivot(['score','file_activity']);
    }

    public function scopeTeacher($query)
    {
        return $query->join('topics', 'topics.id', '=', 'activities.topic_id')
            ->join('sub_modules','sub_modules.id','=','topics.sub_module_id')
            ->join('modules','modules.id','=','sub_modules.module_id')
            //->join('courses','courses.id','=','modules.course_id')
            ->select('activities.*','topics.sub_module_id','sub_modules.module_id','modules.course_id','modules.teacher_id')
            ->where('modules.teacher_id','=',auth()->user()->id);
    }


}
