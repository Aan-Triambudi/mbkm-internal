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
        Schema::create('cpl', function (Blueprint $table) {
            $table->id();
            $table->string('kode_cpl');
            $table->string('deskripsi');
            $table->string('jenis_cpl');
            $table->unsignedBigInteger('id_kurikulum');
            $table->foreign('id_kurikulum')->references('id')->on('kurikulum');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cpl');
    }
};