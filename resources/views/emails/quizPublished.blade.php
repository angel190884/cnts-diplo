@component('mail::message')
# Examen

Se ha publicado un examen.

@component('mail::button', ['url' => 'https://diplomado-cnts.net/login'])
Entrar
@endcomponent

Gracias,<br>
{{ config('app.name') }}
@endcomponent
