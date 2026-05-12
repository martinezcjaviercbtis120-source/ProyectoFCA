<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OfertaEducativa extends Model
{
    use HasFactory;
     //Nuetra tabla de la base de datos
    protected $table = 'ofertaeducativa';
    
    //Datos que tenemos dentro de nuestra base de datos que se pueden llenar de forma masiva
    protected $fillable = [
        'licenciatura',
        'descripcion',
    ];
}
