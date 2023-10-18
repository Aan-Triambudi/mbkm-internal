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
        Schema::create('nilai_magang', function (Blueprint $table) {
            $table->id();
            $table->integer('nilai_angka');
            $table->string('nilai_huruf');
            $table->unsignedBigInteger('id_mahasiswa');
            $table->unsignedBigInteger('id_kompetensi_program');
            $table->foreign('id_mahasiswa')->references('id')->on('mahasiswa');
            $table->foreign('id_kompetensi_program')->references('id')->on('kompetensi_program');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilai_magang');
    }
};