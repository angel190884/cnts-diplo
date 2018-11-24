@component('mail::message')
![](https://diplomado-cnts.net/storage/images/cnts.png "cnts")

#{{ ucwords($user->name) }}, todos tus datos y archivos han sido autorizados...


En nombre del **Centro Nacional de la Transfusión  Sanguínea**, te notificamos que todos tus documentos se encuentran
correctos, continua con los siguientes pasos para concluir tu proceso de admisión al diplomado **_"Sangre y Componentes Seguros"_**:


1. **Paso #1: ** Descargar su Voucher **_(Archivo Adjunto)_**.
2. **Paso #2: ** Pagar Voucher en banco.
3. **Paso #3: ** Escanearlo en formato PDF con tamaño menor a 2Mb.
4. **Paso #4: ** Volver a ingresar al sistema y subir el archivo escaneado.

Saludos, hasta pronto.

Atte,<br>
{{ "La administración del ". config('app.name') }}
@endcomponent
