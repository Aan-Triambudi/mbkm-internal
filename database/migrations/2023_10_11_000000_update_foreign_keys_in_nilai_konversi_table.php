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
        Schema::table('nilai_konversi', function (Blueprint $table) {
            $table->unsignedBigInteger('id_nilai_magang')->nullable();
            $table->foreign('id_nilai_magang')->references('id')->on('nilai_magang');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('nilai_konversi', function (Blueprint $table) {
            $table->dropForeign(['id_nilai_magang']);
            $table->dropColumn('id_nilai_magang');
        });
    }
};
