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
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_evento');
            $table->date('fecha_evento');
            $table->time('hora_ini');
            $table->time('fora_fin');
            $table->string('lugar_evento');
            $table->string('descripcion_evento');
            $table->string('resolucion_evento');
            $table->string('costo_evento');
            $table->timestamps();
            $table->foreignId('usuario_id')->nullable()->constrained('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eventos');
    }
};
