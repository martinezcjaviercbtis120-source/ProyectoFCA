<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuscadorController extends Controller
{
    public function index(Request $request)
    {
        // Limpiamos el texto, quitamos espacios y lo pasamos a minúsculas
        $query = strtolower(trim($request->input('query')));

        if (empty($query)) {
            return redirect()->back();
        }

        // Nuestro diccionario aqui vinculamos las palabras clave con las URLs de nuestras vistas
        $vistas = [
            'estudiantes'   => '/estudiantes',
            'estudiante'    => '/estudiantes',
            'alumnos'       => '/estudiantes',
            'alumno'        => '/estudiantes',
            'padrino'       => '/estudiantes',
            
            'docentes'      => '/docentes',
            'docente'       => '/docentes',
            'maestros'      => '/docentes',
            'maestro'       => '/docentes',
            'profesores'    => '/docentes',
            
            'egresados'     => '/egresados',
            'egresado'      => '/egresados',
            'graduados'     => '/egresados',
            'titulados'     => '/egresados',

            'oferta'        => '/oferta-educativa',
            'carreras'      => '/oferta-educativa',
            'licenciatura'  => '/oferta-educativa',
            'licenciaturas' => '/oferta-educativa',
            'coordinador'   => '/oferta-educativa',
            'coordinadores' => '/oferta-educativa',
            
            'personal'      => '/trabajadores',
            'trabajadores'  => '/trabajadores',
            'trabajador'    => '/trabajadores',
            'empleados'     => '/trabajadores',
            
            'protocolo' => '/construccion',
            'usuarios'  => '/construccion',
            'humo'      => '/construccion',
            'mapa'      => '/construccion',
        ];
        
        // Este código nos sirve para si escribimos la palabra exacta, nos redirige directo a la vista
        if (array_key_exists($query, $vistas)) {
            return redirect($vistas[$query]);
        }

        // En este apartado si la busqueda no fue exacta, se buscan las coincidencias parciales
        $sugerencias = [];
        foreach ($vistas as $keyword => $url) {
            if (str_contains($keyword, $query)) {
                // Se usa la url como llave para evitar duplicar enlaces en la pantalla
                $sugerencias[$url] = $url;
            }
        }

        // Si se encuentra una coincidencia parcial, nos va a redirigir directo a la vista de sugerencias
        if (count($sugerencias) === 1) {
            return redirect(array_key_first($sugerencias));
        }

        // Si se tienen varias sugerencias o ninguna, nos redirige a una vista de resultados
        return view('buscar', compact('sugerencias', 'query'));
    }
}