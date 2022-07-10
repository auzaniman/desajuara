<?php

namespace Database\Seeders;

use App\Models\KecamatanModel;
use Illuminate\Database\Seeder;

class KecamatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $kecamatan = [
        [
          'kota_id' => '1',
          'nama_kecamatan' => 'Umbulharjo'
        ],
        [
          'kota_id' => '2',
          'nama_kecamatan' => 'Pedurungan'
        ],
      ];

        KecamatanModel::insert($kecamatan);
    }
}
