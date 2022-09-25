@extends('layouts.app')

@section('template_title')
    {{ $listaProyecto->name ?? 'Show Lista Proyecto' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Lista Proyecto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('lista-proyectos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Rutprofesorguia:</strong>
                            {{ $listaProyecto->RutProfesorGuia }}
                        </div>
                        <div class="form-group">
                            <strong>Nombresprofesorguia:</strong>
                            {{ $listaProyecto->NombresProfesorGuia }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidosprofesorguia:</strong>
                            {{ $listaProyecto->ApellidosProfesorGuia }}
                        </div>
                        <div class="form-group">
                            <strong>Rutprofesorcorref:</strong>
                            {{ $listaProyecto->RutProfesorCorref }}
                        </div>
                        <div class="form-group">
                            <strong>Nombresprofesorcorref:</strong>
                            {{ $listaProyecto->NombresProfesorCorref }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidosprofesorcorref:</strong>
                            {{ $listaProyecto->ApellidosProfesorCorref }}
                        </div>
                        <div class="form-group">
                            <strong>Nombreempresa:</strong>
                            {{ $listaProyecto->NombreEmpresa }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo:</strong>
                            {{ $listaProyecto->Tipo }}
                        </div>
                        <div class="form-group">
                            <strong>Nuevoantiguo:</strong>
                            {{ $listaProyecto->NuevoAntiguo }}
                        </div>
                        <div class="form-group">
                            <strong>Asociacion:</strong>
                            {{ $listaProyecto->Asociacion }}
                        </div>
                        <div class="form-group">
                            <strong>Titulotema:</strong>
                            {{ $listaProyecto->TituloTema }}
                        </div>
                        <div class="form-group">
                            <strong>Area:</strong>
                            {{ $listaProyecto->Area }}
                        </div>
                        <div class="form-group">
                            <strong>Resumen:</strong>
                            {{ $listaProyecto->Resumen }}
                        </div>
                        <div class="form-group">
                            <strong>Objetivogeneral:</strong>
                            {{ $listaProyecto->ObjetivoGeneral }}
                        </div>
                        <div class="form-group">
                            <strong>Objetivoespecifico:</strong>
                            {{ $listaProyecto->ObjetivoEspecifico }}
                        </div>
                        <div class="form-group">
                            <strong>Financiamiento:</strong>
                            {{ $listaProyecto->Financiamiento }}
                        </div>
                        <div class="form-group">
                            <strong>Impactosocial:</strong>
                            {{ $listaProyecto->ImpactoSocial }}
                        </div>
                        <div class="form-group">
                            <strong>Lugaris:</strong>
                            {{ $listaProyecto->LugarIS }}
                        </div>
                        <div class="form-group">
                            <strong>Razonis:</strong>
                            {{ $listaProyecto->RazonIS }}
                        </div>
                        <div class="form-group">
                            <strong>Vinculacionempresa:</strong>
                            {{ $listaProyecto->VinculacionEmpresa }}
                        </div>
                        <div class="form-group">
                            <strong>Lugarve:</strong>
                            {{ $listaProyecto->LugarVE }}
                        </div>
                        <div class="form-group">
                            <strong>Razonve:</strong>
                            {{ $listaProyecto->RazonVE }}
                        </div>
                        <div class="form-group">
                            <strong>Estadoautorizacion:</strong>
                            {{ $listaProyecto->EstadoAutorizacion }}
                        </div>
                        <div class="form-group">
                            <strong>Estadoreserva:</strong>
                            {{ $listaProyecto->EstadoReserva }}
                        </div>
                        <div class="form-group">
                            <strong>Rutalumno1:</strong>
                            {{ $listaProyecto->RutAlumno1 }}
                        </div>
                        <div class="form-group">
                            <strong>Nombrealumno1:</strong>
                            {{ $listaProyecto->NombreAlumno1 }}
                        </div>
                        <div class="form-group">
                            <strong>Carreraalumno1:</strong>
                            {{ $listaProyecto->CarreraAlumno1 }}
                        </div>
                        <div class="form-group">
                            <strong>Rutalumno2:</strong>
                            {{ $listaProyecto->RutAlumno2 }}
                        </div>
                        <div class="form-group">
                            <strong>Nombrealumno2:</strong>
                            {{ $listaProyecto->NombreAlumno2 }}
                        </div>
                        <div class="form-group">
                            <strong>Carreraalumno2:</strong>
                            {{ $listaProyecto->CarreraAlumno2 }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
