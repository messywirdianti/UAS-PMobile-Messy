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
        Schema::create('rekap_medis', function (Blueprint $table) {
            $table->increments('idRekapMedis');
            $table->unsignedInteger('noRekapMedis');
            $table->unsignedInteger('idDokter');
            $table->foreign('noRekapMedis')->references('noRekapMedis')->on('pasiens');
            $table->foreign('idDokter')->references('idDokter')->on('dokters');
            $table->date('tanggalKunjungan');
            $table->string('keluhan', 50);
            $table->string('diagnosa', 50);
            $table->integer('tekananDarah');
            $table->integer('suhuTubuh');
            $table->integer('beratBadan');
            $table->integer('tinggiBadan');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rekap_medis');
    }
};
