<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entrada extends Model
{
    protected $fillable = ['nome', 'valor', 'data', 'categoria_entrada_id', 'pago', 'descricao'];
}
