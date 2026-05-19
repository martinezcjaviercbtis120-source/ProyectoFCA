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
        Schema::create('vinculacion', function (Blueprint $table) {
 
            $table->id();
 
            // TEXTOS
            $table->longText('objetivo');
            $table->longText('funciones');
            $table->longText('participacion');
 
            // IMAGENES
            $table->string('imagen_principal');
            $table->string('imagen_funciones');
            $table->string('imagen_participacion');
            $table->string('imagen_contacto');
 
            $table->timestamps();
 
        });
    }
 
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vinculacion');
    }
};