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
        Schema::create('ingresos', function (Blueprint $table) {
            $table->bigIncrements('id_ingreso');
            $table->timestamps();
            $table->unsignedBigInteger('estudiante')->unsigned();
            $table->foreign('estudiante')->references('id_estudiante')->on('estudiantes')->onDelete('cascade');
            $table->float('monto');
            $table->unsignedBigInteger('concepto')->unsigned();
            $table->foreign('concepto')->references('id_concepto')->on('conceptos')->onDelete('cascade');
            $table->string('divisa');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
