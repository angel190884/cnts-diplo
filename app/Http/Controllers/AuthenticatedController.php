<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use App\Mail\InscriptionRefused;
use App\Mail\InscriptionSuccess;
use Illuminate\Http\Request;
use Log;
use PharIo\Manifest\Email;
use App\Activity;
use App\Course;
use App\Forum;
use App\User;
use Mail;

class AuthenticatedController extends Controller
{
    /**
     * Retorna vista 'admin.listOfUserAuthenticated'
     *
     * @param Request $request provenientes del formulario
     *
     * @return view
     */
    public function index(Request $request)
    {
        $fullName=$request->get('full_name');
        $email=$request->get('email');
        $course=$request->get('course');
        $paid=$request->get('paid');
        $voucherSend=$request->get('voucher_send');

        $users = User::with('course')
            ->role('authenticated')
            ->active()
            ->inscribed()
            ->fullName($fullName)
            ->email($email)
            ->courseFilter($course)
            ->voucherSend($voucherSend)
            ->coursePaid($paid)
            ->orderBy('date_inscription', 'ASC')
            ->paginate(10);



        $courses=Course::active()->pluck('short_name', 'id');
        return view(
            'admin.listOfUserAuthenticated',
            compact(
                'users',
                'courses',
                'fullName',
                'email',
                'course',
                'paid',
                'voucherSend'
            )
        );
    }

    /**
     * Funcion que acepta a un User(authenticated) como student
     *
     * @param User $user Usuario por aceptar
     *
     * @return route
     */
    public function acceptStudent(User $user)
    {
        if ($user->file_paid_voucher) {
            
            $forums = Forum::where('course_id', '=', $user->course_id)->get();
            $user->forums()->attach($forums);
            $course=$user->course;
            $modules=$course->modules;

            foreach ($modules as $module) {
                $subModules=$module->subModules;
                foreach ($subModules as $subModule) {
                    $topics=$subModule->topics;
                    foreach ($topics as $topic) {
                        $user->activities()->attach($topic->activities);
                    }
                }
            }

            if ($user->syncRoles(['student'])) {
                Mail::to($user->email)->queue(new InscriptionSuccess($user));
            }

            return redirect(route('authenticated.index'))
                ->with('success', 'Se acepto al usuario correctamente');
        }

        return redirect(route('profile.show', $user->id))
            ->with('warning', '¡¡¡ALERTA!!!......no se encontro el PAGO en la base de datos. Favor de revizar los datos del usuario para poder registrarlo como alumno en el diplomado');
    }

    /**
     * Funcion que acepta a un User(authenticated) como student
     *
     * @param User    $user    Usuario por aceptar.
     * @param Request $request proveniente del formulario.
     *
     * @return route
     */
    public function refuseStudent(User $user, Request $request)
    {
        $user->text_refuse = Input::get('text_refuse');
        $user->active=false;

        $user->save();
        Mail::to($user->email)->send(new InscriptionRefused($user));

        $userActive = auth()->user();

        Log::info("delete user $user for $userActive");

        $user->forceDelete();

        session()->flash('success', 'El usuario a sido rechazado y dado de baja de la base de datos.');
        return redirect(route('authenticated.index'));
    }
}
