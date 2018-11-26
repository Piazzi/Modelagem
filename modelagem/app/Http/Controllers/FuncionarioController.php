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

        foreach($funcionarios as $funcionario)
        $funcionario->cargo_id = Cargo::find($funcionario->cargo_id)->nome;

        return view('funcionarios.funcionarios', ['cargos' => $cargos, 'funcionarios' => $funcionarios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cargos = Cargo::all();
        return view('funcionarios.funcionarios_create', compact('cargos'));
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
            'nacionalidade' => 'required|string',
            'telefone' => 'required|string',
            'email' => 'required|email',
            'rg' => 'required',
            'cpf' => 'required',
            'carteira_de_trabalho' => 'required',
            'salario_base' => 'required|numeric',
            'cidade' => 'required|string',
            'estado' => 'required',
            'cep' => 'required',
            'bairro' => 'required',
            'logradouro' => 'required',
            'numero' => 'numeric|required',
            'complemento' => 'nullable',
        ]);
        Funcionario::create($request->all());
        return redirect()->route('funcionarios.index')->with('Sucesso', 'O funcionário foi adicionado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param Funcionario $funcionario
     * @return Funcionario
     */
    public function show($id)
    {
        $funcionario = Funcionario::findOrFail($id);
        return view('funcionarios.funcionarios_show', compact('funcionario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $funcionario = Funcionario::findOrFail($id);
        $cargos = Cargo::all();

        return view('funcionarios.funcionarios_edit', compact('funcionario','id','cargos'));
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
        $request->validate([
            'nome' => 'required|max:255|min:3',
            'nacionalidade' => 'required|string',
            'cargo' => 'required',
            'telefone' => 'required|string',
            'email' => 'required|email',
            'rg' => 'required',
            'cpf' => 'required',
            'carteira_de_trabalho' => 'required',
            'salario_base' => 'required|numeric',
            'cidade' => 'required|string',
            'estado' => 'required',
            'cep' => 'required',
            'bairro' => 'required',
            'logradouro' => 'required',
            'numero' => 'numeric|required',
            'complemento' => 'nullable',
        ]);
        $funcionario = Funcionario::findOrFail($id);
        $funcionario->update($request->all());

        return redirect()->route('funcionarios.index')->with('Sucesso', 'O funcionário foi alterado com sucesso')->withInput();
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

        return redirect()->route('funcionarios.index')->with('Sucesso', 'O funcionário foi removido com sucesso');
    }
}
