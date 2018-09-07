<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estoque extends Model
{
    protected $fillable = ['nome', 'quantidade', 'quantidade_minima', 'valor_compra', 'valor_venda'];
}
