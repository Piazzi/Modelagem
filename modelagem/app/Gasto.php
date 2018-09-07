<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gasto extends Model
{
    protected $fillable = ['nome','valor','data','descricao','categoria_gasto_id'];
}
