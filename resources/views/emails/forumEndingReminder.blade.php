@component('mail::message')
# Recordatorio de participación en Foro

Estimad@ **{{ strtoupper($user->full_name) }}** te recordamos que el foro **"{{ $question->question }}"**
concluye el **{{ date('d-m-Y', strtotime($question->end)) }}**, si ya participaste haz caso omiso de este email
de lo contrario te recomendamos que participes, ya que es parte fundamental para el profesor del diplomado.


@component('mail::button', ['url' => 'questions/' . $question->slug])
Ir a Foro
@endcomponent

Atte,<br>
{{ "La administración del ". config('app.name') }}
@endcomponent
