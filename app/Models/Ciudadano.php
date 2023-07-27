<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Ciudadano extends Model
{
    protected $table = 'ciudadanos';
    protected $primaryKey = 'idCiudadano';
    protected $fillable = [
        'nombres',
        'apellidos',
        'tipoDoc',
        'documento',
        'sexo',
        'telCelular',
        'telFijo',
        'correo',
        'contrasena',
        'municipio',
        'direccion',
        'barrioVereda',
        'fechaNacimiento',
        'etnia',
        'discapacidad',
        'estrato',
        'nivelEducativo',
        'dispositivosTecnologicos',
        'mediosTecnologicos',
        'conectividadInternet',
    ];

    // Mutator para realizar el hash de la contraseña antes de guardarla en la base de datos
    public function setContrasenaAttribute($value)
    {
        $this->attributes['contrasena'] = Hash::make($value);
    }
}
