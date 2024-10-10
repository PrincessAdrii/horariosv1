<?php

namespace App\Http\Controllers;

use App\Models\Puesto;
use Illuminate\Http\Request;

class PuestoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $puestos = Puesto::paginate(5);
        return view("Puestos/index",compact("puestos"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $puestos = Puesto::paginate(5);
        return view("Puestos/create",compact("puestos"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Puesto::create($request->all());
        return redirect()->route("puestos.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Puesto $puesto)
    {
        $puestos = Puesto::paginate(5);
        return view("Puestos/ver",compact("puestos","puesto"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Puesto $puesto)
    {
        $puestos = Puesto::paginate(5);
        
        return view("Puestos/editar",compact("puestos","puesto"));

       // return view("Alumnos.editar");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Puesto $puesto)
    {
        $puesto->update($request->all());
        return redirect()->route('puestos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Puesto $puesto)
    {
        $puesto->delete();
        return redirect()->route('puestos.index');
    }
}
