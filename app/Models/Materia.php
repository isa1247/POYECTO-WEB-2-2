<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    // Atributos asignables en masa
    protected $fillable = [
        'nombre', 'descripcion', 'nivel',
    ];

    // Relaciones

    // Relación uno a muchos con Asignacion
    public function asignaciones()
    {
        return $this->hasMany(Asignacion::class);
    }
}
