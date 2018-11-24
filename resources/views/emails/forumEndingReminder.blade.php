@component('mail::message')
# Recordatorio de participación en Foro

Estimado(a) **{{ strtoupper($user->full_name) }}** te recordamos que el foro **"{{ $forum->forum }}"**
concluye el **{{ date('d-m-Y', strtotime($forum->end)) }}**, si ya participaste haz caso omiso de este email
de lo contrario te recomendamos que participes, ya que es parte fundamental para tu calificación y para el profesor
del diplomado.


@component('mail::button', ['url' => 'forums/' . $forum->slug])
Ir a Foro
@endcomponent

Atte,<br>
{{ "La administración del ". config('app.name') }}
@endcomponent
