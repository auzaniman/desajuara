<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratKeteranganUsahaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_keterangan_usaha', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('berkas_id');
            $table->string('nama_pemohon');
            $table->string('email_pemohon');
            $table->string('bidang_usaha');
            $table->string('nama_usaha');
            $table->string('alamat_usaha');
            $table->string('tahun_memulai');
            $table->string('jumlah_karyawan');
            $table->string('omzet');
            $table->string('aset');
            $table->text('pengantar');
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
        Schema::dropIfExists('surat_keterangan_usaha');
    }
}
