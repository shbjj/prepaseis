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
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido_paterno');
            $table->string('apellido_materno')->nullable();
            $table->string('telefono')->nullable();
            $table->foreignId('user_id')->nullable()->constrained(); // Relación con User
            $table->string('matricula')->unique()->nullable();
            $table->enum('estatus', ['INSCRITO', 'RECURSADOR', 'EGRESADO','BAJA_DEFINITIVA','BAJA_TEMPORAL'])->default('INSCRITO');  
            $table->string('carrera')->nullable();
            $table->string('grupo')->nullable();
            $table->integer('grado');
            $table->date('fecha_nacimiento')->nullable();
            $table->string('curp')->nullable();
            $table->string('sexo')->nullable();
            $table->string('estado')->nullable();
            $table->string('municipio')->nullable();
            $table->string('cp')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnos');
    }
};
