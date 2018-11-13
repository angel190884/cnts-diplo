<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        setlocale(LC_TIME, 'es_MX.utf8');
        Carbon::setUtf8(false);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    /**
     * @param
     * @return mixed
     */
    public function users()
    {
        return $this->belongsToMany(User::class, 'quiz_attempts')
            ->withTimestamps()
            ->withPivot(['attempt','score']);
    }

    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }

    public function getFormattedEndAttribute()
    {
        $dt=Carbon::parse($this->end, 'America/Mexico_City');
        return $dt->formatLocalized('%A %d %B %Y');
    }
}
