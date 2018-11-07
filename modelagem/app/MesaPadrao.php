<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MesaPadrao extends Model
{
    protected $fillable = ['numero','ocupada'];
    protected $table = 'MesaPadrao';
}
