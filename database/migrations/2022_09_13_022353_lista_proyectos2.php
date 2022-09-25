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
        Schema::create('proyectos', function (Blueprint $table) {
            $table->id();
            //datos docentes
            $table->string('RutProfesorGuia');
            $table->string('NombresProfesorGuia');
            $table->string('ApellidosProfesorGuia');
            $table->string('RutProfesorCorref');
            $table->string('NombresProfesorCorref');
            $table->string('ApellidosProfesorCorref');
            $table->string('NombreEmpresa');
            $table->string('Tipo');
            $table->string('NuevoAntiguo');
            $table->string('Asociacion');
            //datos proyecto
            $table->string('TituloTema');
            $table->string('Area');
            $table->string('Resumen');
            $table->string('ObjetivoGeneral');
            $table->string('ObjetivoEspecifico');
            $table->string('Financiamiento');
            //observaciones proyecto
            $table->string('ImpactoSocial');
            $table->string('LugarIS');
            $table->string('RazonIS');
            $table->string('VinculacionEmpresa');
            $table->string('LugarVE');
            $table->string('RazonVE');
            //estado autorizacion
            $table->string('EstadoAutorizacion');
            //estado reserva
            $table->string('EstadoReserva');
            $table->string('RutAlumno1');
            $table->string('NombreAlumno1');
            $table->string('CarreraAlumno1');
            $table->string('RutAlumno2');
            $table->string('NombreAlumno2');
            $table->string('CarreraAlumno2');
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
