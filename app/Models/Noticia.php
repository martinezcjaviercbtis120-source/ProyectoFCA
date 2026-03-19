<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    //

    protected $table = 'noticias';
    
    protected function casts(): array{
    return [
        'created_at' => 'datetime',
        'is_Active' => 'boolean'
    ];
}


    public function ObtenerListado(){
        $listadousuarios=Noticia::all();
        return $listadousuarios;
    }

    public function BuscarId($id){
        $registro=Noticia::find($id);
        return $registro;
    }
}