<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Entrada;
use App\Categoria_Entrada;

class EntradaController extends Controller
{
    public function index()
    {
        $entradas = Entrada::all();

        return view('entradas.entradas', compact('entradas'));
    }

    public function create()
    {
        return view('entradas.entradas_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|max:255',
            'valor' => 'required|numeric',
            'data' => 'required',
            'descricao' => 'nullable',
        ]);
        Entrada::create($request->all());
        return redirect()->route('entradas.index')->with('Sucesso', 'A entrada foi adicionada com sucesso');
    }

    public function show($id) {
         $entrada = Entrada::findOrFail($id);
         return view('entradas.entradas_show', compact('entrada'));
    }

    public function edit($id) {
        $entrada = Entrada::FindOrFail($id);
        return view('entradas.entradas_edit', compact('entrada','id'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'nome' => 'required|max:255',
            'valor' => 'required|numeric',
            'data' => 'required',
            'descricao' => 'nullable',
        ]);
        Entrada::findOrFail($id)->update($request->all());
        return redirect()->route('entradas.index')->with('Sucesso', 'A entrada foi alterada com sucesso');
    }

    public function destroy($id) {
        Entrada::findOrFail($id)->delete();
        return redirect()->route('entradas.index')->with('Sucesso', 'A entrada foi deletada com sucesso');
    }
}
