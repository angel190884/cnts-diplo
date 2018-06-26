<?php

namespace App\Http\Controllers;

use App\Course;
use App\Http\Requests\ProfileUpdateRequest;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','permission:editProfile']);
    }

    public function show($id)
    {
        $user=User::findOrFail($id);
        if (Auth::user()->hasPermissionTo('editProfile'))
        {
            return view('profile.show', compact('user'));
        }else{
            abort(401);
        }
    }

    public function edit($id)
    {
        $user=User::findOrFail($id);
        $courses=Course::active()->pluck('short_name', 'id');

        if ($user->id == Auth::user()->id)
        {
            return view('profile.edit', compact('user','courses'));
        }else{
            abort(401);
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProfileUpdateRequest $request, $id)
    {
        $user = User::findOrFail($id);

        $user->name = Input::get('nombre');
        $user->last_name = Input::get('apellido');
        $user->email    = Input::get('email');

        if ($request->hasFile('avatar'))
        {
            if ($user->avatar && $user->avatar != 'avatars/no_user.png')
            {
                Storage::delete($user->avatar);
            }
            $user->avatar = $request->file('avatar')->store('public/avatars');
        }

        $user->curp = Input::get('curp');
        $user->rfc = Input::get('rfc');
        $user->homoclave = Input::get('homoclave');
        $user->calle = Input::get('calle');
        $user->colonia = Input::get('colonia');
        $user->cp = Input::get('cp');
        $user->municipio = Input::get('municipio');
        $user->entidad = Input::get('entidad');
        $user->telefono = Input::get('telefono');
        $user->celular = Input::get('celular');
        $user->fax = Input::get('fax');

        $user->titulo = Input::get('titulo');
        $user->institucion = Input::get('institucion');
        $user->cedula = Input::get('cedula');

        $user->especialidad = Input::get('especialidad');
        $user->especialidad_inst = Input::get('especialidad_inst');
        $user->maestria = Input::get('maestria');
        $user->maestria_inst = Input::get('maestria_inst');
        $user->doctorado = Input::get('doctorado');
        $user->doctorado_inst = Input::get('doctorado_inst');

        $user->cargo = Input::get('v');
        $user->trabajo_inst = Input::get('trabajo_inst');

        $user->course_id = Input::get('course');

        $user->save();

        if ($user->course != null)
        {
            /*
             * todo enviar mail al usuario que diga que que ya esta inscrito y el cnts revisara sus datos
             */
            $user->date_inscription = Carbon::parse(now());
            $user->save();
            return redirect(route('home'))->with('success','Te has inscrito, se te enviara un email con mas instrucciones');
        }
        return redirect(route('profile.edit',$user->id))->with('success','Datos actualizados correctamente. Recuerda que para poder inscribirte debes subir los tres archivos en PDF que se te indican al lado derecho de la pantalla');
    }
}
