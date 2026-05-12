<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Calendario extends Model
{
    
    //Nuetra tabla de la base de datos
    protected $table = 'calendario';

    //Datos que tenemos dentro de nuestra base de datos que se pueden llenar de forma masiva
    protected $fillable = [
        'evento',
    ];
    //
}
