@component('mail::message')
![](https://diplomado-cnts.net/storage/images/cnts.png "cnts")

# LO SENTIMOS TU SOLICITUD A SIDO DECLINADA

**{{ ucwords($user->full_name) }}** tu solicitud fue declinada por las siguientes razones:

**_{{ strtoupper($user->text_refuse) }}_**

Saludos y esperamos cubras los puntos antes mencionados y vuelvas a solicitar un lugar en el diplomado.

Atte,<br>
{{ "La administración del ". config('app.name') }}
@endcomponent
