<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ListaProyecto
 *
 * @property $id
 * @property $RutProfesorGuia
 * @property $NombresProfesorGuia
 * @property $ApellidosProfesorGuia
 * @property $RutProfesorCorref
 * @property $NombresProfesorCorref
 * @property $ApellidosProfesorCorref
 * @property $NombreEmpresa
 * @property $Tipo
 * @property $NuevoAntiguo
 * @property $Asociacion
 * @property $TituloTema
 * @property $Area
 * @property $Resumen
 * @property $ObjetivoGeneral
 * @property $ObjetivoEspecifico
 * @property $Financiamiento
 * @property $ImpactoSocial
 * @property $LugarIS
 * @property $RazonIS
 * @property $VinculacionEmpresa
 * @property $LugarVE
 * @property $RazonVE
 * @property $EstadoAutorizacion
 * @property $EstadoReserva
 * @property $RutAlumno1
 * @property $NombreAlumno1
 * @property $CarreraAlumno1
 * @property $RutAlumno2
 * @property $NombreAlumno2
 * @property $CarreraAlumno2
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class ListaProyecto extends Model
{
    
    static $rules = [
		'RutProfesorGuia' => 'required',
		'NombresProfesorGuia' => 'required',
		'ApellidosProfesorGuia' => 'required',
		'RutProfesorCorref' => 'required',
		'NombresProfesorCorref' => 'required',
		'ApellidosProfesorCorref' => 'required',
		'NombreEmpresa' => 'required',
		'Tipo' => 'required',
		'NuevoAntiguo' => 'required',
		'Asociacion' => 'required',
		'TituloTema' => 'required',
		'Area' => 'required',
		'Resumen' => 'required',
		'ObjetivoGeneral' => 'required',
		'ObjetivoEspecifico' => 'required',
		'Financiamiento' => 'required',
		'ImpactoSocial' => 'required',
		'LugarIS' => 'required',
		'RazonIS' => 'required',
		'VinculacionEmpresa' => 'required',
		'LugarVE' => 'required',
		'RazonVE' => 'required',
		'EstadoAutorizacion' => 'required',
		'EstadoReserva' => 'required',
		'RutAlumno1' => 'required',
		'NombreAlumno1' => 'required',
		'CarreraAlumno1' => 'required',
		'RutAlumno2' => 'required',
		'NombreAlumno2' => 'required',
		'CarreraAlumno2' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['RutProfesorGuia','NombresProfesorGuia','ApellidosProfesorGuia','RutProfesorCorref','NombresProfesorCorref','ApellidosProfesorCorref','NombreEmpresa','Tipo','NuevoAntiguo','Asociacion','TituloTema','Area','Resumen','ObjetivoGeneral','ObjetivoEspecifico','Financiamiento','ImpactoSocial','LugarIS','RazonIS','VinculacionEmpresa','LugarVE','RazonVE','EstadoAutorizacion','EstadoReserva','RutAlumno1','NombreAlumno1','CarreraAlumno1','RutAlumno2','NombreAlumno2','CarreraAlumno2'];



}
