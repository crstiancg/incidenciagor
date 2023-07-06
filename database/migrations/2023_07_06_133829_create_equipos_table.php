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
        Schema::create('equipos', function (Blueprint $table) {
            $table->id();
            $table->string('codpatrominal')->nullable(); //codpatri
            $table->string('descripcion',100)->nullable();
            $table->string('modelo',20)->nullable();
            $table->string('marca',15)->nullable();
            $table->string('serie',12)->nullable();
            $table->string('ip',20)->nullable();
            $table->enum('estado',['Incidencia','Funcional','Suspendido','Inactivo'])->default('Funcional');
            $table->enum('condicion',['Nuevo','Regular','Malo','Desfazado'])->default('Regular');
            $table->string('observacion')->nullable();
            $table->foreignId('oficina_id')->constrained('oficinas')->onDelete('cascade');
            $table->foreignId('tipo_id')->constrained('tipos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipos');
    }
};
