@extends('layouts.app')

@section('template_title')
    {{ $alumno->name ?? 'Show Alumno' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Detalles del alumno.</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('alumnos.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <strong><br>Apellido Paterno: <br></strong>
                            {{ $alumno->ApellidoPaterno }}
                        </div>
                        <div class="form-group">
                            <strong><br>Apellido Materno: <br></strong>
                            {{ $alumno->ApellidoMaterno }}
                        </div>
                        <div class="form-group">
                            <strong><br>Nombres: <br></strong>
                            {{ $alumno->Nombres }}
                        </div>
                        <div class="form-group">
                            <strong><br>Rut: <br></strong>
                            {{ $alumno->Rut }}
                        </div>
                        <div class="form-group">
                            <strong><br>Correo: <br></strong>
                            {{ $alumno->Correo }}
                        </div>
                        <div class="form-group">
                            <strong><br>Teléfono: <br></strong>
                            {{ $alumno->Telefono }}
                        </div>
                        <div class="form-group">
                            <strong><br>¿Hizo la práctica?: <br></strong>
                            {{ $alumno->EstadoPractica }}
                        </div>
                        <div class="form-group">
                            <strong><br>Duración: <br></strong>
                            {{ $alumno->DuracionPractica }}
                        </div>
                        <div class="form-group">
                            <strong><br>Si no la tiene, explique el por qué: <br></strong>
                            {{ $alumno->SinPractica }}
                        </div>
                        <div class="form-group">
                            <strong><br>Carga Académica de este semestre: <br></strong>
                            {{ $alumno->CargaAcademica }}
                        </div>
                        <div class="form-group">
                            <strong><br>Carrera: <br></strong>
                            {{ $alumno->Carrera }}
                        </div>
                        <div class="form-group">
                            <strong><br>Año de Ingreso: <br></strong>
                            {{ $alumno->AñoIngreso }}
                        </div>
                        <div class="form-group">
                            <strong><br>Malla:</strong>
                            {{ $alumno->Malla }}
                        </div>
                        <div class="form-group">
                            <strong><br>Clave del Curso de titulación: <br></strong>
                            {{ $alumno->ClaveCurso }}
                        </div>
                        <div class="form-group">
                            <strong><br>Paralelo: <br></strong>
                            {{ $alumno->Paralelo }}
                        </div>
                        <div class="form-group">
                            <strong><br>Nombre del Curso de Titulación: <br></strong>
                            {{ $alumno->NombreCurso }}
                        </div>
                        <div class="form-group">
                            <strong><br>Título del Proyecto: <br></strong>
                            {{ $alumno->TituloProyecto }}
                        </div>
                        <div class="form-group">
                            <strong><br>Profesor Guía: <br></strong>
                            {{ $alumno->ProfesorGuia }}
                        </div>
                        <div class="form-group">
                            <strong><br>Profesor Correferente: <br></strong>
                            {{ $alumno->Correferente }}
                        </div>
                        <div class="form-group">
                            <strong><br>Comentarios: <br></strong>
                            {{ $alumno->Comentarios }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
