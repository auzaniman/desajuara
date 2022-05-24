<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupengDesaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supeng_desa', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('berkas_id');
            $table->string('nama_pemohon');
            $table->string('email_pemohon');
            $table->string('keperluan');
            $table->string('tanggal_keperluan');
            $table->string('tempat_keperluan');
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
        Schema::dropIfExists('supeng_desa');
    }
}
