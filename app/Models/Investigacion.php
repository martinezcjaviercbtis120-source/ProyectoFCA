<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class Investigacion extends Model
{
    protected $table = 'investigacion';
 
    //Datos que tenemos dentro de nuestra base de datos donde se asignara la informacion masiva de manera segura 
    //sin modificar los otros campos    
    protected $fillable = [
        'coordinacion',
        'descripcion'
    ];
}