<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNonperizinanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nonperizinan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('berkas_id');
            $table->string('verifikasi')->default('DIPROSES');
            $table->string('kategori')->default('Bidang Non Perizinan');
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
            // Surat Keterangan Tidak Mampu
            $table->text('foto_rumah_depan')->nullable();
            $table->text('foto_rumah_samping')->nullable();
            $table->text('tanda_pbb')->nullable();
            // Surat Pengantar Desa
            $table->string('keperluan')->nullable();
            $table->string('tanggal_keperluan')->nullable();
            $table->string('tempat_keperluan')->nullable();
            // Officer
            $table->text('file_permohonan_sktm')->nullable();
            $table->text('file_permohonan_supengdesa')->nullable();
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
        Schema::dropIfExists('sktm');
    }
}
