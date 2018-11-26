<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Entrada;
use App\Estoque;
use App\Funcionario;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = User::all()->count();
        $entradas = Entrada::all()->count();
        $estoques = Estoque::all()->count();
        $funcionarios = Funcionario::all()->count();
        $estoque = Estoque::select()->paginate(10);
        return view('home' , compact('usuarios','entradas','estoques','funcionarios','estoque'));
    }
}
