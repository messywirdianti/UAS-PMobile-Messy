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
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->increments('idPembayaran');
            $table->unsignedInteger('noRekapMedis');
            $table->foreign('noRekapMedis')->references('noRekapMedis')->on('pasiens');
            $table->date('tanggal');
            $table->decimal('total', 10,2);
            $table->string('keterangan', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayarans');
    }
};
