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
        Schema::create('program_magang', function (Blueprint $table) {
            $table->id();
            $table->string('kegiatan');
            $table->dateTime('waktu_mulai');
            $table->dateTime('waktu_akhir');
            $table->string('posisi_mahasiswa');
            $table->string('validasi_kaprodi');
            $table->unsignedBigInteger('id_lowongan');
            $table->unsignedBigInteger('id_pl_mitra');
            $table->foreign('id_lowongan')->references('id')->on('lowongan');
            $table->foreign('id_pl_mitra')->references('id')->on('pl_mitra');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('program_magang');
    }
};