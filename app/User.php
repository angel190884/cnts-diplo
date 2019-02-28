<?php

/**
 * Clase encargada de los Usuarios.
 * 
 * Esta clase de encargara de la gestion del modelo de User se especificaran 
 * las relaciones con los demas modelos.
 * 
 * PHP version 7.1.5
 * 
 * LICENSE: This source file is subject to version 3.01 of the PHP license
 * that is available through the world-wide-web at the following URI:
 * http://www.php.net/license/3_01.txt.  If you did not receive a copy of
 * the PHP License and are unable to obtain it through the web, please
 * send a note to license@php.net so we can mail you a copy immediately.
 * 
 * @category User
 * @package  Cnts-diplo
 * @author   Adx Software S.A de C.V. <softwareadx@gmail.com>
 * @license  http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version  Release: "GIT:1.0"
 * @link     https://diplomado-cnts.net/
 */
namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

// phpcs:disable
class User extends Authenticatable implements MustVerifyEmail
{
    // phpcs:enable
    use Notifiable, HasRoles, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'last_name', 'email', 'password', 'avatar','date_inscription'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Relation user->course()
     * 
     * @return mixed
     */
    public function course()
    {
        return $this->belongsTo('App\Course');
    }

    /**
     * Relation user->activities()
     * 
     * @return mixed
     */
    public function activities()
    {
        return $this->belongsToMany('App\Activity')
            ->withTimestamps()
            ->withPivot(['score','file_activity']);
    }

    /**
     * Relation user->forums()
     * 
     * @return mixed
     */
    public function forums()
    {
        return $this->belongsToMany(Forum::class)
            ->withTimestamps()
            ->withPivot(['score']);
    }

    /**
     * Relation user->quizzes()
     * @param
     * @return mixed
     */
    public function quizzes()
    {
        return $this->belongsToMany(Quiz::class, 'quiz_attempts')
            ->withTimestamps()
            ->withPivot(['attempt','score']);
    }

    /*
    |--------------------------------------------------------------------------
    | Scopes// phpcs:disable
    |--------------------------------------------------------------------------
    */
    // phpcs:disable
    public function scopeRegistered($query)
    {
        return $query->where('email_verified_at', '!=', null);
    }

    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }

    public function scopeInscribed($query)
    {
        return $query->where('course_id', '!=', null);
    }

    public function scopeVoucherSend($query, $voucherSend)
    {
        if ($voucherSend) {
            return $query->where('file_voucher', '!=', null);
        }
    }

    public function scopeCoursePaid($query, $paid)
    {
        if ($paid) {
            return $query->where('file_paid_voucher', '!=', null);
        }
    }
    
    public function scopeFullName($query, $fullName)
    {
        if ($fullName) {
            return $query->where('name', 'LIKE', "%$fullName%")
                ->orWhere('last_name', 'LIKE', "%$fullName%");
        }
    }
    public function scopeEmail($query, $email)
    {
        if ($email) {
            return $query->where('email', 'LIKE', "%$email%");
        }
    }
 
    public function scopeCourseFilter($query, $courseId)
    {
        if ($courseId) {
            return $query->where('course_id', '=', $courseId);
        }
    }
    // phpcs:enable
    /*
    |--------------------------------------------------------------------------
    | Getters
    |--------------------------------------------------------------------------
    */

    /**
     * Getter para consultar el atributo "fullName"
     * 
     * @return fullName
     */
    public function getFullNameAttribute()
    {
        return strtoupper("{$this->name} {$this->last_name}");
    }

    /**
     * Getter para consultar el atributo "linkCedula"
     * 
     * @return linkCedula
     */
    public function getLinkCedulaAttribute()
    {
        return "http://cedula.buholegal.com/{$this->cedula}/";
    }

    /**
     * Getter para consultar el atributo "dateInscriptionFormatBasic"
     * 
     * @return dateInscriptionFormatBasic
     */
    public function getDateInscriptionFormatBasicAttribute()
    {
        $dateTime=new Carbon();
        $dateTime->parse($this->date_inscription);
        return $dateTime->format('d-m-Y  -- h:m');
    }

    /**
     * Getter para consultar el atributo "address"
     * 
     * @return address
     */
    public function getAddressAttribute()
    {
        $address = "$this->calle "
            . "col. $this->colonia "
            . "CP.$this->cp "
            . "municipio $this->municipio, "
            . "$this->entidad, México.";
        return $address;
    }

    /*
    |--------------------------------------------------------------------------
    | Actions
    |--------------------------------------------------------------------------
    */

    /**
     * Send the email verification notification.
     *
     * @return void
     */
    public function sendEmailVerificationNotification()
    {
        $this->notify(new Notifications\VerifyEmail);
    }
}//end class