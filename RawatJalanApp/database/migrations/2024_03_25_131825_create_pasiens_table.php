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
        Schema::create('pasiens', function (Blueprint $table) {
            $table->increments('noRekapMedis');
            $table->string('namaPengguna', 30);
            $table->char('noKTP', 20);
            $table->char('jekel',1);
            $table->string('tempatLahir', 20);
            $table->date('tanggalLahir');
            $table->char('noBPJS');
            $table->char('noHp', 15);
            $table->string('email', 35);
            $table->string('alamat', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasiens');
    }
};
