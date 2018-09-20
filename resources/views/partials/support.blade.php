@extends('layouts.app')

@section('content')

    <div class="container text-justify" style="font-family: Verdana;font-size: 15px">
        <div class="col-md-8 offset-2">
            <h1>Soporte</h1>
            <hr>
            <p>
                Cualquier duda o solicitud de Soporte favor de comunicarte a los teléfonos: <b>(55) 63-92-22-50  Ext:  51616, 51619.</b><br>
                También ponemos a disposición las <a href="{{ route('faq-activities') }}">FAQs</a> que son preguntas frecuentes
                con sus respectivas respuestas para agilizar las dudas que surgen al utilizar el sistema, y así poder brindarle la mayor autonomía.
            </p>
        </div>
    </div>
@stop