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
        Schema::create('ofertaeducativa', function (Blueprint $table) {
            $table->id();
            $table->string('licenciatura'); // Nombre del alumno
            $table->string('descripcion'); // Apellido del alumno
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ofertaeducativa');
    }
};
