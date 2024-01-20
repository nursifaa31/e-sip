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
        Schema::create('sppt', function (Blueprint $table) {
             $table->id();
             $table->text('kode_kecamatan')->required();
             $table->date('tanggal_cetak')->required();
             $table->bigInteger('nop')->required();
             $table->string('nama_wp')->required();
             $table->string('pengambil')->nullable();
             $table->date('tanggal_ambil')->nullable();
             $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sppt');
    }
};

