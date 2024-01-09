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
        Schema::create('lokasi', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->text('alamat');
            $table->unsignedBigInteger('provinces_id');
            $table->unsignedBigInteger('cities_id');
            $table->unsignedBigInteger('districts_id');
            $table->unsignedBigInteger('villages_id');
            $table->foreign('provinces_id')->references('id')->on('provinces');
            $table->foreign('cities_id')->references('id')->on('cities');
            $table->foreign('districts_id')->references('id')->on('districts');
            $table->foreign('villages_id')->references('id')->on('villages');

            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lokasi');
    }
};
