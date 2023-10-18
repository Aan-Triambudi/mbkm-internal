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
        Schema::create('pendamping_lapang_mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_dosen');
            $table->unsignedBigInteger('id_mahasiswa');
            $table->unsignedBigInteger('id_pl_mitra');
            $table->unsignedBigInteger('id_lowongan');
            $table->foreign('id_dosen')->references('id')->on('dosen');
            $table->foreign('id_mahasiswa')->references('id')->on('mahasiswa');
            $table->foreign('id_pl_mitra')->references('id')->on('pl_mitra');
            $table->foreign('id_lowongan')->references('id')->on('lowongan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendamping_lapang_mahasiswa');
    }
};