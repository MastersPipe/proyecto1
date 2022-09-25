<?php

namespace App\Http\Controllers;

use App\Models\ListaProyecto;
use Illuminate\Http\Request;

/**
 * Class ListaProyectoController
 * @package App\Http\Controllers
 */
class ListaProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listaProyectos = ListaProyecto::paginate();

        return view('lista-proyecto.index', compact('listaProyectos'))
            ->with('i', (request()->input('page', 1) - 1) * $listaProyectos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listaProyecto = new ListaProyecto();
        return view('lista-proyecto.create', compact('listaProyecto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(ListaProyecto::$rules);

        $listaProyecto = ListaProyecto::create($request->all());

        return redirect()->route('lista-proyecto.index')
            ->with('success', 'ListaProyecto created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $listaProyecto = ListaProyecto::find($id);

        return view('lista-proyecto.show', compact('listaProyectos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $listaProyecto = ListaProyecto::find($id);

        return view('lista-proyecto.edit', compact('listaProyectos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  ListaProyecto $listaProyecto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ListaProyecto $listaProyecto)
    {
        request()->validate(ListaProyecto::$rules);

        $listaProyecto->update($request->all());

        return redirect()->route('lista-proyecto.index')
            ->with('success', 'ListaProyecto updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $listaProyecto = ListaProyecto::find($id)->delete();

        return redirect()->route('lista-proyecto.index')
            ->with('success', 'ListaProyecto deleted successfully');
    }
}
?>