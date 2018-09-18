@component('mail::message')
![](https://diplomado-cnts.net/storage/images/cnts.png "cnts")

# ¡¡¡ACEPTADO!!!

Felicidades **{{ ucwords($user->full_name) }}** has cumplido cabalmente con los requisitos por lo tanto has sido aceptad@
para poder cursar nuestro **Diplomado "Sangre y componentes Seguros"**, sigue los siguientes pasos:

1. **Ingresa** al sistema con el botón que esta debajo.
2. Utiliza tu **email** y **contraseña** con la que te registraste.
3. Una vez dentro del sistema te recomendamos **leer cuidadosamente el apartado de Faqs** donde encontraras las
respuestas a las dudas mas comunes y aprovecharas mucho más las caracteristicas del sistema.
4. Cualquier duda o aclaración no dudes en comunicarte a los teléfonos **(55) 63-92-22-50 Ext:  51616, 51619**.

Saludos y esperamos que el diplomado cumpla con todas tus expectativas, hasta pronto.

@component('mail::button', ['url' =>  route('login'),'color'=>'success'])
    Ingresar al diplomado
@endcomponent

Atte,<br>
{{ "La administración del ". config('app.name') }}
@endcomponent
