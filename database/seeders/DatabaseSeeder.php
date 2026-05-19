<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\OfertaEducativa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
//Seeders para generar datos aleartorios en nuestra base de datos usando factorys correspondientes a cada modelo.
    //OfertaEducativa::factory(4)->create();
    //\App\Models\Alumno::factory(30)->create();    
    //\App\Models\Docente::factory(20)->create();    
    \App\Models\Egresado::factory(60)->create();
    // User::factory(10)->create();

       // User::factory()->create([
           // 'name' => 'Test User',
            //'email' => 'test@example.com',
        //]);
    }
}
