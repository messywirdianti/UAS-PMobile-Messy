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
        Schema::create('reseps', function (Blueprint $table) {
            $table->increments('idResep');
            $table->unsignedInteger('noRekapMedis');
            $table->unsignedInteger('idDokter');
            $table->unsignedInteger('idObat');
            $table->foreign('noRekapMedis')->references('noRekapMedis')->on('pasiens');
            $table->foreign('idDokter')->references('idDokter')->on('dokters');
            $table->foreign('idObat')->references('idObat')->on('obats');
            $table->string('keterangan', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reseps');
    }
};
