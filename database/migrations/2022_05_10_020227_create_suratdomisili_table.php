<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratdomisiliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suratdomisili', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('berkas_id');
            $table->foreignId('verifikasi_id')->nullable();
            $table->string('kategori')->default('Administrasi Kependudukan');
            $table->string('nama_ajuan')->default('Surat Domisili');
            $table->string('nama_pemohon');
            $table->string('email_pemohon')->unique();
            $table->text('file_surdom')->nullable();
            $table->text('bukti_pengantar');
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
        Schema::dropIfExists('suratdomisili');
    }
}
