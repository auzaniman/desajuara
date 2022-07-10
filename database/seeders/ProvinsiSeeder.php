<?php

namespace Database\Seeders;

use App\Models\ProvinsiModel;
use Illuminate\Database\Seeder;

class ProvinsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $provinsi = [
        ['nama_provinsi' => 'DI Yogyakarta'],
        ['nama_provinsi' => 'Jawa Tengah'],
      ];

        ProvinsiModel::insert($provinsi);
    }
}
