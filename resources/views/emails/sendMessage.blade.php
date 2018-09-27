@component('mail::message')
![](https://diplomado-cnts.net/storage/images/cnts.png "cnts")

###MENSAJE DEL EMAIL !!!
# [{{ $email }}](mailto:{{ $email }})

_{{ strtoupper($message) }}_
<hr>
@endcomponent
