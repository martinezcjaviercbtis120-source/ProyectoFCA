<?php

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
        Schema::create('oferta', function (Blueprint $table) {
            $table->id();
            $table->string('licenciatura'); // Licenciatura
            $table->string('descripcion de la licenciatura'); // Descripción de la licenciatura
            $table->string('coordinadores'); // Nombre de los coordinadores
            $table->string('areacord'); // Área de coordinación
            $table->string('correo'); // Correo electrónico del coordinador
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('oferta');
    }
};
