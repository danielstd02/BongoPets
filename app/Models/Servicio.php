<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $fillable = ['nombre_servicio', 'precio'];

    public function citas()
    {
        return $this->hasMany(Cita::class, 'id_servicio');
    }
}
