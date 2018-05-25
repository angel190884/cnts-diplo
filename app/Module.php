<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $fillable = [
        'name', 'order_module', 'course_id'
    ];

    public function course()
    {
        return $this->belongsTo('App\Course');  //UN MODULO PERTENECE A UN CURSO
    }

    public function subModules()
    {
        return$this->hasMany('App\SubModule');  //A UN MODULO LE CORRESPONDEN MUCHOS MODULOS
    }
}
