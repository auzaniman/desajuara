<?php

namespace App\Http\Controllers\Officer\Perizinan;

use App\Http\Controllers\Controller;
use App\Models\PerizinanModel;

class PerizinanOfficerController extends Controller
{
  public function perizinan()
    {
      $perizinan = PerizinanModel::where('kategori', 'Bidang Perizinan')->count();

      $sktm = PerizinanModel::where('nama_ajuan', 'Surat Keterangan Usaha')->count();
      $verifikasi_suketusaha = PerizinanModel::where('verifikasi', 'DITERIMA')->where('nama_ajuan', 'Surat Keterangan Usaha')->count();
      $waiting_suketusaha = PerizinanModel::where('verifikasi', 'DIPROSES')->where('nama_ajuan', 'Surat Keterangan Usaha')->count();

      return view('officer.pages.layanan.perizinan.perizinan', [
        'perizinan' => $perizinan,
        'sktm' => $sktm,
        'verifikasi_suketusaha' => $verifikasi_suketusaha,
        'waiting_suketusaha' => $waiting_suketusaha,
      ]);
    }
}
