<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pedido;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pedidos = Pedido::all();
        return view('pedidos.pedidos', compact('pedidos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pedidos.pedidos_create');
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
            'cliente' => 'required|max:255',
            'valor' => 'required|numeric',
            'atendente' => 'required',
            'mesa' => 'required|numeric',
            'itens' => 'required',
        ]);
        Pedido::create($request->all());
        return redirect()->route('pedidos.index')->with('Sucesso', 'O pedido foi adicionado com sucesso')->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pedido = Pedido::findOrFail($id);
        return view('pedidos.pedidos_show', compact('pedido','id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pedido = Pedido::findOrFail($id);
        return view('pedidos.pedidos_edit', compact('pedido','id'));
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
            'cliente' => 'required|max:255',
            'valor' => 'required|numeric',
            'atendente' => 'required',
            'mesa' => 'required|numeric',
            'itens' => 'required',
        ]);
        $pedido = Pedido::findOrFail($id);
        $pedido->update($request->all());

        return redirect()->route('pedidos.index')->with('Sucesso', 'O pedido foi alterado com sucesso')->withInput();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pedido = Pedido::findOrFail($id);
        $pedido->delete();
        return redirect()->route('pedidos.index')->with('Sucesso', 'O pedido foi deletado com sucesso');

    }
}
