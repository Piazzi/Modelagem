<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gasto;
class GastoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gastos = Gasto::all();
        return view ('gastos.gastos', compact ('gastos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gastos.gastos_create');
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
            'nome' => 'required|max:255|min:3',
            'valor' => 'required|numeric',
            'data' => 'required|date',
            'descricao' => 'required|string',
            'pago' => 'required|boolean',

        ]);
        $gasto = Gasto::create($request->all());
        return redirect()->route('gastos.index')->with('Sucesso', 'O gasto foi adicionado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gasto =  Gasto::findOrFail($id);
        return view('gastos.gastos_show', compact('gasto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gasto = Gasto::FindOrFail($id);
        return view('gastos.gastos_edit', compact('gasto','id'));
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
            'nome' => 'required|max:255|min:3',
            'valor' => 'required|numeric',
            'data' => 'required|date',
            'descricao' => 'required|string',
            'pago' => 'required|boolean',

        ]);
        $Gasto = Gasto::findOrFail($id);
        $Gasto->update($request->all());
        return redirect()->route('gastos.index')->with('Sucesso', 'O gasto foi alterado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Gasto::findOrFail($id)->delete();
        return redirect()->route('gastos.index')->with('Sucesso', 'O gasto foi deletado com sucesso');
    }
}
