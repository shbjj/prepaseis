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
        Schema::create('tallers', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('descripcion')->nullable();
            $table->string('ubicacion')->nullable();
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->date('fecha_inicio_inscripcion');
            $table->date('fecha_fin_inscripcion');
            $table->text('horario');
            $table->integer('cupo');
            $table->foreignId('instructor_id')->nullable()->constrained('maestros'); // Relación con Maestro
            $table->string('semestre');
            $table->enum('tipo', ['CIENTIFICO', 'CULTURAL', 'DEPORTIVO']);
            $table->enum('estatus', ['ABIERTO', 'CERRADO', 'EN_CURSO', 'FINALIZADO'])->default('ABIERTO');
            $table->boolean('activo')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tallers');
    }
};
