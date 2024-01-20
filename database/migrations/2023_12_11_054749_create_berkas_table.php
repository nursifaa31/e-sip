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
        Schema::create('berkas', function (Blueprint $table) {
            $table->id();
             $table->string('no_box')->nullable();
             $table->integer('kode_kecamatan')->nullable();
             $table->date('tanggal_pelayanan')->nullable();
             $table->date('tanggal_cetak')->nullable();
             $table->bigInteger('nop')->nullable();
             $table->string('catatan')->nullable();
             $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('berkas');
    }
};
