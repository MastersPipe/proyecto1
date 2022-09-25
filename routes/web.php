<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SistemaInscripcionesController;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\AlumnoController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return view('auth.login');
});
*/
/*Route::get('/test', function () {
    return view('test.index');
});

Route::get('test/create',[SistemaInscripcionesController::class,'create']);
*/
Auth::routes();
Route::resource('proyectos', App\Http\Controllers\ProyectoController::class)->middleware('auth');
Route::resource('alumnos', App\Http\Controllers\AlumnoController::class)->middleware('auth');
Route::get('/success', [HomeController::class, 'index'])->name('success');

Route::resource('test',SistemaInscripcionesController::class)->middleware('auth');

Auth::routes(['register'=>false, 'reset'=>false]);


Route::group(['middleware' =>'auth'], function(){
Route::get('/', [HomeController::class, 'index'])->name('home');

});
