@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Panel Principal</div>
                <div class="card-body">
                    @role('authenticated')
                        @include('home.authenticated')
                    @endrole
                    @role('student')
                        @include('home.student')
                    @endrole
                    @role('teacher')
                        @include('home.teacher')
                    @endrole
                    @role('admin')
                        @include('home.admin')
                    @endrole

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
