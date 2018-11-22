<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MesaPadrao;

class MesaPadraoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mesas = MesaPadrao::all();
        return view('mesasPadrao/listagem', compact('mesas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mesasPadrao/adicionar');
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
            'numero' => 'required|max:255',
            'ocupada' => 'required'
        ]);

        $mesa = MesaPadrao::create($request->all());
        return redirect()->route('mesaPadrao.index')->with('Sucesso', 'A mesa foi adicionada com sucesso')->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mesa = MesaPadrao::findOrFail($id);
        return view('mesasPadrao.visualizar', compact('mesa'));   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mesa = MesaPadrao::findOrFail($id);
        return view('mesasPadrao.alterar', compact('mesa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'numero' => 'required|max:255',
        ]);

        $mesa = MesaPadrao::findOrFail($id);
        $mesa->update($request->all());
        return view('mesasPadrao.visualizar')->with('Sucesso','A mesa foi alterada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mesa = MesaPadrao::findOrFail($id);
        $mesa->delete();
        return redirect()->back()->with('Sucesso', 'A mesa foi deletada com sucesso');
    }
}
