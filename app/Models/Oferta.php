<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{

//Nuetra tabla de la base de datos
    protected $table = 'oferta';


//Datos que tenemos dentro de nuestra base de datos que se pueden llenar de forma masiva
    protected $fillable = [
        'licenciatura',
        'descripcion_de_la_licenciatura',
        'coordinadores',
        'areacord',
        'correo'
    ];
    //
}
