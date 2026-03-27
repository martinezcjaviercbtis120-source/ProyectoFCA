<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Evento extends Model
{
    use HasFactory;

    //Nuetra tabla de la base de datos
    protected $table = 'eventos';

    //Datos que tenemos dentro de nuestra base de datos
    protected $fillable = [
        'titulo',      
        'imagen',      
        'descripcion', 
    ];
}
