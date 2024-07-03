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
        Schema::create('apoteker', function (Blueprint $table) {
            $table->increments('idApoteker');
            $table->string('namaApoteker', 30);
            $table->char('jekel',1);
            $table->string('email', 35);
            $table->char('noHp', 15);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apoteker');
    }
};
