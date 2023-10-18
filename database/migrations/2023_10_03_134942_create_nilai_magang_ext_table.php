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
        Schema::create('nilai_magang_ext', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_mahasiswa');
            $table->unsignedBigInteger('id_magang_ext');
            $table->unsignedBigInteger('id_periode');
            $table->foreign('id_mahasiswa')->references('id')->on('mahasiswa');
            $table->foreign('id_magang_ext')->references('id')->on('magang_ext');
            $table->foreign('id_periode')->references('id')->on('periode');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilai_magang_ext');
    }
};