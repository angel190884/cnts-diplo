@component('mail::message')
![](https://diplomado-cnts.net/storage/images/cnts.png "cnts")

#Bienvenido(a) {{ $user->fullName }}

En nombre del **_Centro Nacional de la Transfusión  Sanguínea_**, te damos la más cordial bienvenida, esperando que
encuentres toda la información que necesites acerca de nuestro diplomado **_"Sangre y Componentes Seguros"_**.

Para continuar con el proceso de inscripción deberás ingresar con tu usuario y contraseña haciendo **click** en el botón que esta debajo.

Y como **paso #2** deberás de llenar los datos que ahí se te solicitan.

@component('mail::button', ['url' => 'https://diplomado-cnts.net/'])
    CNTS-Diplomado
@endcomponent

Atte,<br>
{{ "La administración del ". config('app.name') }}
@endcomponent
