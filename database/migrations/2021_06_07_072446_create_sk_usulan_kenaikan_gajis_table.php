<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkUsulanKenaikanGajisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sk_usulan_kenaikan_gaji', function (Blueprint $table) {
            $table->id();
            $table->string('file_sk_usulan_kenaikan_gaji');
            $table->foreignId('usulan_kenaikan_gaji_id')->constrained('usulan_kenaikan_gaji');
            $table->foreignId('admin_id')->constrained('admins');
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
        Schema::dropIfExists('sk_usulan_kenaikan_gaji');
    }
}
