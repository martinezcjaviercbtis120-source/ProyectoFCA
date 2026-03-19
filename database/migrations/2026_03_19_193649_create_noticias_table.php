<?php
//Tabla de mi base de datos para las noticias, con sus respectivos campos
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('noticias', function (Blueprint $table) {
            $table->id(); // Identificador único
            $table->string('titulo'); // Titulo de la noticia
            $table->string('imagen')->nullable(); // Ruta de la imagen
            $table->text('descripcion'); // Descripción de la noticia
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('noticias');
    }
};
