<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sondeo extends Model
{
    protected $fillable=[
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

    
    public function preguntas()
    {
        return $this->hasMany(Pregunta::class, 'idSondeo', 'idSondeo');
    }

    public function criterio()
    {
        return $this->belongsTo(Criterio::class, 'idCriterio');
    }
}



