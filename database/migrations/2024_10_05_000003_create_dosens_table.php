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
        Schema::create('dosens', function (Blueprint $table) {
            $table->id('dosen_id');
            $table->unsignedBigInteger('user_id');
            $table->string('nip', 20)->unique();
            $table->string('alamat_dosen', 250);
            $table->string('telepon_dosen', 12);
            $table->date('tgl_dosen');
            $table->string('nama_dosen', 100);
            $table->timestamps();

            // Set foreign key untuk user_id
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dosens');
    }
};
