<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Rut Profesor Guía') }}
            {{ Form::text('RutProfesorGuia', $proyecto->RutProfesorGuia, ['class' => 'form-control' . ($errors->has('RutProfesorGuia') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('RutProfesorGuia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombres Profesor Guía') }}
            {{ Form::text('NombresProfesorGuia', $proyecto->NombresProfesorGuia, ['class' => 'form-control' . ($errors->has('NombresProfesorGuia') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('NombresProfesorGuia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Apellidos Profesor Guía') }}
            {{ Form::text('ApellidosProfesorGuia', $proyecto->ApellidosProfesorGuia, ['class' => 'form-control' . ($errors->has('ApellidosProfesorGuia') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('ApellidosProfesorGuia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Rut Profesor Correferente') }}
            {{ Form::text('RutProfesorCorref', $proyecto->RutProfesorCorref, ['class' => 'form-control' . ($errors->has('RutProfesorCorref') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('RutProfesorCorref', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombres Profesor Correferente') }}
            {{ Form::text('NombresProfesorCorref', $proyecto->NombresProfesorCorref, ['class' => 'form-control' . ($errors->has('NombresProfesorCorref') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('NombresProfesorCorref', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Apellidos Profesor Correferente') }}
            {{ Form::text('ApellidosProfesorCorref', $proyecto->ApellidosProfesorCorref, ['class' => 'form-control' . ($errors->has('ApellidosProfesorCorref') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('ApellidosProfesorCorref', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre de la Empresa (si aplica)') }}
            {{ Form::text('NombreEmpresa', $proyecto->NombreEmpresa, ['class' => 'form-control' . ($errors->has('NombreEmpresa') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('NombreEmpresa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo') }}
            {{ Form::text('Tipo', $proyecto->Tipo, ['class' => 'form-control' . ($errors->has('Tipo') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('Tipo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nuevo/Antiguo') }}
            {{ Form::text('NuevoAntiguo', $proyecto->NuevoAntiguo, ['class' => 'form-control' . ($errors->has('NuevoAntiguo') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('NuevoAntiguo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Asociación') }}
            {{ Form::text('Asociacion', $proyecto->Asociacion, ['class' => 'form-control' . ($errors->has('Asociacion') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('Asociacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Título del Tema') }}
            {{ Form::text('TituloTema', $proyecto->TituloTema, ['class' => 'form-control' . ($errors->has('TituloTema') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('TituloTema', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Área') }}
            {{ Form::text('Area', $proyecto->Area, ['class' => 'form-control' . ($errors->has('Area') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('Area', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descripción resumida del proyecto') }}
            {{ Form::text('Resumen', $proyecto->Resumen, ['class' => 'form-control' . ($errors->has('Resumen') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('Resumen', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Objetivo General') }}
            {{ Form::text('ObjetivoGeneral', $proyecto->ObjetivoGeneral, ['class' => 'form-control' . ($errors->has('ObjetivoGeneral') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('ObjetivoGeneral', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Objetivos Especificos') }}
            {{ Form::text('ObjetivoEspecifico', $proyecto->ObjetivoEspecifico, ['class' => 'form-control' . ($errors->has('ObjetivoEspecifico') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('ObjetivoEspecifico', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Financiamiento (si aplica)') }}
            {{ Form::text('Financiamiento', $proyecto->Financiamiento, ['class' => 'form-control' . ($errors->has('Financiamiento') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('Financiamiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Impacto Social') }}
            {{ Form::text('ImpactoSocial', $proyecto->ImpactoSocial, ['class' => 'form-control' . ($errors->has('ImpactoSocial') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('ImpactoSocial', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Lugar de Impacto Social') }}
            {{ Form::text('LugarIS', $proyecto->LugarIS, ['class' => 'form-control' . ($errors->has('LugarIS') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('LugarIS', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Razón del Impacto Social') }}
            {{ Form::text('RazonIS', $proyecto->RazonIS, ['class' => 'form-control' . ($errors->has('RazonIS') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('RazonIS', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Vinculación de Empresa') }}
            {{ Form::text('VinculacionEmpresa', $proyecto->VinculacionEmpresa, ['class' => 'form-control' . ($errors->has('VinculacionEmpresa') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('VinculacionEmpresa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Lugar de Vinculación de Empresa') }}
            {{ Form::text('LugarVE', $proyecto->LugarVE, ['class' => 'form-control' . ($errors->has('LugarVE') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('LugarVE', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Razón de Vinculación de Empresa') }}
            {{ Form::text('RazonVE', $proyecto->RazonVE, ['class' => 'form-control' . ($errors->has('RazonVE') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('RazonVE', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Estado de Autorización del Proyecto') }}
            {{ Form::text('EstadoAutorizacion', $proyecto->EstadoAutorizacion, ['class' => 'form-control' . ($errors->has('EstadoAutorizacion') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('EstadoAutorizacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Estado de Reserva del Proyecto') }}
            {{ Form::text('EstadoReserva', $proyecto->EstadoReserva, ['class' => 'form-control' . ($errors->has('EstadoReserva') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('EstadoReserva', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Rut Alumno 1') }}
            {{ Form::text('RutAlumno1', $proyecto->RutAlumno1, ['class' => 'form-control' . ($errors->has('RutAlumno1') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('RutAlumno1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre Alumno 1') }}
            {{ Form::text('NombreAlumno1', $proyecto->NombreAlumno1, ['class' => 'form-control' . ($errors->has('NombreAlumno1') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('NombreAlumno1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Carrera Alumno 1') }}
            {{ Form::text('CarreraAlumno1', $proyecto->CarreraAlumno1, ['class' => 'form-control' . ($errors->has('CarreraAlumno1') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('CarreraAlumno1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Rut Alumno 2') }}
            {{ Form::text('RutAlumno2', $proyecto->RutAlumno2, ['class' => 'form-control' . ($errors->has('RutAlumno2') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('RutAlumno2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre Alumno 2') }}
            {{ Form::text('NombreAlumno2', $proyecto->NombreAlumno2, ['class' => 'form-control' . ($errors->has('NombreAlumno2') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('NombreAlumno2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Carrera Alumno 2') }}
            {{ Form::text('CarreraAlumno2', $proyecto->CarreraAlumno2, ['class' => 'form-control' . ($errors->has('CarreraAlumno2') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('CarreraAlumno2', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <br><button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>