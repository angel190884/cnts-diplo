<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Mail\InscriptionRequestReceived;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Course;
use App\User;
use Mail;

class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','permission:editProfile']);
    }

    /**
     * Display the specified resource.
     *
     * @param User $idUser  
     * 
     * @return \Illuminate\Http\Response
     */
    public function show($idUser)
    {
        $user = User::findOrFail($idUser);

        if (Auth::user()->hasPermissionTo('editProfile')) {
            return view('profile.show', compact('user'));
        }

        abort(401);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\User $idUser 
     * 
     * @return \Illuminate\Http\Response
     */
    public function edit($idUser)
    {
        $user = User::findOrFail($idUser);

        $courses=Course::active()->pluck('short_name', 'id');

        if ($user->id == Auth::user()->id) {
            return view('profile.edit', compact('user', 'courses'));
        }
        
        abort(401);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request 
     * @param int                      $id 
     * 
     * @return \Illuminate\Http\Response
     */
    public function update(ProfileUpdateRequest $request, $idUser)
    {
        $user = User::findOrFail($idUser);
        $user->name = request('nombre'); //TODO: cambiar nombre por name en el formulario
        $user->last_name = request('apellido');//TODO: cambiar apellido por last_name en el formulario
        $user->email = request('email');

        if ($request->hasFile('avatar')) {
            if ($user->avatar && $user->avatar != 'avatars/no_user.png') {
                Storage::delete($user->avatar);
            }
            $user->avatar = $request->file('avatar')->store('public/avatars');
        }

        $user->curp = request('curp');
        $user->rfc = request('rfc');
        $user->homoclave = request('homoclave');
        $user->calle = request('calle');
        $user->colonia = request('colonia');
        $user->cp = request('cp');
        $user->municipio = request('municipio');
        $user->entidad = request('entidad');
        $user->telefono = request('telefono');
        $user->celular = request('celular');
        $user->fax = request('fax');

        $user->titulo = request('titulo');
        $user->institucion = request('institucion');
        $user->cedula = request('cedula');

        $user->especialidad = request('especialidad');
        $user->especialidad_inst = request('especialidad_inst');
        $user->maestria = request('maestria');
        $user->maestria_inst = request('maestria_inst');
        $user->doctorado = request('doctorado');
        $user->doctorado_inst = request('doctorado_inst');

        $user->cargo = request('cargo');
        $user->trabajo_inst = request('trabajo_inst');

        $user->course_id = request('course');
        
        $user->save();

        if ($user->course != null && $user->date_inscription == null) {
            $user->date_inscription = Carbon::parse(now());
            if ($user->save()) {
                Mail::to($user->email)->queue(new InscriptionRequestReceived());
            }
            return redirect()->route('profile.edit', $user->id)->with('success', 'Datos actualizados correctamente. A continuación se te pedirán 3 pdfs necesarios para continuar con la solicitud.');
        }
        return redirect()->route('home')->with('success', 'Haz realizado con éxito la solicitud de inscripción al diplomado "SANGRE Y COMPONENTES SEGUROS" en breve se te enviara la respuesta de aceptación ó rechazo a tu solicitud.');
    }
}
