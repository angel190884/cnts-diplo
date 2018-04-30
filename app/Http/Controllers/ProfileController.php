<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','role:authenticated']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=User::findOrFail($id);

        if ($user->id == Auth::user()->id)
        {
            return view('profile.general.edit', compact('user'));
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
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nombre'            =>  'required',
            'apellido'          =>  'required',
            'email'             =>  'email|required',
            'avatar'            =>  'image',
            'curp'              =>  'min:18|max:18|required',
            'rfc'               =>  'min:10|max:13|required',
            'homoclave'         =>  'min:3|max:3|required',

            'calle'             =>  'required',
            'colonia'           =>  'required',
            'cp'                =>  'required',
            'entidad'           =>  'required',
            'municipio'         =>  'required',
            'telefono'          =>  'required|min:11|numeric',
            //'celular'           =>  'required',
            //'fax'               =>  'required',

            'titulo'            =>  'required',
            'institucion'            =>  'required',
            'cedula'               =>  'required',
            'date_examen_profesional'               =>  'required'


        ]);


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
        $user->date_examen_profesional = Input::get('date_examen_profesional');

        $user->especialidad = Input::get('especialidad');
        $user->especialidad_inst = Input::get('especialidad_inst');
        $user->maestria = Input::get('maestria');
        $user->maestria_inst = Input::get('maestria_inst');
        $user->doctorado = Input::get('doctorado');
        $user->doctorado_inst = Input::get('doctorado_inst');

        $user->cargo = Input::get('v');
        $user->trabajo_inst = Input::get('trabajo_inst');

        session()->flash('success', 'Datos Actualizados!!!');

        $user->save();
        //return Redirect::route('home');
        return Redirect::route('profile.edit',$user->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function uploadFileImg(Request $request,$id)
    {
        $this->validate($request,[
            'avatar'            =>  'required|image|max:10000'
        ]);


        $user = User::findOrFail($id);
        if ($request->hasFile('avatar'))
        {
            if ($user->avatar && $user->avatar != 'avatars/no_user.png')
            {
                Storage::delete($user->avatar);
            }
            $user->avatar = $request->file('avatar')->store('public/avatars');
        }

        $user->save();
        session()->flash('success', 'Su imagen de perfil a sido cambiada con exito!!!');
        return Redirect::route('profile.edit',$user->id);

    }

    public function uploadFileTitle(Request $request,$id)
    {
        $this->validate($request,[
            'file_titulo'            =>  'required|mimes:pdf|max:10000'
        ]);


        $user = User::findOrFail($id);
        if ($user->file_titulo)
        {
            Storage::delete($user->file_titulo);
        }

        if ($request->hasFile('file_titulo'))
        {
            $user->file_titulo = $request->file('file_titulo')->store('public/titulos');
        }
        $user->save();
        session()->flash('success', 'Titulo subido y grabado en base de datos!!!');
        return Redirect::route('profile.edit',$user->id);

    }
    public function uploadFileCedula(Request $request,$id)
    {
        $this->validate($request,[
            'file_cedula'            =>  'required|mimes:pdf|max:10000'
        ]);


        $user = User::findOrFail($id);
        if ($user->file_cedula)
        {
            Storage::delete($user->file_cedula);
        }

        if ($request->hasFile('file_cedula'))
        {
            $user->file_cedula = $request->file('file_cedula')->store('public/cedulas');
        }
        $user->save();
        session()->flash('success', 'Cédula subida y grabada en base de datos!!!');
        return Redirect::route('profile.edit',$user->id);

    }
    public function uploadFileCarta(Request $request,$id)
    {
        $this->validate($request,[
            'file_carta'            =>  'required|mimes:pdf|max:10000'
        ]);


        $user = User::findOrFail($id);
        if ($user->file_carta)
        {
            Storage::delete($user->file_carta);
        }

        if ($request->hasFile('file_carta'))
        {
            $user->file_carta = $request->file('file_carta')->store('public/cartas');
        }
        $user->save();
        session()->flash('success', 'Carta subida y grabada en base de datos!!!');
        return Redirect::route('profile.edit',$user->id);

    }

    public function getData()
    {
        $user = User::findOrFail(auth()->user()->id);
        return $user;
    }
}
