@if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <p class="text-lg-left">
            ¡¡¡ Se han encontrado algunos errores favor de solucionarlos antes de continuar !!!
        <!--<ul>
            {{--@foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach--}}
                </ul>-->
        </p>
    </div>
@endif