<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Mail\FileVoucherPaidUpload;
use App\Mail\FileVoucherUpload;
use Illuminate\Http\Request;
use App\Activity;
use App\User;
use Mail;

class FilesUploadController extends Controller
{
    /**
     * Function upload avatar user
     *
     * @param Request $request [proveniente del formulario]
     * @param User    $id      [id User]
     *
     * @return route profile.edit
     */
    public function uploadFileImg(Request $request, $id)
    {
        $this->validate(
            $request,
            ['avatar' => 'required|image|max:10000']
        );

        $user = User::findOrFail($id);

        if ($request->hasFile('avatar')) {
            if ($user->avatar && $user->avatar != 'avatars/no_user.png') {
                Storage::delete($user->avatar);
            }
            $user->avatar = $request->file('avatar')->store('public/avatars');
        }

        $user->save();

        session()->flash('success', 'Su imagen de perfil a sido cambiada con exito!!!');

        return redirect(route('profile.edit', $user->id));
    }

    /**
     * Function upload file title user
     *
     * @param Request $request [proveniente del formulario]
     * @param User    $id      [id User]
     *
     * @return route profile.edit
     */
    public function uploadFileTitle(Request $request, $id)
    {
        $this->validate(
            $request,
            ['file_titulo' => 'required|mimes:pdf|max:10000']
        );

        $user = User::findOrFail($id);

        if ($user->file_titulo) {
            Storage::delete($user->file_titulo);
        }

        if ($request->hasFile('file_titulo')) {
            $user->file_titulo = $request->file('file_titulo')->store('public/titulos');
        }

        $user->save();

        session()->flash('success', 'Titulo subido y grabado en base de datos!!!');
        
        return redirect(route('profile.edit', $user->id));
    }

    /**
     * Funcion upload file cedula user
     *
     * @param Request $request [proveniente del formulario]
     * @param User    $id      [id User]
     *
     * @return route profile.edit
     */
    public function uploadFileCedula(Request $request, $id)
    {
        $this->validate(
            $request, 
            ['file_cedula' => 'required|mimes:pdf|max:10000']
        );

        $user = User::findOrFail($id);

        if ($user->file_cedula) {
            Storage::delete($user->file_cedula);
        }

        if ($request->hasFile('file_cedula')) {
            $user->file_cedula = $request->file('file_cedula')->store('public/cedulas');
        }

        $user->save();

        session()->flash('success', 'Cédula subida y grabada en base de datos!!!');

        return redirect(route('profile.edit', $user->id));
    }
    
    /**
     * Funcion upload file carta user
     *
     * @param Request $request [proveniente del formulario]
     * @param User    $id      [id User]
     *
     * @return route profile.edit
     */
    public function uploadFileCarta(Request $request, $id)
    {
        $this->validate(
            $request, ['file_carta' => 'required|mimes:pdf|max:10000']
        );

        $user = User::findOrFail($id);

        if ($user->file_carta) {
            Storage::delete($user->file_carta);
        }

        if ($request->hasFile('file_carta')) {
            $user->file_carta = $request->file('file_carta')->store('public/cartas');
        }

        $user->save();

        session()->flash('success', 'Carta subida y grabada en base de datos!!!');

        return redirect(route('profile.edit', $user->id));
    }

    /**
     * Funcion upload file voucher user
     *
     * @param Request $request [proveniente del formulario]
     * @param User    $id      [id User]
     *
     * @return route authenticated.index
     */
    public function uploadFileVoucher(Request $request, $id)
    {
        /*
         * TODO : Verificar que solo los admin puedan hacer esta accion
         */
        $this->validate(
            $request, 
            ['file_voucher' => 'required|mimes:pdf|max:10000']
        );

        $user = User::findOrFail($id);

        if ($user->file_voucher) {
            Storage::delete($user->file_voucher);
        }

        if ($request->hasFile('file_voucher')) {
            /**
             * TODO : Revizar que el archivo no supere los 2MB y hacerlo para todos los upload
             */
            $user->file_voucher = $request->file('file_voucher')->store('public/vouchers');
        }

        $user->save();

        if ($user) {
            Mail::to($user->email)->queue(new FileVoucherUpload($user));
        }

        session()->flash('success', 'Voucher subido y grabado en base de datos!!!');

        return redirect(route('authenticated.index'));
    }

    /**
     * Funcion upload file paid voucher user
     *
     * @param Request $request [proveniente del formulario]
     * @param User    $id      [id User]
     *
     * @return route home
     */
    public function uploadFilePaidVoucher(Request $request, $id)
    {
        /*
         * TODO : Verificar que solo los authenticated puedan hacer esta accion
         */
        $this->validate(
            $request,
            ['file_paid_voucher' => 'required|mimes:pdf|max:10000']
        );


        $user = User::findOrFail($id);

        if ($user->file_paid_voucher) {
            Storage::delete($user->file_paid_voucher);
        }

        if ($request->hasFile('file_paid_voucher')) {
            $user->file_paid_voucher = $request->file('file_paid_voucher')->store('public/paid_vouchers');
        }

        $user->save();

        if ($user) {
            Mail::to($user->email)->queue(new FileVoucherPaidUpload($user));
        }

        session()->flash('success', 'Voucher Pagado subido y grabado en base de datos!!!');

        return redirect(route('home'));
    }

    /**
     * Funcion upload file activity user
     *
     * @param Request $request [proveniente del formulario]
     * @param User    $id      [id User]
     *
     * @return route activity.index
     */
    public function uploadFileActivity(Request $request, $id)
    {
        /*
         * TODO : Verificar que solo los student puedan hacer esta accion
         */
        $this->validate(
            $request,
            ['file_activity' => 'required|mimes:pdf|max:10000']
        );

        $activity = Activity::findOrFail($id);

        $relation=$activity->users()->where('user_id', auth()->user()->id)->first();

        if ($relation->pivot->file_activity) {
            Storage::delete($relation->pivot->file_activity);
        }

        if ($request->hasFile('file_activity')) {
            $activity->users()->updateExistingPivot(auth()->user()->id, ['file_activity' => $request->file('file_activity')->store('public/activities')]);
        }

        session()->flash('success', 'Actividad grabada en base de datos!!!');

        return redirect(route('activity.index'));
    }
}
