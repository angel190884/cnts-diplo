@extends('emails.layouts.mail')

@section('title')
    Solicitud de inscripción recibida
@endsection

@section('content')
    <table width="640" bgcolor="#ffffff" aling="center" class="w380">
        <tr>
            <td align="center" valign="top">
                <span style="font-family: Arial;font-size: 20px;color: #000000; font-weight: bold" class="w320">
                    Bien hecho, nos enviaste tu solictud de inscripción..
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
                        En nombre del <b>Centro Nacional de la Transfusión  Sanguínea</b>, te agradecemos tu interes para
                        cursar el Diplomado <b>"Sangre y componentes Seguros"</b>.
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
                        Haz cumplido con todos los requisitos, en breve se te enviara un email con la respuesta a tu
                        solicitud, en caso de ser <b>aceptado</b> recibirás instrucciones de los pasos a seguir, de lo contrario
                        se te enviara los motivos por los cuales tu solicitud fue <b>rechazada</b>.
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
