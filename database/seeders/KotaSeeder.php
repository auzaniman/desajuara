<?php

namespace Database\Seeders;

use App\Models\KotaModel;
use Illuminate\Database\Seeder;

class KotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $kota =[
        [
          'provinsi_id' => '1',
          'nama_kota' => 'Kota Yogyakarta'
        ],
        [
          'provinsi_id' => '2',
          'nama_kota' => 'Semarang'
        ],
      ];

        KotaModel::insert($kota);
    }
}
