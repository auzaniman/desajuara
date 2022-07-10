<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerizinanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perizinan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('berkas_id');
            $table->string('verifikasi')->default('DIPROSES');
            $table->string('kategori')->default('Bidang Perizinan');
            $table->string('nama_ajuan')->nullable();
            $table->string('nama_pemohon');
            $table->string('alamat_pemohon');
            $table->string('hp_pemohon');
            $table->string('email_pemohon');
            $table->string('nik_pemohon');
            $table->string('kk_pemohon');
            $table->text('foto_ktp_pemohon')->nullable();
            $table->text('foto_kk_pemohon')->nullable();
            $table->text('pengantar_rtrw')->nullable();
            $table->string('bidang_usaha')->nullable();
            $table->string('nama_usaha')->nullable();
            $table->string('alamat_usaha')->nullable();
            $table->string('tahun_memulai')->nullable();
            $table->string('jumlah_karyawan')->nullable();
            $table->string('omzet')->nullable();
            $table->string('aset')->nullable();
            $table->text('file_permohonan_suketusaha')->nullable();
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
        Schema::dropIfExists('perizinan');
    }
}
