<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $table = 'cliente';

    protected $fillable =['nombres', 'apellidos', 'direccion','celular','nit'];
}
