<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    protected $fillable = ['nombre', 'especie', 'raza', 'fecha_nacimiento', 'id_cliente'];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'id_cliente');
    }

    public function citas()
    {
        return $this->hasMany(Cita::class, 'id_mascota');
    }
}
