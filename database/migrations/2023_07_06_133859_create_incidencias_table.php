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
        Schema::create('incidencias', function (Blueprint $table) {
            $table->id();
            $table->longText('descripcion')->nullable();
            $table->string('usuario');
            $table->enum('nivel',[0,1])->default(0);
            $table->date('fecha_apertura');
            $table->enum('estado',['Pendiente', 'Aperturado', 'Cierre'])->default('Pendiente');
            $table->foreignId('equipo_id')->constrained('equipos')->onDelete('cascade');
            $table->date('fecha_cierre')->nullable();
            $table->foreignId('oficina_id')->constrained('oficinas')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('etiqueta_id')->constrained('etiquetas')->onDelete('cascade');
            $table->longText('respuesta');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('incidencias');
    }
};
