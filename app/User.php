<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'last_name', 'email', 'password', 'avatar','date_inscription'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //RELACIONES

    public function course()
    {
        return $this->belongsTo('App\Course');
    }

    public function activities()
    {
        return $this->belongsToMany('App\Activity')->withTimestamps()->withPivot(['score','file_activity']);
    }

    public function questions()
    {
        return $this->belongsToMany('App\Question')->withTimestamps()->withPivot(['score']);
    }

    //SCOPE
    public function scopeRegistered($query)
    {
        return $query->where('email_verified_at','!=',null);
    }

    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }

    public function scopeInscribed($query)
    {
        return $query->where('course_id','!=',null);
    }

    public function scopeVoucherSend($query, $voucher_send)
    {
        if ($voucher_send)
        {
            return $query->where('file_voucher','!=',null);
        }
    }

    public function scopeCoursePaid($query, $paid)
    {
        if ($paid)
        {
            return $query->where('file_paid_voucher','!=',null);
        }
    }

    public function scopeFullName($query, $full_name)
    {
        if ($full_name)
        {
            return $query->where('name', 'LIKE', "%$full_name%")->orWhere('last_name', 'LIKE', "%$full_name%");
        }
    }
    public function scopeEmail($query, $email)
    {
        if ($email)
        {
            return $query->where('email', 'LIKE', "%$email%");
        }
    }

    public function scopeCourseFilter($query, $courseId)
    {
        if ($courseId)
        {
            return $query->where('course_id', '=', $courseId);
        }
    }

    //getters
    public function getFullNameAttribute()
    {
        return strtoupper("{$this->name} {$this->last_name}");
    }

    public function getLinkCedulaAttribute()
    {
        return "http://cedula.buholegal.com/{$this->cedula}/";
    }

    public function getDateInscriptionFormatBasicAttribute()
    {
        $dt=Carbon::parse($this->date_inscription);
        return $dt->format('d-m-Y  -- h:m');
    }

    public function getAddressAttribute()
    {
        $address = "$this->calle col. $this->colonia CP.$this->cp municipio $this->municipio, $this->entidad, México.";
        return $address;
    }

    /**
     * Send the email verification notification.
     *
     * @return void
     */
    public function sendEmailVerificationNotification()
    {
        $this->notify(new Notifications\VerifyEmail);
    }
}
