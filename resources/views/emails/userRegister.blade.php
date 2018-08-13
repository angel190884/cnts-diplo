@extends('emails.layouts.mail')

@section('title')
    Registro de Usuario
@endsection

@section('content')
    <table width="640" bgcolor="#ffffff" aling="center" class="w380">
        <tr>
            <td align="center" valign="top">
                <span style="font-family: Arial;font-size: 20px;color: #000000; font-weight: bold" class="w320">
                    Bienvenid@ {{ $user->fullName }},
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
                        En nombre del <b>Centro Nacional de la Transfusión  Sanguínea</b>, les damos la más coordial bienvenida a nuestro portal web, en el que, esperamos,
                        encontrarán toda la información que necesiten acerca de nuestro Diplomado <b>"Sangre y componentes Seguros"</b>.
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
                        Para continuar con el proceso de inscripción deberas ingresar a <link>https://diplomado-cnts.net/</link> con tu usuario y como <b>paso #2</b> deberas de llenar los datos que ahi te piden.
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
