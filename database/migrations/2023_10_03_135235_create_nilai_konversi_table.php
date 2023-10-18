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
        Schema::create('nilai_konversi', function (Blueprint $table) {
            $table->id();
            $table->integer('nilai_angka');
            $table->string('nilai_huruf');
            $table->string('validasi_kaprodi');
            $table->unsignedBigInteger('id_mahasiswa');
            $table->unsignedBigInteger('id_matkul');
            $table->unsignedBigInteger('id_lowongan');
            $table->unsignedBigInteger('id_nilai_magang_ext');
            $table->foreign('id_mahasiswa')->references('id')->on('mahasiswa');
            $table->foreign('id_matkul')->references('id')->on('matkul');
            $table->foreign('id_lowongan')->references('id')->on('lowongan');
            $table->foreign('id_nilai_magang_ext')->references('id')->on('nilai_magang_ext');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilai_konversi');
    }
};
