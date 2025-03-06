<?php

namespace App\Http\Controllers;

use App\Models\EstadoCivil;
use App\Models\Persona;
use Illuminate\Http\Request;

class Personas extends Controller
{

    public function index()
    {
        $titulo = "Administrar Personas";
        $items = Persona::all();
        return view('modules.personas.index', compact('titulo', 'items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $titulo = "Crear Persona";
        $estadosCiviles = EstadoCivil::all(); // Obtener todos los estados civiles
        return view('modules.personas.create', compact('titulo', 'estadosCiviles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $item = new Persona();
        $item->nombre_persona = $request->nombre_persona;
        $item->apellido_persona = $request->apellido_persona;
        $item->telefono_persona = $request->telefono_persona;
        $item->direccion_persona = $request->direccion_persona;
        $item->ci_persona = $request->ci_persona;
        $item->sexo_persona = $request->sexo_persona;
        $item->id_est_civl = $request->id_est_civl;
        $item->save();
        return redirect()->route('personas');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $titulo = 'Eliminar Personas';
        $item = Persona::find($id);
        return view('modules.personas.show', compact('item', 'titulo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $estadosCiviles = EstadoCivil::all(); // O
        $titulo = "Editar Personas";
        $item = Persona::find($id);
        return view('modules.personas.edit', compact('item', 'titulo' , 'estadosCiviles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       
        $item = Persona::find($id);
        $item->nombre_persona = $request->nombre_persona;
        $item->apellido_persona = $request->apellido_persona;
        $item->telefono_persona = $request->telefono_persona;
        $item->direccion_persona = $request->direccion_persona;
        $item->ci_persona = $request->ci_persona;
        $item->sexo_persona = $request->sexo_persona;
        $item->id_est_civl = $request->id_est_civl;
        $item->save();
        return redirect()->route('personas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Persona::find($id);
        $item->delete();
        return to_route('personas');
    }
}
