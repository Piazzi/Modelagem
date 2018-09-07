<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $fillable = ['nome', 'rg', 'cpf', 'email', 'telefone', 'nacionalidade',
     'cep', 'estado', 'cidade', 'bairro', 'logradouro', 'numero', 'complemento',
     'carteira_trabalho', 'salario', 'cargo_id'];
}
