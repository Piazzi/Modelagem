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
        $entradas = Entrada::select()->paginate(10);
        $categoriasEntrada = Categoria_Entrada::all();

        return view('entradas', compact('entradas', 'categoriasEntrada'));
    }

    public function store(Request $request)
    {
        Entrada::create($request->all());
        return redirect()->back()->with('Sucesso', 'A entrada foi adicionada com sucesso');
    }

    public function show(Entrada $entrada) {
        return $entrada;
    }

    public function update(Request $request, $id) {
        Entrada::findOrFail($id)->update($request->all());
        return redirect()->back()->with('Sucesso', 'A entrada foi alterada com sucesso');
    }

    public function destroy($id) {
        Entrada::findOrFail($id)->delete();
        return redirect()->back()->with('Sucesso', 'A entrada foi deletada com sucesso');
    }
}
