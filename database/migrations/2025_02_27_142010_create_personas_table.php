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
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('nombre_persona', 100);
            $table->string('apellido_persona', 100);
            $table->string('telefono_persona', 100);
            $table->string('direccion_persona', 100);
            $table->string('ci_persona', 100);
            $table->string('sexo_persona', 100);
            $table->foreignId('id_est_civl')->constrained('est_civil')->cascadeOnDelete();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personas');
    }
};
