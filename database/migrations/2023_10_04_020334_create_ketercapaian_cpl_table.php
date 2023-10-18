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
        Schema::create('ketercapaian_cpl', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_mahasiswa');
            $table->unsignedBigInteger('id_program_magang');
            $table->unsignedBigInteger('id_cpl');
            $table->foreign('id_mahasiswa')->references('id')->on('mahasiswa');
            $table->foreign('id_program_magang')->references('id')->on('program_magang');
            $table->foreign('id_cpl')->references('id')->on('cpl');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ketercapaian_cpl');
    }
};