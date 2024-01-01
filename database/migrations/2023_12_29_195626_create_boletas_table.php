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
        Schema::create('boletas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('taller_id')->constrained(); // Relación con Taller
            $table->foreignId('alumno_id')->constrained(); // Relación con Alumno
            $table->foreignId('instructor_id')->nullable()->constrained('maestros'); // Relación con Maestro
            $table->foreignId('director_id')->nullable()->constrained('maestros'); // Relación con Maestro
            $table->string('nombre_taller');
            $table->string('semestre');
            $table->text('descripcion')->nullable();
            $table->date('fecha_inicio')->nullable();
            $table->date('fecha_fin')->nullable();
            $table->enum('estatus', ['INSCRITO', 'APROBADO', 'NO_APROBADO'])->default('INSCRITO');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('boletas');
    }
};
