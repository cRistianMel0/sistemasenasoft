<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    protected $fillable=[
        'idSondeo',
        'descripcion',
        'tipo'
    ];

    protected $primaryKey = 'idPregunta';
}
