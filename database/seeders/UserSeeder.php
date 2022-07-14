<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $user = [
        [
          'name' => 'Desa Juara',
          'email' => 'desajuara@gmail.com',
          'username' => 'desajuara',
          'tempat_lahir' => 'Yogya',
          'tanggal_lahir' => '04/25/1998',
          'nik' => '1234567890123457',
          'kk' => '1234567890123458',
          'jabatan_keluarga' => 'Kepala Keluarga',
          'kelamin' => 'Laki-Laki',
          'pendidikan' => 'S1',
          'jurusan' => 'Aplikasi Desa Juara',
          'pekerjaan' => 'Wiraswasta',
          'agama' => 'Islam',
          'perkawinan' => 'Menikah',
          'kewarganegaraan' => 'WNI',
          'status' => 'Warga',
          'desa_ktp' => 'Banyumas',
          'rt_ktp' => 'RT1',
          'rw_ktp' => 'RW2',
          'provinsi_ktp' => '1',
          'kota_ktp' => '1',
          'kecamatan_ktp' => '1',
          'no_telpon' => '089607575813',
          'password' => bcrypt('desajuara12345')
        ],
      ];

      User::insert($user);
    }
}
