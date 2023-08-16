<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Criterio extends Model
{
    protected $fillable=[
        'nombre',
        'condicion',
        'valor1',
        'valor2'
    ];

    protected $primaryKey = 'idCriterio';
}