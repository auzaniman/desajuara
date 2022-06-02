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
          'tanggal_lahir' => '04/25/2022',
          'nik' => '1234567890123457',
          'kk' => '1234567890123458',
          'kelamin' => 'Laki-Laki',
          'pekerjaan' => 'Wiraswasta',
          'agama' => 'Islam',
          'perkawinan' => 'Menikah',
          'kewarganegaraan' => 'WNI',
          'desa_ktp' => 'Banyumas',
          'rt_ktp' => '1',
          'rw_ktp' => '2',
          'provinsi_ktp' => 'Jateng',
          'kota_ktp' => 'Banyumas',
          'kecamatan_ktp' => 'Karangnangka',
          'no_telpon' => '089607575813',
          'pendidikan' => 'Aplikasi Desa Juara',
          'password' => bcrypt('desajuara12345')
        ],
        [
          'name' => 'Auzan',
          'email' => 'auzan@gmail.com',
          'username' => 'auzaniman',
          'tempat_lahir' => 'Yogya',
          'tanggal_lahir' => '04/25/2022',
          'nik' => '1234567890123456',
          'kk' => '1234567890123459',
          'kelamin' => 'Laki-Laki',
          'pekerjaan' => 'Wiraswasta',
          'agama' => 'Islam',
          'perkawinan' => 'Menikah',
          'kewarganegaraan' => 'WNI',
          'desa_ktp' => 'Yogya',
          'rt_ktp' => '28',
          'rw_ktp' => '7',
          'provinsi_ktp' => 'DIY',
          'kota_ktp' => 'Yogya',
          'kecamatan_ktp' => 'Umbulharjo',
          'no_telpon' => '089607575819',
          'pendidikan' => 'Programmer Web',
          'password' => bcrypt('auzaniman12345')
        ],

      ];

      User::insert($user);
    }
}
