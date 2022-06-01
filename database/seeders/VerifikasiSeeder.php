<?php

namespace Database\Seeders;

use App\Models\VerifikasiModel;
use Illuminate\Database\Seeder;

class VerifikasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $verify = [
        ['status_verifikasi' => 'Diterima'],
        ['status_verifikasi' => 'Ditolak'],
      ];

      VerifikasiModel::insert($verify);
    }
}
