<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsulanKenaikanGajisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usulan_kenaikan_gaji', function (Blueprint $table) {
            $table->id();
            $table->string('file_pangkat_terakhir');
            $table->string('file_gaji_berkala');
            $table->string('file_dokumen_simpedu');
            $table->boolean('status_verifikasi')->default(false);
            $table->boolean('status_proses')->default(null);
            $table->text('pesan')->default('belum diproses');
            $table->foreignId('user_id')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usulan_kenaikan_gaji');
    }
}
