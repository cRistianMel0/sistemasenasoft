<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Administrador extends Model
{
    protected $table = 'administradores';
    protected $primaryKey = 'idAdministrador';
    protected $fillable = [
        'user_id',
        'nombres',
        'apellidos',
        'tipoDoc',
        'documento',
        'correo',
        'contrasena',
    ];

    // Mutator para realizar el hash de la contraseña antes de guardarla en la base de datos
    public function setContrasenaAttribute($value)
    {
        $this->attributes['contrasena'] = Hash::make($value);
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
