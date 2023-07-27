<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sondeos extends Model
{
    use HasFactory;
    protected $fillable[
        'idSondeo',
        'idAdministrador',
        'idTema',
        'idCriterio',
        'titulo',
        'descripcion',
        'resultado',
        'fechaHoraInicio',
        'fechaHoraFin',
        'imagen'
    ];

    protected $primaryKey='idSondeo';
}
