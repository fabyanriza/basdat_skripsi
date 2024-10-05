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
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id('mahasiswa_id');
            $table->unsignedBigInteger('user_id'); // Pastikan tipe data cocok
            $table->string('nim', 20)->unique();
            $table->string('jurusan', 100);
            $table->date('tgl_mhsw');
            $table->unsignedInteger('sks');
            $table->string('alamat_mhsw', 250);
            $table->string('telepon_mhsw');
            $table->string('nama_mhsw', 100);
            $table->string('dospem_1', 50);
            $table->string('dospem_2', 50);
            $table->timestamps();

            // Pastikan foreign key merujuk ke kolom id di tabel users
            $table->foreign('user_id')->references('id')->on('users')->OnDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswa');
    }
};
