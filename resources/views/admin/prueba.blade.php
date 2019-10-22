@php

$contacto = App\Contacto::find(1);

echo $contacto->estados->estado;

@endphp