<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Criterio extends Model
{
    protected $fillable=[
        'fechaInicio',
        'fecha',
        'sexo',
        'etnia',
        'edad',
        'estrato',
        'discapacidad',
        'nivelEducativo'
    ];

    protected $primaryKey = 'idCriterio';
}