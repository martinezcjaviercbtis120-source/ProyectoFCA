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
        Schema::create('investigacion', function (Blueprint $table) {
 
            $table->id();
 
            // TITULO
            $table->string('titulo');
 
            // TEXTO PRINCIPAL
            $table->longText('descripcion');
 
            // IMAGENES
            $table->string('imagen1')->nullable();
            $table->string('imagen2')->nullable();
            $table->string('imagen3')->nullable();
            $table->string('imagen4')->nullable();
            $table->string('imagen5')->nullable();
            $table->string('imagen6')->nullable();
 
            // TEXTO INFERIOR
            $table->longText('texto_final');
 
            $table->timestamps();
 
        });
    }
 
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('investigacion');
    }
};