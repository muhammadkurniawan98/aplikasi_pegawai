<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsulanPensiunsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usulan_pensiun', function (Blueprint $table) {
            $table->id();
            $table->string('file_sk_pns');
            $table->string('file_karis_karsu');
            $table->string('file_kartu_pegawai');
            $table->string('file_fotocopy_ktp');
            $table->string('file_fotocopy_kk');
            $table->string('file_akta_nikah');
            $table->string('file_dokumen_taspen');
            $table->boolean('status_verifikasi')->default(false);
            $table->boolean('status_proses')->default(null);
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
        Schema::dropIfExists('usulan_pensiun');
    }
}
