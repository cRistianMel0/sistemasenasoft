<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tema extends Model
{
    protected $fillable = [
        'nombre',
        'descripcion'
    ];

    protected $primaryKey='idTema';
}
