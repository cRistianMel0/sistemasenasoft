<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Criterio;

class CriteriosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombreCriterio' => 'required|string',
            'condicionCriterio' => 'required|string',
            'valor1Criterio' => 'required',
            'valor2Criterio' => 'nullable',
        ]);

        // Crear el registro del criterio
        $criterio = Criterio::create([
            'nombre' => $request->input('nombreCriterio'),
            'condicion' => $request->input('condicionCriterio'),
            'valor1' => $request->input('valor1Criterio'),
            'valor2' => $request->input('valor2Criterio'),
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
