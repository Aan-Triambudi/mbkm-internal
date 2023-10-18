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
        Schema::create('kaprodi', function (Blueprint $table) {
            $table->id();
            $table->dateTime('periode_mulai');
            $table->dateTime('periode_akhir');
            $table->string('status');
            $table->unsignedBigInteger('id_dosen');
            $table->foreign('id_dosen')->references('id')->on('dosen');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kaprodi');
    }
};