<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('alumnos', function (Blueprint $table) {
                $table->id();
                //datos alumno
                $table->string('ApellidoPaterno');
                $table->string('ApellidoMaterno');
                $table->string('Nombres');
                $table->string('Rut');
                $table->string('Correo');
                $table->string('Telefono');
                //prerequisitos
                $table->string('EstadoPractica');
                $table->string('DuracionPractica');
                $table->string('SinPractica');
                $table->string('CargaAcademica');
                //datos asignatura
                $table->string('Carrera');
                $table->string('AñoIngreso');
                $table->string('Malla');
                $table->string('ClaveCurso');
                $table->string('Paralelo');
                $table->string('NombreCurso');
                //datos proyecto
                $table->string('TituloProyecto');
                $table->string('ProfesorGuia');
                $table->string('Correferente');
                $table->string('Comentarios');
                //fechas de creación y modificación
                $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('lista_proyectos');
    }
};
