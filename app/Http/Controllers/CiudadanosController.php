<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ciudadano;

class CiudadanosController extends Controller
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
        $request->validate([
            'nombres' => 'required|max:40',
            'apellidos' => 'required|max:40',
            'tipoDoc' => 'required|max:20',
            'documento' => 'required|max:14|unique:ciudadanos',
            'sexo' => 'required|max:20',
            'telCelular' => 'nullable|max:16',
            'telFijo' => 'nullable|max:16',
            'correo' => 'required|email|max:40|unique:ciudadanos',
            'contrasena' => 'required|min:6|max:60',
            'municipio' => 'required|max:40',
            'direccion' => 'nullable|max:20',
            'barrioVereda' => 'required|max:40',
            'fechaNacimiento' => 'required|date',
            'etnia' => 'required|max:20',
            'discapacidad' => 'required|max:40',
            'estrato' => 'required|integer',
            'nivelEducativo' => 'required|max:40',
            'dispositivosTecnologicos' => 'required|boolean',
            'mediosTecnologicos' => 'nullable|max:40',
            'conectividadInternet' => 'required|boolean',
        ]);

        Ciudadano::create($request->all());

        // Redireccionar o mostrar una respuesta al usuario
        return redirect()->route('ciudadanos.index')->with('success', 'Ciudadano creado exitosamente.');
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
