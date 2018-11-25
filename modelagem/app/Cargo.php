<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
     protected $fillable = [
        'nome', 'descricao'
    ];

    public function user()
    {
        return $this->hasMany('App\Funcionario');
    }
}
