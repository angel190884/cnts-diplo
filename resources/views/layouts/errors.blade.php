@if ($errors->any())
    <div class="alert alert-danger">
        <p class="text-lg-left">Se han encontrado algunos errores favor de solucionarlos antes de continuar:</p>
        <!--<ul>
            {{--@foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach--}}
        </ul>-->
    </div>
@endif