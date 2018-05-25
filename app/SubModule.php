<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubModule extends Model
{
    protected $fillable = [
        'name', 'order_submodule', 'module_id'
    ];

    public function module()
    {
        return $this->belongsTo('App\Module');
    }

    public function topics()
    {
        return $this->hasMany('App\Topic');
    }
}
