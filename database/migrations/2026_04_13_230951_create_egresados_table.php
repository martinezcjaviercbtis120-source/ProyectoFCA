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
        Schema::create('egresados', function (Blueprint $table) {
            $table->id();
            $table->string('nombre'); // Nombre del egresado
            $table->string('apellido'); // Apellido del egresado
            $table->string('email')->unique(); // Correo electrónico del egresado
            $table->string('telefono')->nullable(); // Teléfono del egresado
            $table->string('carrera')->nullable(); // Carrera del egresado
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('egresados');
    }
};
