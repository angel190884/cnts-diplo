@extends('emails.layouts.mail')

@section('title')
    Voucher Enviado
@endsection

@section('content')
    <table width="640" bgcolor="#ffffff" aling="center" class="w380">
        <tr>
            <td align="center" valign="top">
                <span style="font-family: Arial;font-size: 20px;color: #000000; font-weight: bold" class="w320">
                    {{ ucwords($user->name) }}, felicidades has sido seleccionado...
                </span>
            </td>
        </tr>
    </table>
    <table>
        <tr>
            <td><img src="{{ $message->embed('storage/images/spacer.gif') }}" height="35"></td>
        </tr>
    </table>
    <table width="640" bgcolor="#ffffff" class="w380">
        <tr>
            <td valign="top">
                <span style="font-family: Arial;font-size: 14px;color: #000000;" class="w320">
                    <p class="indent">
                        En nombre del <b>Centro Nacional de la Transfusión  Sanguínea</b>, te notificamos que todos tus
                        documentos se encuentran correctos, sigue los siguientes pasos para concluir tu proceso de
                        admisión al diplomado <b>"Sangre y componentes Seguros"</b>:
                    </p>
                </span>
            </td>
        </tr>
    </table>
    <table>
        <tr>
            <td><img src="{{ $message->embed('storage/images/spacer.gif') }}" height="15"></td>
        </tr>
    </table>
    <table width="640" bgcolor="#ffffff" class="w380">
        <tr>
            <td valign="top">
                <span style="font-family: Arial;font-size: 14px;color: #000000;" class="w320">
                    <p class="indent">
                        <ul>
                            <li>
                                <b>Paso #1: </b>Descargar su Voucher <b><i>(Archivo Adjunto)</i></b>.
                            </li>
                            <li>
                                <b>Paso #2: </b>Pagar Voucher en Banco.
                            </li>
                            <li>
                                <b>Paso #3: </b>Escanearlo en formato PDF con tamaño menor a 2Mb.
                            </li>
                            <li>
                                <b>Paso #4: </b>Volver a ingresar al sistema y subir el archivo escaneado.
                            </li>
                        </ul>
                    </p>
                </span>
            </td>
        </tr>
    </table>
    <table>
        <tr>
            <td><img src="{{ $message->embed('storage/images/spacer.gif') }}" height="15"></td>
        </tr>
    </table>
    <table width="640" bgcolor="#ffffff" class="w380">
        <tr>
            <td valign="top">
                <span style="font-family: Arial;font-size: 14px;color: #000000;" class="w320">
                    <p class="indent">
                        Saludos y esperamos verte muy pronto tomado nuestro diplomado, hasta pronto.
                    </p>
                </span>
            </td>
        </tr>
    </table>
@endsection
