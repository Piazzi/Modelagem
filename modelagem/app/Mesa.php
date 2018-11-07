<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
    protected $fillable = ['mesa_id', 'produto_id', 'quantidade'];
}
