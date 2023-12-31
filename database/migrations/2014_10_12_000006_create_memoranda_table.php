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
        Schema::create('memoranda', function (Blueprint $table) {
            $table->id();
            $table->string('numero_memorandum');
            $table->string('anio_memorandum');
            $table->string('remitente_memorandum');
            $table->text('cuerpo_memorandum');
            $table->timestamps();

            $table->foreignId('evento_id')->nullable()->constrained('eventos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('memoranda');
    }
};
