@component('mail::message')
![](https://diplomado-cnts.net/storage/images/cnts.png "cnts")

#Bienvenid@ {{ $user->fullName }}

En nombre del **_Centro Nacional de la Transfusión  Sanguínea_**, te damos la más coordial bienvenida, esperando que
encuentres toda la información que necesites acerca de nuestro Diplomado **_"Sangre y componentes Seguros"_**.

Para continuar con el proceso de inscripción deberas ingresar con tu usuario y contraseña haciendo **click** en el boton que esta debajo.

Y como **paso #2** deberas de llenar los datos que ahi se te solicitan.

@component('mail::button', ['url' => 'https://diplomado-cnts.net/'])
    CNTS-Diplomado
@endcomponent

Atte,<br>
{{ "La administración del ". config('app.name') }}
@endcomponent
