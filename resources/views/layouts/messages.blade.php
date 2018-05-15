@if(Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <p class="text-lg-left">
            {{ Session::get("success") }}
        </p>
    </div>
@endif
@if(Session::has('danger'))
    <div class="alert alert-danger alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <p class="text-lg-left">
            {{ Session::get("danger") }}
        </p>
    </div>
@endif
@if(Session::has('warning'))
    <div class="alert alert-warning alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <p class="text-lg-left">
            {{ Session::get("warning") }}
        </p>
    </div>
@endif
@if(Session::has('info'))
    <div class="alert alert-info alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <p class="text-lg-left">
            {{ Session::get("info") }}
        </p>
    </div>
@endif