<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkUsulanKenaikanPangkatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sk_usulan_kenaikan_pangkat', function (Blueprint $table) {
            $table->id();
            $table->string('file_sk_usulan_kenaikan_pangkat');
            $table->foreignId('usulan_kenaikan_pangkat_id')->constrained('usulan_kenaikan_pangkat');
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
        Schema::dropIfExists('sk_usulan_kenaikan_pangkat');
    }
}
