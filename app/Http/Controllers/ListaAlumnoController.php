<?php

namespace App\Http\Controllers;

use App\Models\ListaAlumno;
use Illuminate\Http\Request;

/**
 * Class ListaAlumnoController
 * @package App\Http\Controllers
 */
class ListaAlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listaAlumnos = ListaAlumno::paginate();

        return view('lista-alumno.index', compact('listaAlumnos'))
            ->with('i', (request()->input('page', 1) - 1) * $listaAlumnos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listaAlumno = new ListaAlumno();
        return view('lista-alumno.create', compact('listaAlumno'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(ListaAlumno::$rules);

        $listaAlumno = ListaAlumno::create($request->all());

        return redirect()->route('lista-alumnos.index')
            ->with('success', 'ListaAlumno created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $listaAlumno = ListaAlumno::find($id);

        return view('lista-alumno.show', compact('listaAlumno'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $listaAlumno = ListaAlumno::find($id);

        return view('lista-alumno.edit', compact('listaAlumno'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  ListaAlumno $listaAlumno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ListaAlumno $listaAlumno)
    {
        request()->validate(ListaAlumno::$rules);

        $listaAlumno->update($request->all());

        return redirect()->route('lista-alumnos.index')
            ->with('success', 'ListaAlumno updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $listaAlumno = ListaAlumno::find($id)->delete();

        return redirect()->route('lista-alumnos.index')
            ->with('success', 'ListaAlumno deleted successfully');
    }
}
?>