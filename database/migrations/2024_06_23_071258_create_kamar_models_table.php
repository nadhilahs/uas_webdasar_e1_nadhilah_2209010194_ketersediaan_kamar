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
        Schema::create('kamar_models', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('kamar_id');
            $table->string('kelas');
            $table->string('fasilitas');
            $table->string('harga');
            $table->string('status');
            $table->timestamps();

            $table->foreign('kamar_id')->references('id')->on('kamar');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kamar_models');
    }
};
