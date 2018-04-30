@if(Session::has('success'))
    <div class="alert alert-success">
        <p class="text-lg-left">
            {{ Session::get("success") }}
        </p>
    </div>
@endif