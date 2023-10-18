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
        Schema::create('mitra', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('alamat');
            $table->string('kota');
            $table->string('provinsi');
            $table->string('website');
            $table->string('narahubung');
            $table->string('email');
            $table->string('foto');
            $table->enum('status', ['aktif', 'tdk aktif']);
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_sektor_industri');
            $table->unsignedBigInteger('id_kategori');
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_sektor_industri')->references('id')->on('sektor_industri');
            $table->foreign('id_kategori')->references('id')->on('kategori');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mitra');
    }
};