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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id(); // Campo BIGINT UNSIGNED id autoincrementable
                $table->string('nombre_usuario')->unique();
                $table->string('email')->unique();
                $table->timestamp('email_verified_at')->nullable();
                $table->string('clave_usuario');
                $table->boolean('activo')->default(true);
                $table->enum('rol',['admin', 'locador', 'locatario', 'abogado', 'agente'])->default('agente'); 
                $table->timestamps();
                $table->foreignId('id_persona')->constrained('personas')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
