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
        Schema::create('pendaftaran', function (Blueprint $table) {
            $table->increments('idDaftar');
            $table->unsignedInteger('noRekapMedis');
            $table->foreign('noRekapMedis')->references('noRekapMedis')->on('pasiens');
            $table->string('namaLengkap', 30);
            $table->string('tempatLahir', 20);
            $table->date('tanggalLahir');
            $table->char('jekel', 1);
            $table->date('tanggalKunjungan');
            $table->string('asalRujukan', 20);
            $table->string('poliTujuan', 30);
            $table->string('dokter', 30);
            $table->string('pekerjaan', 20);
            $table->char('noHp', 15);
            $table->string('agama', 10);
            $table->string('kewarganegaraan', 15);
            $table->string('nomorAntrian')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftaran_onlines');
    }
};
