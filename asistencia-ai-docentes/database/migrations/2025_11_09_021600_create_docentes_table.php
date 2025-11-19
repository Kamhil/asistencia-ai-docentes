<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('docentes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_completo');
            $table->string('correo')->nullable();
            
            // Tu modificación aplicada:
            $table->string('dni')->unique()->nullable(); 
            
            $table->json('asistencias')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * ESTA ES LA PARTE QUE TE FALTABA
     */
    public function down(): void
    {
        Schema::dropIfExists('docentes');
    }
};