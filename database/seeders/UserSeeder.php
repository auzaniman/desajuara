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
          'desa_ktp' => 'Banyumas',
          'rt_ktp' => 'RT1',
          'rw_ktp' => 'RW2',
          'provinsi_ktp' => '1',
          'kota_ktp' => '1',
          'kecamatan_ktp' => '1',
          'no_telpon' => '089607575813',
          'password' => bcrypt('desajuara12345')
        ],
        [
          'name' => 'Auzan',
          'email' => 'auzan@gmail.com',
          'username' => 'auzaniman',
          'tempat_lahir' => 'Yogya',
          'tanggal_lahir' => '04/25/1996',
          'nik' => '1234567890123456',
          'kk' => '1234567890123459',
          'jabatan_keluarga' => 'Suami',
          'kelamin' => 'Laki-Laki',
          'pendidikan' => 'S1',
          'jurusan' => 'Ilmu Bisnis',
          'pekerjaan' => 'Wiraswasta',
          'agama' => 'Islam',
          'perkawinan' => 'Menikah',
          'kewarganegaraan' => 'WNI',
          'desa_ktp' => 'Yogya',
          'rt_ktp' => 'RT3',
          'rw_ktp' => 'RW4',
          'provinsi_ktp' => '2',
          'kota_ktp' => '2',
          'kecamatan_ktp' => '2',
          'no_telpon' => '089607575819',
          'password' => bcrypt('auzaniman12345')
        ],
        [
          'name' => 'Aizan',
          'email' => 'aizan@gmail.com',
          'username' => 'aizan',
          'tempat_lahir' => 'Yogya',
          'tanggal_lahir' => '04/25/1995',
          'nik' => '1234563890123456',
          'kk' => '1234567830123459',
          'jabatan_keluarga' => 'Anak Kandung',
          'kelamin' => 'Laki-Laki',
          'pendidikan' => 'SMA',
          'jurusan' => 'Ilmu Bisnis',
          'pekerjaan' => 'Wiraswasta',
          'agama' => 'Islam',
          'perkawinan' => 'Menikah',
          'kewarganegaraan' => 'WNI',
          'desa_ktp' => 'Yogya',
          'rt_ktp' => 'RT3',
          'rw_ktp' => 'RW4',
          'provinsi_ktp' => '1',
          'kota_ktp' => '1',
          'kecamatan_ktp' => '1',
          'no_telpon' => '089607535819',
          'password' => bcrypt('auzaniman12345')
        ], [
          'name' => 'Airi',
          'email' => 'airi@gmail.com',
          'username' => 'airi',
          'tempat_lahir' => 'Tenggarong',
          'tanggal_lahir' => '04/25/2001',
          'nik' => '1233563893123456',
          'kk' => '1234567830123459',
          'jabatan_keluarga' => 'Istri',
          'kelamin' => 'Perempuan',
          'pendidikan' => 'S2',
          'jurusan' => 'Ilmu Bisnis',
          'pekerjaan' => 'Wiraswasta',
          'agama' => 'Islam',
          'perkawinan' => 'Menikah',
          'kewarganegaraan' => 'WNI',
          'desa_ktp' => 'Yogya',
          'rt_ktp' => 'RT3',
          'rw_ktp' => 'RW4',
          'provinsi_ktp' => '1',
          'kota_ktp' => '1',
          'kecamatan_ktp' => '1',
          'no_telpon' => '082607535819',
          'password' => bcrypt('auzaniman12345')
        ],

      ];

      User::insert($user);
    }
}
