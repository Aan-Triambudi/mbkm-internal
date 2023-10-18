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
        Schema::create('lowongan', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('jumlah_lowongan');
            $table->text('deskripsi');
            $table->dateTime('tgl_buka');
            $table->dateTime('tgl_ditutup');
            $table->dateTime('tgl_magang_mulai');
            $table->dateTime('tgl_magang_berakhir');
            $table->string('status');
            $table->unsignedBigInteger('id_mitra');
            $table->foreign('id_mitra')->references('id')->on('mitra');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lowongan');
    }
};