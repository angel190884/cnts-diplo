<?php

namespace App\Http\Controllers;

use App\Activity;
use App\Course;
use App\Mail\InscriptionRefused;
use App\Mail\InscriptionSuccess;
use App\Question;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Mail;
use PharIo\Manifest\Email;

class AuthenticatedController extends Controller
{
    public function index(Request $request)
    {
        $full_name=$request->get('full_name');
        $email=$request->get('email');
        $course=$request->get('course');
        $paid=$request->get('paid');
        $voucher_send=$request->get('voucher_send');

        $users = User::with('course')
            ->role('authenticated')
            ->active()
            ->inscribed()
            ->fullName($full_name)
            ->email($email)
            ->courseFilter($course)
            ->voucherSend($voucher_send)
            ->coursePaid($paid)
            ->orderBy('date_inscription','ASC')
            ->paginate(10);



        $courses=Course::active()->pluck('short_name', 'id');
        return view('admin.listOfUserAuthenticated',compact('users','courses', 'full_name','email','course', 'paid', 'voucher_send'));
    }
    public function acceptStudent(User $user)
    {
        /*
         * todo mandar mail de aceptacion
         */
        if ($user->file_paid_voucher)
        {
            $questions=Question::where('course_id','=',$user->course_id)->get();
            $user->questions()->attach($questions);
            $course=$user->course;
            $modules=$course->modules;
            foreach ($modules as $module)
            {
                $subModules=$module->subModules;
                foreach ($subModules as $subModule)
                {
                    $topics=$subModule->topics;
                    foreach ($topics as $topic)
                    {
                        $user->activities()->attach($topic->activities);
                    }
                }
            }

            if ($user->syncRoles(['student'])){
                Mail::to($user->email)->queue(new InscriptionSuccess($user));
            }

            return redirect(route('authenticated.index'))->with('success', 'Se acepto al usuario correctamente');
        }

        return redirect(route('profile.show',$user->id))->with('warning', '¡¡¡ALERTA!!!......no se encontro el PAGO en la base de datos. Favor de revizar los datos del usuario para poder registrarlo como alumno en el diplomado');
    }

    public function refuseStudent(User $user,Request $request)
    {
        $user->text_refuse = Input::get('text_refuse');

        /*
         * todo mandar mail de rechazo
         */

        $user->active=false;

        if ($user->save()){
            Mail::to($user->email)->queue(new InscriptionRefused($user));
        }
        return redirect(route('authenticated.index'))->with('El usuario a sido rechazado y dado de baja de la base de datos.');
    }
}
