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
        Schema::create('jadwals', function (Blueprint $table) {
            $table->increments('idJadwal');
            $table->unsignedInteger('idDokter');
            $table->unsignedInteger('idPoliKlinik');
            $table->foreign('idDokter')->references('idDokter')->on('dokters');
            $table->foreign('idPoliKlinik')->references('idPoliKlinik')->on('poli_kliniks');
            $table->char('jekel', 1);
            $table->time('jamMulai');
            $table->time('jamSelesai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwals');
    }
};
