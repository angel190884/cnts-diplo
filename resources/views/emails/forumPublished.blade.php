@component('mail::message')
# Foro Publicado

Se ha publicado un foro.

@component('mail::button', ['url' => 'https://diplomado-cnts.net/login'])
    Entrar
@endcomponent

Gracias,<br>
{{ config('app.name') }}
@endcomponent