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
        Schema::create('komentar_logbook', function (Blueprint $table) {
            $table->id();
            $table->text('komentar');
            $table->date('tanggal');
            $table->integer('nilai');
            $table->unsignedBigInteger('id_pendamping_lapang_mahasiswa');
            $table->unsignedBigInteger('id_logbook');
            $table->foreign('id_pendamping_lapang_mahasiswa')->references('id')->on('pendamping_lapang_mahasiswa');
            $table->foreign('id_logbook')->references('id')->on('logbook');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('komentar_logbook');
    }
};