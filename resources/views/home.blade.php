@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Panel Principal</div>
                <div class="card-body">
                    @role('authenticated')
                        @include('authenticated.home')
                    @endrole
                    @role('student')
                        @include('student.home')
                    @endrole
                    @role('teacher')
                        @include('teacher.home')
                    @endrole
                    @role('admin')
                        @include('admin.home')
                    @endrole

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
