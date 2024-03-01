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
        Schema::create('pembangunans', function (Blueprint $table) {
            $table->id();
            $table->string('lokasi');
            $table->integer('luas_tanah');
            $table->integer('jumlah_unit');
            $table->integer('jenis_surat');
            $table->integer('jumlah_surat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembangunans');
    }
};
