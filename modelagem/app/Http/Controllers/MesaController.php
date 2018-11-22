<?php

namespace App\Http\Controllers;

use App\Mesa;
use App\MesaPadrao;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mesas = Mesa::where('mesa_fechada', 0)->get();
        return view('mesas.listagem', compact('mesas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mesasLivres = MesaPadrao::where('ocupada', 0)->get();
        return view('mesas.adicionar', compact('mesasLivres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'atendente' => 'required|max:255'
        ]);

        //atualizar o boolean da mesaPadrao para ocupada
        $mesaPadrao = MesaPadrao::findOrFail($request->mesa_id);
        $mesaPadrao->update([ 'ocupada' => 1 ]);

        $mesa = Mesa::create([ 
            'mesa_id' => $request->mesa_id,
            'atendente' => $request->atendente,
            'total_gasto' => 0,
            'tempo_minutos_permanencia' => 0,
            'mesa_fechada' => $request->mesa_fechada
        ]);

        return redirect()->route('mesas.listagem')->with('Sucesso', 'A mesa foi aberta com sucesso')->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mesa  $mesa
     * @return \Illuminate\Http\Response
     */
    public function show(Mesa $mesa)
    {      
        return view('mesas.visualizar')->with("mesa", $mesa);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mesa  $mesa
     * @return \Illuminate\Http\Response
     */
    public function edit(Mesa $mesa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mesa  $mesa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mesa $mesa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mesa  $mesa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mesa $mesa)
    {
        //
    }
}
