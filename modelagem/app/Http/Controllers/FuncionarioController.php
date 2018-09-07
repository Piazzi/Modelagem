<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Funcionario;
use App\Cargo;

class FuncionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cargos = Cargo::all();
        $funcionarios = Funcionario::select()->paginate(10);

        return view('funcionarios', ['cargos' => $cargos, 'funcionarios' => $funcionarios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Funcionario::create($request->all());
        return redirect()->back()->with('Sucesso', 'O funcionário foi adicionado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param Funcionario $funcionario
     * @return Funcionario
     */
    public function show(Funcionario $funcionario)
    {
        return $funcionario;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        /**
         * @var Funcionario $funcionario
         */
        $funcionario = Funcionario::findOrFail($id);
        $funcionario->update($request->all());

        return redirect()->back()->with('Sucesso', 'O funcionário foi alterado com sucesso')->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $funcionario = Funcionario::findOrFail($id);
        $funcionario->delete();

        return redirect()->back()->with('Sucesso', 'O funcionário foi removido com sucesso');
    }
}
