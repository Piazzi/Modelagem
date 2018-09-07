<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria_Gasto;


class CategoriaGastoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Categoria_Gasto::select('id','nome','descricao')->paginate(10);
        return view('categorias-gasto', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categoria = Categoria_Gasto::create($request->all());
        return redirect()->back()->with('Sucesso', 'A categoria de gasto foi adicionada com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Categoria_Gasto::findOrFail($id);
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
        $categoriaGasto = Categoria_Gasto::findOrFail($id);

        return redirect()->back()->with('Sucesso', 'A categoria de gasto foi alterada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categoria_gasto = Categoria_Gasto::findOrFail($id);
        $categoria_gasto->delete();

        return redirect()->back()->with('Sucesso', 'A categoria foi removida com sucesso');
    }
}
