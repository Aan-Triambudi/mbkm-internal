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
        Schema::create('evaluasi_magang', function (Blueprint $table) {
            $table->id();
            $table->text('komentar');
            $table->string('file_sertifikat');
            $table->unsignedBigInteger('id_mahasiswa_magang');
            $table->foreign('id_mahasiswa_magang')->references('id')->on('mahasiswa_magang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluasi_magang');
    }
};
