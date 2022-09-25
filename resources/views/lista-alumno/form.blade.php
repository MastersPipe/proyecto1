<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('ApellidoPaterno') }}
            {{ Form::text('ApellidoPaterno', $listaAlumno->ApellidoPaterno, ['class' => 'form-control' . ($errors->has('ApellidoPaterno') ? ' is-invalid' : ''), 'placeholder' => 'Apellidopaterno']) }}
            {!! $errors->first('ApellidoPaterno', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ApellidoMaterno') }}
            {{ Form::text('ApellidoMaterno', $listaAlumno->ApellidoMaterno, ['class' => 'form-control' . ($errors->has('ApellidoMaterno') ? ' is-invalid' : ''), 'placeholder' => 'Apellidomaterno']) }}
            {!! $errors->first('ApellidoMaterno', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombres') }}
            {{ Form::text('Nombres', $listaAlumno->Nombres, ['class' => 'form-control' . ($errors->has('Nombres') ? ' is-invalid' : ''), 'placeholder' => 'Nombres']) }}
            {!! $errors->first('Nombres', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Rut') }}
            {{ Form::text('Rut', $listaAlumno->Rut, ['class' => 'form-control' . ($errors->has('Rut') ? ' is-invalid' : ''), 'placeholder' => 'Rut']) }}
            {!! $errors->first('Rut', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Correo') }}
            {{ Form::text('Correo', $listaAlumno->Correo, ['class' => 'form-control' . ($errors->has('Correo') ? ' is-invalid' : ''), 'placeholder' => 'Correo']) }}
            {!! $errors->first('Correo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Telefono') }}
            {{ Form::text('Telefono', $listaAlumno->Telefono, ['class' => 'form-control' . ($errors->has('Telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
            {!! $errors->first('Telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('EstadoPractica') }}
            {{ Form::text('EstadoPractica', $listaAlumno->EstadoPractica, ['class' => 'form-control' . ($errors->has('EstadoPractica') ? ' is-invalid' : ''), 'placeholder' => 'Estadopractica']) }}
            {!! $errors->first('EstadoPractica', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('DuracionPractica') }}
            {{ Form::text('DuracionPractica', $listaAlumno->DuracionPractica, ['class' => 'form-control' . ($errors->has('DuracionPractica') ? ' is-invalid' : ''), 'placeholder' => 'Duracionpractica']) }}
            {!! $errors->first('DuracionPractica', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('SinPractica') }}
            {{ Form::text('SinPractica', $listaAlumno->SinPractica, ['class' => 'form-control' . ($errors->has('SinPractica') ? ' is-invalid' : ''), 'placeholder' => 'Sinpractica']) }}
            {!! $errors->first('SinPractica', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('CargaAcademica') }}
            {{ Form::text('CargaAcademica', $listaAlumno->CargaAcademica, ['class' => 'form-control' . ($errors->has('CargaAcademica') ? ' is-invalid' : ''), 'placeholder' => 'Cargaacademica']) }}
            {!! $errors->first('CargaAcademica', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Carrera') }}
            {{ Form::text('Carrera', $listaAlumno->Carrera, ['class' => 'form-control' . ($errors->has('Carrera') ? ' is-invalid' : ''), 'placeholder' => 'Carrera']) }}
            {!! $errors->first('Carrera', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('AñoIngreso') }}
            {{ Form::text('AñoIngreso', $listaAlumno->AñoIngreso, ['class' => 'form-control' . ($errors->has('AñoIngreso') ? ' is-invalid' : ''), 'placeholder' => 'Añoingreso']) }}
            {!! $errors->first('AñoIngreso', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Malla') }}
            {{ Form::text('Malla', $listaAlumno->Malla, ['class' => 'form-control' . ($errors->has('Malla') ? ' is-invalid' : ''), 'placeholder' => 'Malla']) }}
            {!! $errors->first('Malla', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ClaveCurso') }}
            {{ Form::text('ClaveCurso', $listaAlumno->ClaveCurso, ['class' => 'form-control' . ($errors->has('ClaveCurso') ? ' is-invalid' : ''), 'placeholder' => 'Clavecurso']) }}
            {!! $errors->first('ClaveCurso', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Paralelo') }}
            {{ Form::text('Paralelo', $listaAlumno->Paralelo, ['class' => 'form-control' . ($errors->has('Paralelo') ? ' is-invalid' : ''), 'placeholder' => 'Paralelo']) }}
            {!! $errors->first('Paralelo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('NombreCurso') }}
            {{ Form::text('NombreCurso', $listaAlumno->NombreCurso, ['class' => 'form-control' . ($errors->has('NombreCurso') ? ' is-invalid' : ''), 'placeholder' => 'Nombrecurso']) }}
            {!! $errors->first('NombreCurso', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('TituloProyecto') }}
            {{ Form::text('TituloProyecto', $listaAlumno->TituloProyecto, ['class' => 'form-control' . ($errors->has('TituloProyecto') ? ' is-invalid' : ''), 'placeholder' => 'Tituloproyecto']) }}
            {!! $errors->first('TituloProyecto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ProfesorGuia') }}
            {{ Form::text('ProfesorGuia', $listaAlumno->ProfesorGuia, ['class' => 'form-control' . ($errors->has('ProfesorGuia') ? ' is-invalid' : ''), 'placeholder' => 'Profesorguia']) }}
            {!! $errors->first('ProfesorGuia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Correferente') }}
            {{ Form::text('Correferente', $listaAlumno->Correferente, ['class' => 'form-control' . ($errors->has('Correferente') ? ' is-invalid' : ''), 'placeholder' => 'Correferente']) }}
            {!! $errors->first('Correferente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Comentarios') }}
            {{ Form::text('Comentarios', $listaAlumno->Comentarios, ['class' => 'form-control' . ($errors->has('Comentarios') ? ' is-invalid' : ''), 'placeholder' => 'Comentarios']) }}
            {!! $errors->first('Comentarios', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>