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
        Schema::create('bimbingans', function (Blueprint $table) {
            $table->id('bimbingan_id');
            $table->unsignedBigInteger(column:'skripsi_id');
            $table->unsignedInteger(column:'dosen_id');
            $table->unsignedInteger(column:'mahasiswa_id');
            $table->date(column:'tanggal');
            $table->text(column:'note');

            $table->foreign('skripsi_id')->references('skripsi_id')->on('skripsis')->onDelete('cascade');
            $table->foreign('dosen_id')->references('dosen_id')->on('dosens')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bimbingans');
    }
};
