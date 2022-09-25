@extends('layouts.app')

@section('template_title')
    Lista Proyecto
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Lista Proyecto') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('lista-proyectos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Rutprofesorguia</th>
										<th>Nombresprofesorguia</th>
										<th>Apellidosprofesorguia</th>
										<th>Rutprofesorcorref</th>
										<th>Nombresprofesorcorref</th>
										<th>Apellidosprofesorcorref</th>
										<th>Nombreempresa</th>
										<th>Tipo</th>
										<th>Nuevoantiguo</th>
										<th>Asociacion</th>
										<th>Titulotema</th>
										<th>Area</th>
										<th>Resumen</th>
										<th>Objetivogeneral</th>
										<th>Objetivoespecifico</th>
										<th>Financiamiento</th>
										<th>Impactosocial</th>
										<th>Lugaris</th>
										<th>Razonis</th>
										<th>Vinculacionempresa</th>
										<th>Lugarve</th>
										<th>Razonve</th>
										<th>Estadoautorizacion</th>
										<th>Estadoreserva</th>
										<th>Rutalumno1</th>
										<th>Nombrealumno1</th>
										<th>Carreraalumno1</th>
										<th>Rutalumno2</th>
										<th>Nombrealumno2</th>
										<th>Carreraalumno2</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($listaProyectos as $listaProyecto)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $listaProyecto->RutProfesorGuia }}</td>
											<td>{{ $listaProyecto->NombresProfesorGuia }}</td>
											<td>{{ $listaProyecto->ApellidosProfesorGuia }}</td>
											<td>{{ $listaProyecto->RutProfesorCorref }}</td>
											<td>{{ $listaProyecto->NombresProfesorCorref }}</td>
											<td>{{ $listaProyecto->ApellidosProfesorCorref }}</td>
											<td>{{ $listaProyecto->NombreEmpresa }}</td>
											<td>{{ $listaProyecto->Tipo }}</td>
											<td>{{ $listaProyecto->NuevoAntiguo }}</td>
											<td>{{ $listaProyecto->Asociacion }}</td>
											<td>{{ $listaProyecto->TituloTema }}</td>
											<td>{{ $listaProyecto->Area }}</td>
											<td>{{ $listaProyecto->Resumen }}</td>
											<td>{{ $listaProyecto->ObjetivoGeneral }}</td>
											<td>{{ $listaProyecto->ObjetivoEspecifico }}</td>
											<td>{{ $listaProyecto->Financiamiento }}</td>
											<td>{{ $listaProyecto->ImpactoSocial }}</td>
											<td>{{ $listaProyecto->LugarIS }}</td>
											<td>{{ $listaProyecto->RazonIS }}</td>
											<td>{{ $listaProyecto->VinculacionEmpresa }}</td>
											<td>{{ $listaProyecto->LugarVE }}</td>
											<td>{{ $listaProyecto->RazonVE }}</td>
											<td>{{ $listaProyecto->EstadoAutorizacion }}</td>
											<td>{{ $listaProyecto->EstadoReserva }}</td>
											<td>{{ $listaProyecto->RutAlumno1 }}</td>
											<td>{{ $listaProyecto->NombreAlumno1 }}</td>
											<td>{{ $listaProyecto->CarreraAlumno1 }}</td>
											<td>{{ $listaProyecto->RutAlumno2 }}</td>
											<td>{{ $listaProyecto->NombreAlumno2 }}</td>
											<td>{{ $listaProyecto->CarreraAlumno2 }}</td>

                                            <td>
                                                <form action="{{ route('lista-proyectos.destroy',$listaProyecto->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('lista-proyectos.show',$listaProyecto->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('lista-proyectos.edit',$listaProyecto->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $listaProyectos->links() !!}
            </div>
        </div>
    </div>
@endsection
