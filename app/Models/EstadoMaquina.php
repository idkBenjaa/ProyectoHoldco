<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Maquinas;

class EstadoMaquina extends Model
{
    //Tabla que se usara
    protected $table = 'estado_maquina';

    //Datos de asignacion masiva
    protected $fillable = [

        'estado'

    ];

    //No se usara timestamps
    public $timestamps = false;

    //relacion con maquinas
    public function maquinas() {

        return $this->hasMany(Maquinas::class, 'id_estado_maquina');

    }
}
