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
        Schema::create('docentes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre'); // Nombre del docente
            $table->string('apellido'); // Apellido del docente
            $table->string('email')->unique(); // Correo electrónico del docente
            $table->string('telefono')->nullable(); // Teléfono del docente
            $table->string('asignatura')->nullable(); // Asignatura que dicta el docente
            $table->string('area')->nullable(); // Área de trabajo del docente
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('docentes');
    }
};
