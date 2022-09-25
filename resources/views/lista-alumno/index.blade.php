@extends('layouts.app')

@section('template_title')
    Lista Alumno
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Lista Alumno') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('lista-alumnos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Apellidopaterno</th>
										<th>Apellidomaterno</th>
										<th>Nombres</th>
										<th>Rut</th>
										<th>Correo</th>
										<th>Telefono</th>
										<th>Estadopractica</th>
										<th>Duracionpractica</th>
										<th>Sinpractica</th>
										<th>Cargaacademica</th>
										<th>Carrera</th>
										<th>Añoingreso</th>
										<th>Malla</th>
										<th>Clavecurso</th>
										<th>Paralelo</th>
										<th>Nombrecurso</th>
										<th>Tituloproyecto</th>
										<th>Profesorguia</th>
										<th>Correferente</th>
										<th>Comentarios</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($listaAlumnos as $listaAlumno)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $listaAlumno->ApellidoPaterno }}</td>
											<td>{{ $listaAlumno->ApellidoMaterno }}</td>
											<td>{{ $listaAlumno->Nombres }}</td>
											<td>{{ $listaAlumno->Rut }}</td>
											<td>{{ $listaAlumno->Correo }}</td>
											<td>{{ $listaAlumno->Telefono }}</td>
											<td>{{ $listaAlumno->EstadoPractica }}</td>
											<td>{{ $listaAlumno->DuracionPractica }}</td>
											<td>{{ $listaAlumno->SinPractica }}</td>
											<td>{{ $listaAlumno->CargaAcademica }}</td>
											<td>{{ $listaAlumno->Carrera }}</td>
											<td>{{ $listaAlumno->AñoIngreso }}</td>
											<td>{{ $listaAlumno->Malla }}</td>
											<td>{{ $listaAlumno->ClaveCurso }}</td>
											<td>{{ $listaAlumno->Paralelo }}</td>
											<td>{{ $listaAlumno->NombreCurso }}</td>
											<td>{{ $listaAlumno->TituloProyecto }}</td>
											<td>{{ $listaAlumno->ProfesorGuia }}</td>
											<td>{{ $listaAlumno->Correferente }}</td>
											<td>{{ $listaAlumno->Comentarios }}</td>

                                            <td>
                                                <form action="{{ route('lista-alumnos.destroy',$listaAlumno->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('lista-alumnos.show',$listaAlumno->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('lista-alumnos.edit',$listaAlumno->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $listaAlumnos->links() !!}
            </div>
        </div>
    </div>
@endsection
