<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pregunta;
use App\Models\Sondeo;

class PreguntasController extends Controller
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
    public function create($idSondeo)
    {
        $sondeo = Sondeo::findOrFail($idSondeo);
        $preguntas = $sondeo->preguntas; // Recuperar las preguntas asociadas al sondeo
    
        return view('preguntas.create', [
            'sondeo' => $sondeo,
            'preguntas' => $preguntas
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $idSondeo = $request->input('idSondeo');
        $descripcion = $request->input('descripcionPregunta');
        $tipo = $request->input('tipoPregunta');

        // Crear una nueva instancia de Pregunta
        $pregunta = new Pregunta();
        $pregunta->idSondeo = $idSondeo;
        $pregunta->descripcion = $descripcion;
        $pregunta->tipo = $tipo;
        
        // Guardar la pregunta
        $pregunta->save();

        return redirect()->route('preguntas.create', ['idSondeo' => $idSondeo]);
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
