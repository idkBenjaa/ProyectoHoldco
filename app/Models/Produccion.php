<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Tareas;

class Produccion extends Model
{
    //Tabla en uso
    protected $table = 'produccion';

    //Aca no se asignaran datos masivos
    protected $guarded = ['*'];

    //No timestamps
    public $timestamps = false;

    //relaciones
    public function tareas()
    {
        return $this->hasMany(Tareas::class, 'id_produccion');
    }
}
