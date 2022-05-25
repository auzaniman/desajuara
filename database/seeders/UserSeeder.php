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
        'name' => 'Desa Juara',
        'email' => 'desajuara@gmail.com',
        'username' => 'desajuara',
        'ttl' => 'Yogya 12 juni',
        'nik' => '1234567890123457',
        'kk' => '1234567890123458',
        'kelamin' => 'Laki-Laki',
        'pekerjaan' => 'Wiraswasta',
        'agama' => 'Islam',
        'perkawinan' => 'Menikah',
        'kewarganegaraan' => 'WNI',
        'alamat_ktp' => 'Banyumas',
        'alamat_domisili' => 'Banyumas',
        'provinsi' => 'Jawa Tengah',
        'kota' => 'Banyumas',
        'kecamatan' => 'Karangnangka',
        'no_telpon' => '089607575813',
        'pendidikan' => 'Aplikasi Desa Juara',
        'password' => bcrypt('desajuara12345')
      ];

      User::insert($user);
    }
}
