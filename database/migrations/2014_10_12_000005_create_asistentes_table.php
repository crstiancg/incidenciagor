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
        Schema::create('asistentes', function (Blueprint $table) {
            $table->id();
            $table->integer('id_asistente_usuario');
            $table->boolean('asistio');  
            $table->timestamps();
            
            $table->foreignId('evento_id')->nullable()->constrained('eventos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asistentes');
    }
};
