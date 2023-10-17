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
        Schema::create('jadwal_kuliahs', function (Blueprint $table) {
            $table->id();
            $table->char('kode_matakuliah', 8);
            $table->char('kode_term', 8);
            $table->char('kode_dosen', 8);
            $table->char('day', 6);
            $table->time('jam_mulai');
            $table->time('jam_selesai');
            $table->char('ruangan', 5);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_kuliahs');
    }
};
