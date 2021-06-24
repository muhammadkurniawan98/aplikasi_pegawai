<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsulanKenaikanPangkatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usulan_kenaikan_pangkat', function (Blueprint $table) {
            $table->id();
            $table->string('file_pengantar');
            $table->string('file_pns');
            $table->string('file_pangkat_terakhir');
            $table->string('file_jabatan_fungsional');
            $table->string('file_sertifikat_pendidikan');
            $table->string('file_kartu_pegawai');
            $table->boolean('status_verifikasi')->default(false);
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
        Schema::dropIfExists('usulan_kenaikan_pangkat');
    }
}
