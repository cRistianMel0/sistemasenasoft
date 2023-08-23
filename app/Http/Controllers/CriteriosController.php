<?php

namespace App\Http\Controllers;

use App\Models\Criterio;
use Illuminate\Http\Request;
use App\Models\Sondeo;

class CriteriosController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function index(Request $request)
{
    $busqueda = $request->buscar;
    $sexo = $request->sexo;
    $etnia = $request->etnia;
    $edad = $request->edad;
    $estrato = $request->estrato;
    $discapacidad = $request->discapacidad;
    $educacion = $request->educacion;

    $sondeos = Sondeo::whereHas('criterio', function ($query) use ($busqueda, $sexo, $etnia, $edad, $estrato, $discapacidad, $educacion) {
        $query->where('titulo', 'like', '%' . $busqueda . '%')
              ->where('sexo', 'like', '%' . $sexo . '%')
              ->where('etnia', 'like', '%' . $etnia . '%')
              ->where('edad','like', '%' . $edad . '%')
              ->where('estrato','like', '%' . $estrato . '%')
              ->where('discapacidad','like', '%' . $discapacidad . '%')
              ->where('nivelEducativo','like', '%' . $educacion . '%');
    })->get();

    return view('sondeos.index', ['sondeos' => $sondeos]);
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
        //
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