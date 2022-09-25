@extends('layouts.app')

@section('template_title')
    Create Lista Alumno
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Lista Alumno</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('lista-alumnos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('lista-alumno.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
