<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('RutProfesorGuia') }}
            {{ Form::text('RutProfesorGuia', $listaProyecto->RutProfesorGuia, ['class' => 'form-control' . ($errors->has('RutProfesorGuia') ? ' is-invalid' : ''), 'placeholder' => 'Rutprofesorguia']) }}
            {!! $errors->first('RutProfesorGuia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('NombresProfesorGuia') }}
            {{ Form::text('NombresProfesorGuia', $listaProyecto->NombresProfesorGuia, ['class' => 'form-control' . ($errors->has('NombresProfesorGuia') ? ' is-invalid' : ''), 'placeholder' => 'Nombresprofesorguia']) }}
            {!! $errors->first('NombresProfesorGuia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ApellidosProfesorGuia') }}
            {{ Form::text('ApellidosProfesorGuia', $listaProyecto->ApellidosProfesorGuia, ['class' => 'form-control' . ($errors->has('ApellidosProfesorGuia') ? ' is-invalid' : ''), 'placeholder' => 'Apellidosprofesorguia']) }}
            {!! $errors->first('ApellidosProfesorGuia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('RutProfesorCorref') }}
            {{ Form::text('RutProfesorCorref', $listaProyecto->RutProfesorCorref, ['class' => 'form-control' . ($errors->has('RutProfesorCorref') ? ' is-invalid' : ''), 'placeholder' => 'Rutprofesorcorref']) }}
            {!! $errors->first('RutProfesorCorref', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('NombresProfesorCorref') }}
            {{ Form::text('NombresProfesorCorref', $listaProyecto->NombresProfesorCorref, ['class' => 'form-control' . ($errors->has('NombresProfesorCorref') ? ' is-invalid' : ''), 'placeholder' => 'Nombresprofesorcorref']) }}
            {!! $errors->first('NombresProfesorCorref', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ApellidosProfesorCorref') }}
            {{ Form::text('ApellidosProfesorCorref', $listaProyecto->ApellidosProfesorCorref, ['class' => 'form-control' . ($errors->has('ApellidosProfesorCorref') ? ' is-invalid' : ''), 'placeholder' => 'Apellidosprofesorcorref']) }}
            {!! $errors->first('ApellidosProfesorCorref', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('NombreEmpresa') }}
            {{ Form::text('NombreEmpresa', $listaProyecto->NombreEmpresa, ['class' => 'form-control' . ($errors->has('NombreEmpresa') ? ' is-invalid' : ''), 'placeholder' => 'Nombreempresa']) }}
            {!! $errors->first('NombreEmpresa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo') }}
            {{ Form::text('Tipo', $listaProyecto->Tipo, ['class' => 'form-control' . ($errors->has('Tipo') ? ' is-invalid' : ''), 'placeholder' => 'Tipo']) }}
            {!! $errors->first('Tipo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('NuevoAntiguo') }}
            {{ Form::text('NuevoAntiguo', $listaProyecto->NuevoAntiguo, ['class' => 'form-control' . ($errors->has('NuevoAntiguo') ? ' is-invalid' : ''), 'placeholder' => 'Nuevoantiguo']) }}
            {!! $errors->first('NuevoAntiguo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Asociacion') }}
            {{ Form::text('Asociacion', $listaProyecto->Asociacion, ['class' => 'form-control' . ($errors->has('Asociacion') ? ' is-invalid' : ''), 'placeholder' => 'Asociacion']) }}
            {!! $errors->first('Asociacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('TituloTema') }}
            {{ Form::text('TituloTema', $listaProyecto->TituloTema, ['class' => 'form-control' . ($errors->has('TituloTema') ? ' is-invalid' : ''), 'placeholder' => 'Titulotema']) }}
            {!! $errors->first('TituloTema', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Area') }}
            {{ Form::text('Area', $listaProyecto->Area, ['class' => 'form-control' . ($errors->has('Area') ? ' is-invalid' : ''), 'placeholder' => 'Area']) }}
            {!! $errors->first('Area', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Resumen') }}
            {{ Form::text('Resumen', $listaProyecto->Resumen, ['class' => 'form-control' . ($errors->has('Resumen') ? ' is-invalid' : ''), 'placeholder' => 'Resumen']) }}
            {!! $errors->first('Resumen', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ObjetivoGeneral') }}
            {{ Form::text('ObjetivoGeneral', $listaProyecto->ObjetivoGeneral, ['class' => 'form-control' . ($errors->has('ObjetivoGeneral') ? ' is-invalid' : ''), 'placeholder' => 'Objetivogeneral']) }}
            {!! $errors->first('ObjetivoGeneral', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ObjetivoEspecifico') }}
            {{ Form::text('ObjetivoEspecifico', $listaProyecto->ObjetivoEspecifico, ['class' => 'form-control' . ($errors->has('ObjetivoEspecifico') ? ' is-invalid' : ''), 'placeholder' => 'Objetivoespecifico']) }}
            {!! $errors->first('ObjetivoEspecifico', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Financiamiento') }}
            {{ Form::text('Financiamiento', $listaProyecto->Financiamiento, ['class' => 'form-control' . ($errors->has('Financiamiento') ? ' is-invalid' : ''), 'placeholder' => 'Financiamiento']) }}
            {!! $errors->first('Financiamiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ImpactoSocial') }}
            {{ Form::text('ImpactoSocial', $listaProyecto->ImpactoSocial, ['class' => 'form-control' . ($errors->has('ImpactoSocial') ? ' is-invalid' : ''), 'placeholder' => 'Impactosocial']) }}
            {!! $errors->first('ImpactoSocial', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('LugarIS') }}
            {{ Form::text('LugarIS', $listaProyecto->LugarIS, ['class' => 'form-control' . ($errors->has('LugarIS') ? ' is-invalid' : ''), 'placeholder' => 'Lugaris']) }}
            {!! $errors->first('LugarIS', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('RazonIS') }}
            {{ Form::text('RazonIS', $listaProyecto->RazonIS, ['class' => 'form-control' . ($errors->has('RazonIS') ? ' is-invalid' : ''), 'placeholder' => 'Razonis']) }}
            {!! $errors->first('RazonIS', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('VinculacionEmpresa') }}
            {{ Form::text('VinculacionEmpresa', $listaProyecto->VinculacionEmpresa, ['class' => 'form-control' . ($errors->has('VinculacionEmpresa') ? ' is-invalid' : ''), 'placeholder' => 'Vinculacionempresa']) }}
            {!! $errors->first('VinculacionEmpresa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('LugarVE') }}
            {{ Form::text('LugarVE', $listaProyecto->LugarVE, ['class' => 'form-control' . ($errors->has('LugarVE') ? ' is-invalid' : ''), 'placeholder' => 'Lugarve']) }}
            {!! $errors->first('LugarVE', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('RazonVE') }}
            {{ Form::text('RazonVE', $listaProyecto->RazonVE, ['class' => 'form-control' . ($errors->has('RazonVE') ? ' is-invalid' : ''), 'placeholder' => 'Razonve']) }}
            {!! $errors->first('RazonVE', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('EstadoAutorizacion') }}
            {{ Form::text('EstadoAutorizacion', $listaProyecto->EstadoAutorizacion, ['class' => 'form-control' . ($errors->has('EstadoAutorizacion') ? ' is-invalid' : ''), 'placeholder' => 'Estadoautorizacion']) }}
            {!! $errors->first('EstadoAutorizacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('EstadoReserva') }}
            {{ Form::text('EstadoReserva', $listaProyecto->EstadoReserva, ['class' => 'form-control' . ($errors->has('EstadoReserva') ? ' is-invalid' : ''), 'placeholder' => 'Estadoreserva']) }}
            {!! $errors->first('EstadoReserva', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('RutAlumno1') }}
            {{ Form::text('RutAlumno1', $listaProyecto->RutAlumno1, ['class' => 'form-control' . ($errors->has('RutAlumno1') ? ' is-invalid' : ''), 'placeholder' => 'Rutalumno1']) }}
            {!! $errors->first('RutAlumno1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('NombreAlumno1') }}
            {{ Form::text('NombreAlumno1', $listaProyecto->NombreAlumno1, ['class' => 'form-control' . ($errors->has('NombreAlumno1') ? ' is-invalid' : ''), 'placeholder' => 'Nombrealumno1']) }}
            {!! $errors->first('NombreAlumno1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('CarreraAlumno1') }}
            {{ Form::text('CarreraAlumno1', $listaProyecto->CarreraAlumno1, ['class' => 'form-control' . ($errors->has('CarreraAlumno1') ? ' is-invalid' : ''), 'placeholder' => 'Carreraalumno1']) }}
            {!! $errors->first('CarreraAlumno1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('RutAlumno2') }}
            {{ Form::text('RutAlumno2', $listaProyecto->RutAlumno2, ['class' => 'form-control' . ($errors->has('RutAlumno2') ? ' is-invalid' : ''), 'placeholder' => 'Rutalumno2']) }}
            {!! $errors->first('RutAlumno2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('NombreAlumno2') }}
            {{ Form::text('NombreAlumno2', $listaProyecto->NombreAlumno2, ['class' => 'form-control' . ($errors->has('NombreAlumno2') ? ' is-invalid' : ''), 'placeholder' => 'Nombrealumno2']) }}
            {!! $errors->first('NombreAlumno2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('CarreraAlumno2') }}
            {{ Form::text('CarreraAlumno2', $listaProyecto->CarreraAlumno2, ['class' => 'form-control' . ($errors->has('CarreraAlumno2') ? ' is-invalid' : ''), 'placeholder' => 'Carreraalumno2']) }}
            {!! $errors->first('CarreraAlumno2', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>