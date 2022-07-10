<?php

namespace App\Http\Controllers\Officer\NonPerizinan;

use App\Http\Controllers\Controller;
use App\Models\NonPerizinanModel;

class NonPerizinanOfficerController extends Controller
{
  public function non_perizinan()
    {
      $nonperizinan = NonPerizinanModel::where('kategori', 'Bidang Non Perizinan')->count();

      $sktm = NonPerizinanModel::where('nama_ajuan', 'Surat Keterangan Tidak Mampu')->count();
      $verifikasi_sktm = NonPerizinanModel::where('verifikasi', 'DITERIMA')->where('nama_ajuan', 'Surat Keterangan Tidak Mampu')->count();
      $waiting_sktm = NonPerizinanModel::where('verifikasi', 'DIPROSES')->where('nama_ajuan', 'Surat Keterangan Tidak Mampu')->count();

      $supengdesa = NonPerizinanModel::where('nama_ajuan', 'Surat Pengantar Desa')->count();
      $verifikasi_supengdesa = NonPerizinanModel::where('verifikasi', 'DITERIMA')->where('nama_ajuan', 'Surat Pengantar Desa')->count();
      $waiting_supengdesa = NonPerizinanModel::where('verifikasi', 'DIPROSES')->where('nama_ajuan', 'Surat Pengantar Desa')->count();

      return view('officer.pages.layanan.non_perizinan.non_perizinan', [
        'nonperizinan' => $nonperizinan,
        'sktm' => $sktm,
        'verifikasi_sktm' => $verifikasi_sktm,
        'waiting_sktm' => $waiting_sktm,
        'supengdesa' => $supengdesa,
        'verifikasi_supengdesa' => $verifikasi_supengdesa,
        'waiting_supengdesa' => $waiting_supengdesa,
      ]);
    }
}
