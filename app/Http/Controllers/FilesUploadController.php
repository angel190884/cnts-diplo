<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FilesUploadController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','permission:editProfile']);
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
        return redirect(route('profile.edit',$user->id));

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
        return redirect(route('profile.edit',$user->id));

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
        return redirect(route('profile.edit',$user->id));

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
        return redirect(route('profile.edit',$user->id));

    }
    public function uploadFileVoucher(Request $request,$id)
    {
        /*
         * todo verificar que solo los admin puedan hacer esta accion
         */
        $this->validate($request,[
            'file_voucher'            =>  'required|mimes:pdf|max:10000'
        ]);


        $user = User::findOrFail($id);
        if ($user->file_voucher)
        {
            Storage::delete($user->file_voucher);
        }

        if ($request->hasFile('file_voucher'))
        {
            $user->file_voucher = $request->file('file_voucher')->store('public/vouchers');
        }
        $user->save();
        session()->flash('success', 'Voucher subido y grabado en base de datos!!!');
        return redirect(route('authenticated.index'));

    }
    public function uploadFilePaidVoucher(Request $request,$id)
    {
        /*
         * todo verificar que solo los authenticated puedan hacer esta accion
         */
        $this->validate($request,[
            'file_paid_voucher'            =>  'required|mimes:pdf|max:10000'
        ]);


        $user = User::findOrFail($id);
        if ($user->file_paid_voucher)
        {
            Storage::delete($user->file_paid_voucher);
        }

        if ($request->hasFile('file_paid_voucher'))
        {
            $user->file_paid_voucher = $request->file('file_paid_voucher')->store('public/paid_vouchers');
        }
        $user->save();
        session()->flash('success', 'Voucher Pagado subido y grabado en base de datos!!!');
        return redirect(route('home'));

    }
}