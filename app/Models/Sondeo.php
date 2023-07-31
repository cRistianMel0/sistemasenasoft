<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sondeo extends Model
{
       protected $fillable=[
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
