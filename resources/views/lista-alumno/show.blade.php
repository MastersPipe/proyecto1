@extends('layouts.app')

@section('template_title')
    {{ $listaAlumno->name ?? 'Show Lista Alumno' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Lista Alumno</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('lista-alumnos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Apellidopaterno:</strong>
                            {{ $listaAlumno->ApellidoPaterno }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidomaterno:</strong>
                            {{ $listaAlumno->ApellidoMaterno }}
                        </div>
                        <div class="form-group">
                            <strong>Nombres:</strong>
                            {{ $listaAlumno->Nombres }}
                        </div>
                        <div class="form-group">
                            <strong>Rut:</strong>
                            {{ $listaAlumno->Rut }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $listaAlumno->Correo }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $listaAlumno->Telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Estadopractica:</strong>
                            {{ $listaAlumno->EstadoPractica }}
                        </div>
                        <div class="form-group">
                            <strong>Duracionpractica:</strong>
                            {{ $listaAlumno->DuracionPractica }}
                        </div>
                        <div class="form-group">
                            <strong>Sinpractica:</strong>
                            {{ $listaAlumno->SinPractica }}
                        </div>
                        <div class="form-group">
                            <strong>Cargaacademica:</strong>
                            {{ $listaAlumno->CargaAcademica }}
                        </div>
                        <div class="form-group">
                            <strong>Carrera:</strong>
                            {{ $listaAlumno->Carrera }}
                        </div>
                        <div class="form-group">
                            <strong>Añoingreso:</strong>
                            {{ $listaAlumno->AñoIngreso }}
                        </div>
                        <div class="form-group">
                            <strong>Malla:</strong>
                            {{ $listaAlumno->Malla }}
                        </div>
                        <div class="form-group">
                            <strong>Clavecurso:</strong>
                            {{ $listaAlumno->ClaveCurso }}
                        </div>
                        <div class="form-group">
                            <strong>Paralelo:</strong>
                            {{ $listaAlumno->Paralelo }}
                        </div>
                        <div class="form-group">
                            <strong>Nombrecurso:</strong>
                            {{ $listaAlumno->NombreCurso }}
                        </div>
                        <div class="form-group">
                            <strong>Tituloproyecto:</strong>
                            {{ $listaAlumno->TituloProyecto }}
                        </div>
                        <div class="form-group">
                            <strong>Profesorguia:</strong>
                            {{ $listaAlumno->ProfesorGuia }}
                        </div>
                        <div class="form-group">
                            <strong>Correferente:</strong>
                            {{ $listaAlumno->Correferente }}
                        </div>
                        <div class="form-group">
                            <strong>Comentarios:</strong>
                            {{ $listaAlumno->Comentarios }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
