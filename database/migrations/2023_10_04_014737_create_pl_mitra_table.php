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
        Schema::create('pl_mitra', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('notelp');
            $table->string('email');
            $table->unsignedBigInteger('id_mitra');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_mitra')->references('id')->on('mitra');
            $table->foreign('id_user')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pl_mitra');
    }
};