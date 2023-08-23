<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sondeo;

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

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

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