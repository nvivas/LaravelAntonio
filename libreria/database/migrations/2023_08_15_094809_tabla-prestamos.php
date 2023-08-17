<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('prestamos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('book_id');
            $table->date('fecha_prestamo');
            $table->date('fecha_devolucion');
            $table->timestamps();

            // Definir las relaciones con las tablas de usuarios y libros
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('book_id')->references('id')->on('libros');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prestamos');
    }
};
