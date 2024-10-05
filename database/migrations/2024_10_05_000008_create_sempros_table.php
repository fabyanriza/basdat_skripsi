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
        Schema::create('sempros', function (Blueprint $table) {
            $table->id('sempro_id');
            
            $table->unsignedBigInteger('jadwal_id');
            $table->string('hasil', 500);
            $table->string('dosji_1', 30);
            $table->enum('status', ['Diterima', 'Ditolak']);
            $table->string('dokumen', 100);
            $table->timestamps();

             // Set foreign key untuk user_id
             
             $table->foreign('jadwal_id')->references('jadwal_id')->on('jadwals')->onDelete('cascade');
 
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sempros');
    }
};
