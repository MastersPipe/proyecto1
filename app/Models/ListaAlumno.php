<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ListaAlumno
 *
 * @property $id
 * @property $ApellidoPaterno
 * @property $ApellidoMaterno
 * @property $Nombres
 * @property $Rut
 * @property $Correo
 * @property $Telefono
 * @property $EstadoPractica
 * @property $DuracionPractica
 * @property $SinPractica
 * @property $CargaAcademica
 * @property $Carrera
 * @property $AñoIngreso
 * @property $Malla
 * @property $ClaveCurso
 * @property $Paralelo
 * @property $NombreCurso
 * @property $TituloProyecto
 * @property $ProfesorGuia
 * @property $Correferente
 * @property $Comentarios
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class ListaAlumno extends Model
{
    
    static $rules = [
		'ApellidoPaterno' => 'required',
		'ApellidoMaterno' => 'required',
		'Nombres' => 'required',
		'Rut' => 'required',
		'Correo' => 'required',
		'Telefono' => 'required',
		'EstadoPractica' => 'required',
		'DuracionPractica' => 'required',
		'SinPractica' => 'required',
		'CargaAcademica' => 'required',
		'Carrera' => 'required',
		'AñoIngreso' => 'required',
		'Malla' => 'required',
		'ClaveCurso' => 'required',
		'Paralelo' => 'required',
		'NombreCurso' => 'required',
		'TituloProyecto' => 'required',
		'ProfesorGuia' => 'required',
		'Correferente' => 'required',
		'Comentarios' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['ApellidoPaterno','ApellidoMaterno','Nombres','Rut','Correo','Telefono','EstadoPractica','DuracionPractica','SinPractica','CargaAcademica','Carrera','AñoIngreso','Malla','ClaveCurso','Paralelo','NombreCurso','TituloProyecto','ProfesorGuia','Correferente','Comentarios'];



}
