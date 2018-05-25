<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $fillable = [
        'name', 'order_topic', 'sub_module_id'
    ];

    public function subModule()
    {
        return $this->belongsTo('App\SubModule');
    }
}
