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
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('campo_id');
            $table->unsignedBigInteger('jugador_id');
            $table->date('fecha_reserva')->nullable();
            $table->time('hora_inicio')->nullable();
            $table->integer('duracion')->nullable();
            $table->integer('numero_jugadores')->nullable();
            $table->timestamps();

            $table->foreign('campo_id')->references('id')->on('campos');
            $table->foreign('jugador_id')->references('id')->on('jugadores');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};
