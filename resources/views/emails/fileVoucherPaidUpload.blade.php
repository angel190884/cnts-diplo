@component('mail::message')
![](https://diplomado-cnts.net/storage/images/cnts.png "cnts")

#{{ ucwords($user->name) }}, hemos recibido tu pago...

Hemos recibido tu comprobante y procederemos a verificarlo con las instancias correspondientes.

Se te notificara por esta via si tu pago procede o no para ser aceptado en el **_Diplomado "Sangre y componentes Seguros"_**:


Cualquier duda o aclaración sobre tu pago, porfavor comunicate a los teléfonos:

**(55)63-92-22-50** Ext:  **51616** ó **51619**.

Atte,<br>
{{ "La administración del ". config('app.name') }}
@endcomponent
