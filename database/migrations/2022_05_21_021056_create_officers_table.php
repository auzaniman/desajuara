<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfficersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('officers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('username')->unique();
            $table->string('ttl');
            $table->string('nik');
            $table->string('kk');
            $table->string('kelamin');
            $table->string('pekerjaan');
            $table->string('agama');
            $table->string('perkawinan');
            $table->string('kewarganegaraan');
            $table->string('alamat_ktp');
            $table->string('alamat_domisili');
            $table->string('provinsi');
            $table->string('kota');
            $table->string('kecamatan');
            $table->string('no_telpon');
            $table->string('no_wa')->nullable();
            $table->string('pendidikan');
            $table->string('level_akses')->nullable();
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
        Schema::dropIfExists('officers');
    }
}
