@extends('emails.layouts.mail')

@section('title')
    Registro de Usuario
@endsection

@section('content')
    <table width="600" bgcolor="#1c1c1c" aling="center" class="w320">
        <tr>
            <td align="center" valign="top" height="300">
                <span style="font-family: Arial;font-size: 20px;color: #000000" class="w320">
                    Bienvenido {{ $user->fullName }},
                </span>
            </td>
        </tr>
    </table>
@endsection
