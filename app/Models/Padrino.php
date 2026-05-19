<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class Padrino extends Model
{
    protected $table = 'padrinos';

     //Datos que tenemos dentro de nuestra base de datos donde se asignara la informacion masiva de manera segura 
    //sin modificar los otros campos
    protected $fillable = [
        'imagen',
        'nombre',
        'profesion',
        'correo'
    ];
}