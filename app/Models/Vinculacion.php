<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class Vinculacion extends Model
{
    protected $table = 'vinculacion';
     //Datos que tenemos dentro de nuestra base de datos donde se asignara la informacion masiva de manera segura 
    //sin modificar los otros campos
    protected $fillable = [
        'objetivo',
        'funciones',
        'participacion',
        'imagen_principal',
        'imagen_funciones',
        'imagen_participacion',
        'imagen_contacto'
    ];
}