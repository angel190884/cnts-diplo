@component('mail::message')
![](https://diplomado-cnts.net/storage/images/cnts.png "cnts")

# ¡¡¡ACEPTADO!!!

Felicidades **{{ ucwords($user->full_name) }}** has cumplido cabalmente con los requisitos por lo tanto has sido aceptado(a)
para poder cursar nuestro diplomado **"Sangre y Componentes Seguros"**, continua con los siguientes pasos:

1. **Ingresa** al sistema con el botón que esta debajo.
2. Utiliza tu **email** y **contraseña** con la que te registraste.
3. Una vez dentro del sistema te recomendamos **leer cuidadosamente el apartado de Faqs(preguntas frecuentes)** donde encontraras las
respuestas a las dudas más comunes.
4. Cualquier duda comunicarte a los teléfonos **(55) 63-92-22-50 Ext:  51648, 51691, 51696**.

Saludos, hasta pronto.

@component('mail::button', ['url' =>  route('login'),'color'=>'success'])
    Ingresar al diplomado
@endcomponent

Atte,<br>
{{ "La administración del ". config('app.name') }}
@endcomponent
