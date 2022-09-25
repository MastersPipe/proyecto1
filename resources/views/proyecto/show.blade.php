@extends('layouts.app')

@section('template_title')
    {{ $proyecto->name ?? 'Show Proyecto' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Detalles del Proyecto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('proyectos.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong><br>Rut Profesor Guía: <br></strong>
                            {{ $proyecto->RutProfesorGuia }}
                        </div>
                        <div class="form-group">
                            <strong><br>Nombres Profesor Guía: <br></strong>
                            {{ $proyecto->NombresProfesorGuia }}
                        </div>
                        <div class="form-group">
                            <strong><br>Apellidos Profesor Guía: <br></strong>
                            {{ $proyecto->ApellidosProfesorGuia }}
                        </div>
                        <div class="form-group">
                            <strong><br>Rut Profesor Correferente: <br></strong>
                            {{ $proyecto->RutProfesorCorref }}
                        </div>
                        <div class="form-group">
                            <strong><br>Nombres Profesor Correferente: <br></strong>
                            {{ $proyecto->NombresProfesorCorref }}
                        </div>
                        <div class="form-group">
                            <strong><br>Apellidos Profesor Correferente: <br></strong>
                            {{ $proyecto->ApellidosProfesorCorref }}
                        </div>
                        <div class="form-group">
                            <strong><br>Nombre de Empresa: <br></strong>
                            {{ $proyecto->NombreEmpresa }}
                        </div>
                        <div class="form-group">
                            <strong><br>Tipo: <br></strong>
                            {{ $proyecto->Tipo }}
                        </div>
                        <div class="form-group">
                            <strong><br>Nuevo/Antiguo: <br></strong>
                            {{ $proyecto->NuevoAntiguo }}
                        </div>
                        <div class="form-group">
                            <strong><br>Asociación: <br></strong>
                            {{ $proyecto->Asociacion }}
                        </div>
                        <div class="form-group">
                            <strong><br>Título del Proyecto: <br></strong>
                            {{ $proyecto->TituloTema }}
                        </div>
                        <div class="form-group">
                            <strong><br>Área: <br></strong>
                            {{ $proyecto->Area }}
                        </div>
                        <div class="form-group">
                            <strong><br>Resumen: <br></strong>
                            {{ $proyecto->Resumen }}
                        </div>
                        <div class="form-group">
                            <strong><br>Objetivo General: <br></strong>
                            {{ $proyecto->ObjetivoGeneral }}
                        </div>
                        <div class="form-group">
                            <strong><br>Objetivo Específico: <br></strong>
                            {{ $proyecto->ObjetivoEspecifico }}
                        </div>
                        <div class="form-group">
                            <strong><br>Financiamiento: <br></strong>
                            {{ $proyecto->Financiamiento }}
                        </div>
                        <div class="form-group">
                            <strong><br>Impacto Social: <br></strong>
                            {{ $proyecto->ImpactoSocial }}
                        </div>
                        <div class="form-group">
                            <strong><br>Lugar Impacto Social: <br></strong>
                            {{ $proyecto->LugarIS }}
                        </div>
                        <div class="form-group">
                            <strong><br>Razón Impacto Social: <br></strong>
                            {{ $proyecto->RazonIS }}
                        </div>
                        <div class="form-group">
                            <strong><br>Vinculación Empresa: <br></strong>
                            {{ $proyecto->VinculacionEmpresa }}
                        </div>
                        <div class="form-group">
                            <strong><br>Lugar Vinculación Empresa: <br></strong>
                            {{ $proyecto->LugarVE }}
                        </div>
                        <div class="form-group">
                            <strong><br>Razón Vinculación Empresa: <br></strong>
                            {{ $proyecto->RazonVE }}
                        </div>
                        <div class="form-group">
                            <strong><br>Estado de Autorización: <br></strong>
                            {{ $proyecto->EstadoAutorizacion }}
                        </div>
                        <div class="form-group">
                            <strong><br>Estado de Reserva: <br></strong>
                            {{ $proyecto->EstadoReserva }}
                        </div>
                        <div class="form-group">
                            <strong><br>Rut Alumno 1: <br></strong>
                            {{ $proyecto->RutAlumno1 }}
                        </div>
                        <div class="form-group">
                            <strong><br>Nombre Alumno 1: <br></strong>
                            {{ $proyecto->NombreAlumno1 }}
                        </div>
                        <div class="form-group">
                            <strong><br>Carrera Alumno 1: <br></strong>
                            {{ $proyecto->CarreraAlumno1 }}
                        </div>
                        <div class="form-group">
                            <strong><br>Rut Alumno 2: <br></strong>
                            {{ $proyecto->RutAlumno2 }}
                        </div>
                        <div class="form-group">
                            <strong><br>Nombre Alumno 2: <br></strong>
                            {{ $proyecto->NombreAlumno2 }}
                        </div>
                        <div class="form-group">
                            <strong><br>Carrera Alumno 2: <br></strong>
                            {{ $proyecto->CarreraAlumno2 }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
