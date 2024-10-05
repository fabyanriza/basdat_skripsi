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
        Schema::create('skripsis', function (Blueprint $table) {
            $table->id('skripsi_id');
            $table->unsignedBigInteger('mahasiswa_id');
            $table->string('judul', 300);
            $table->enum('status', ['Proses', 'Diterima', 'Ditolak']);
            $table->unsignedBigInteger('sempro_id');
            $table->unsignedBigInteger('semhas_id');
            $table->string('bidang', 50);
            $table->timestamps();

            // Set foreign key untuk user_id
            $table->foreign('mahasiswa_id')->references('mahasiswa_id')->on('mahasiswa')->onDelete('cascade');
            $table->foreign('sempro_id')->references('sempro_id')->on('sempros')->onDelete('cascade');
            $table->foreign('semhas_id')->references('semhas_id')->on('semhass')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skripsis');
    }
};
