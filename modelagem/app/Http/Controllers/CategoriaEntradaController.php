<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria_Entrada;


class CategoriaEntradaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Categoria_Entrada::select('id', 'nome', 'descricao')->paginate(10);
        return view('categorias-entrada', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Categoria_Entrada::create($request->all());
        return redirect()->back()->with('Sucesso', 'A categoria de entrada foi adicionada com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Categoria_Entrada::findOrFail($id);
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
        $cateoriaEntrada = Categoria_Entrada::findOrFail($id);
        $cateoriaEntrada->update($request->all());

        return redirect()->back()->with('Sucesso', 'A categoria de entrada foi alterada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Categoria_Entrada::findOrFail($id)->delete();
        return redirect()->back()->with('Sucesso', 'A categoria de entrada foi deletada com sucesso.');
    }
}
