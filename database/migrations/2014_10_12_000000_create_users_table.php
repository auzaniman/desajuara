<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('username')->unique();
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->string('nik')->unique();
            $table->string('kk');
            $table->string('npwp')->nullable()->unique();
            $table->string('kelamin');
            $table->string('pendidikan');
            $table->string('jurusan');
            $table->string('pekerjaan');
            $table->string('agama');
            $table->string('perkawinan');
            $table->string('kewarganegaraan');
            $table->string('desa_ktp');
            $table->string('rt_ktp');
            $table->string('rw_ktp');
            $table->string('provinsi_ktp');
            $table->string('kota_ktp');
            $table->string('kecamatan_ktp');
            $table->string('desa_domisili')->nullable();
            $table->string('rt_domisili')->nullable();
            $table->string('rw_domisili')->nullable();
            $table->string('provinsi_domisili')->nullable();
            $table->string('kota_domisili')->nullable();
            $table->string('kecamatan_domisili')->nullable();
            $table->string('no_telpon')->unique();
            $table->string('no_wa')->nullable();
            $table->string('roles')->default('USER');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
