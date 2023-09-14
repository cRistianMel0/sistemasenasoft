<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Sondeo;
use App\Models\Tema;
use App\Models\Criterio;
use App\Models\Administrador;


class SondeosController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    

    public function index( )
    {
        $sondeos = Sondeo::all();
        return view('index', ['sondeos' => $sondeos]);
    }

    public function mostrarVistaSondeos()
    {
        $sondeos = Sondeo::all();
        return view('sondeos.index', ['sondeos' => $sondeos]);
    }
    public function mostrarVistaSondeosAdmin()
    {
        $sondeos = Sondeo::all();
        return view('iterarSondeos', ['sondeos' => $sondeos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $id = 1;
        
        $administrador = Administrador::findOrFail($id);

        $temas = Tema::orderBy('nombre', 'ASC')->get();

        $criterios = Criterio::orderBy('sexo', 'ASC')->get();
 
        return view('sondeos.create', [
            'temas' => $temas,
            'criterios' => $criterios,
            'administrador' => $administrador,
        ]);    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'idAdministrador' => 'required',
            'idTema' => 'required',
            'idCriterio' => 'nullable', 
            'titulo' => 'required',
            'descripcion' => 'required',
            'resultado' => 'nullable',
            'fechaHoraInicio' => 'required|date|after_or_equal:' . Carbon::now(),
            'fechaHoraFin' => 'required|date|after_or_equal:fechaHoraInicio',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $data = $request->all();

        // Procesar la imagen si se ha cargado
        if ($request->hasFile('imagen')) {
            $image = $request->file('imagen');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $data['imagen'] = $imageName;
        }

        Sondeo::create($data);

        $ultimoSondeo = Sondeo::latest('idSondeo')->first();

        return redirect()->route('preguntas.create', ['idSondeo' => $ultimoSondeo->idSondeo]);
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