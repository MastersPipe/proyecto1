<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Apellido Paterno') }}
            {{ Form::text('ApellidoPaterno', $alumno->ApellidoPaterno, ['class' => 'form-control' . ($errors->has('ApellidoPaterno') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('ApellidoPaterno', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Apellido Materno') }}
            {{ Form::text('ApellidoMaterno', $alumno->ApellidoMaterno, ['class' => 'form-control' . ($errors->has('ApellidoMaterno') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('ApellidoMaterno', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombres') }}
            {{ Form::text('Nombres', $alumno->Nombres, ['class' => 'form-control' . ($errors->has('Nombres') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('Nombres', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Rut sin puntos y con guión (ej:19199199-1)') }}
            {{ Form::text('Rut', $alumno->Rut, ['class' => 'form-control' . ($errors->has('Rut') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('Rut', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Correo electrónico') }}
            {{ Form::text('Correo', $alumno->Correo, ['class' => 'form-control' . ($errors->has('Correo') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('Correo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Teléfono incluyendo código de zona (ej: +56911222333)') }}
            {{ Form::text('Telefono', $alumno->Telefono, ['class' => 'form-control' . ($errors->has('Telefono') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('Telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('¿Hizo su práctica profesional? Prácticas no corregidas a la fecha no cuentan') }} <br>
            <select name="EstadoPractica" id="EstadoPractica">
            <option value="Sí">Sí</option>
            <option value="No">No</option>
            </select>
            {!! $errors->first('EstadoPractica', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Duración de la Práctica realizada') }} <br>
            <select name="DuracionPractica" id="DuracionPractica">
            <option value="1 mes">1 mes</option>
            <option value="2 meses">2 meses</option>
            <option value="+2 meses">+2 meses</option>
            <option value="no aplica">no aplica</option>
            </select>
            {!! $errors->first('DuracionPractica', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Si no la tiene especifique sus razones y cuándo va a realizarla, en caso contrario puede responder "No aplica"') }}
            {{ Form::text('SinPractica', $alumno->SinPractica, ['class' => 'form-control' . ($errors->has('SinPractica') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('SinPractica', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Carga Académica del semestre actual (sin contar el ramo de titulación a cursar)') }}
            {{ Form::text('CargaAcademica', $alumno->CargaAcademica, ['class' => 'form-control' . ($errors->has('CargaAcademica') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('CargaAcademica', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Carrera') }}
            {{ Form::text('Carrera', $alumno->Carrera, ['class' => 'form-control' . ($errors->has('Carrera') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('Carrera', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Año de Ingreso') }}
            {{ Form::text('AñoIngreso', $alumno->AñoIngreso, ['class' => 'form-control' . ($errors->has('AñoIngreso') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('AñoIngreso', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Malla') }} <br>
            <select name="Malla" id="Malla">
            <option value="Nueva">Nueva</option>
            <option value="Antigua">Antigua</option>
            </select>
            {!! $errors->first('Malla', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Clave del Curso de titulación') }}
            {{ Form::text('ClaveCurso', $alumno->ClaveCurso, ['class' => 'form-control' . ($errors->has('ClaveCurso') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('ClaveCurso', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Paralelo del Curso de titulación') }}
            {{ Form::text('Paralelo', $alumno->Paralelo, ['class' => 'form-control' . ($errors->has('Paralelo') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('Paralelo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre del Curso de titulación') }}
            {{ Form::text('NombreCurso', $alumno->NombreCurso, ['class' => 'form-control' . ($errors->has('NombreCurso') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('NombreCurso', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Título del Proyecto escogido') }}
            {{ Form::text('TituloProyecto', $alumno->TituloProyecto, ['class' => 'form-control' . ($errors->has('TituloProyecto') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('TituloProyecto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre del Profesor Guía') }}
            {{ Form::text('ProfesorGuia', $alumno->ProfesorGuia, ['class' => 'form-control' . ($errors->has('ProfesorGuia') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('ProfesorGuia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre del Profesor Correferente') }}
            {{ Form::text('Correferente', $alumno->Correferente, ['class' => 'form-control' . ($errors->has('Correferente') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('Correferente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Comentarios adicionales. En caso de dudas sobre el proceso se recomienda comunicarse directamente con la coordinación') }}
            {{ Form::text('Comentarios', $alumno->Comentarios, ['class' => 'form-control' . ($errors->has('Comentarios') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('Comentarios', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <br><button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>