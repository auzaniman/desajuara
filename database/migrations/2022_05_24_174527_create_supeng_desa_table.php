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
            $table->foreignId('verifikasi_id')->default('3');
            $table->string('kategori')->default('Bidang Non Perizinan');
            $table->string('nama_ajuan')->default('Surat Pengantar Desa');
            $table->string('nama_pemohon');
            $table->string('alamat_pemohon');
            $table->string('hp_pemohon');
            $table->string('email_pemohon');
            $table->string('nik_pemohon');
            $table->string('kk_pemohon');
            $table->string('keperluan');
            $table->string('tanggal_keperluan');
            $table->string('tempat_keperluan');
            $table->text('foto_ktp_pemohon');
            $table->text('foto_kk_pemohon');
            $table->text('file_supeng')->nullable();
            $table->text('keterangan')->nullable();
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
