<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
        /**
         * Summary of fillable
         * @var array
         */
        protected $fillable = [
        'nombre',
        'precio',
        'stock',
        'imagen',
        'descripcion',
    ];
}
