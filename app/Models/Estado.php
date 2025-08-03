<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Tareas;

class Estado extends Model
{

    //Que tabla se utilizara en este modelo
    protected $table = 'estado';

    //Que datos pueden ser asignados masivamente
    protected $fillable =[

        'estado'

    ];

    //No se usara timestamps por lo que se deja en falso
    public $timestamps = false;


    //Se crea la funcion tareas que relaciona la tabla con tareas
    public function tareas()
    {
        return $this->hasMany(Tareas::class, 'id_estado');
    }
}
