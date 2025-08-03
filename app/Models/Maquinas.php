<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\EstadoMaquina;
use App\Models\Tareas;

class Maquinas extends Model
{
    protected $table = 'maquinas';


    //Aca no usamos Fillable, ya que no se usaran datos de asignacion masiva.
    protected $guarded = ['*'];

    //No timestamps
    public $timestamps = false;


    //Relaciones con las tablas
    public function tareas()
    {
        return $this->hasMany(Tareas::class, 'id_maquina');
    }

    public function estadoMaquina()
    {
        return $this->belongsTo(EstadoMaquina::class, 'id_estado_maquina');
    }
}
