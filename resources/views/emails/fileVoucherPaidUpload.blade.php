@component('mail::message')
![](https://diplomado-cnts.net/storage/images/cnts.png "cnts")

#{{ ucwords($user->name) }}, hemos recibido tu pago...

Hemos recibido tu comprobante y procederemos a verificarlo con las instancias correspondientes.

Se te notificara por esta vía si tu pago procede o no para ser aceptado en el diplomado **_"Sangre y componentes Seguros"_**:


Cualquier duda o aclaración sobre tu pago, por favor comunícate a los teléfonos:

**(55)63-92-22-50** Ext:  **51648** ó **51691** ó **51696**.

Atte,<br>
{{ "La administración del ". config('app.name') }}
@endcomponent
