<?php

namespace App\Http\Controllers\Officer;

use App\Http\Controllers\Controller;
use App\Models\AdministrasiModel;
use App\Models\NonPerizinanModel;
use App\Models\PerizinanModel;
use Illuminate\Http\Request;

class LayananOfficerController extends Controller
{
    public function index()
    {
      $administrasi = AdministrasiModel::where('kategori', 'Administrasi Kependudukan')->count();
      $perizinan = PerizinanModel::where('kategori', 'Bidang Perizinan')->count();
      $nonperizinan = NonPerizinanModel::where('kategori', 'Bidang Non Perizinan')->count();
      $pertanahan = AdministrasiModel::where('kategori', 'Administrasi Kependudukan')->count();

      return view('officer.pages.layanan.layanan', [
        'administrasi' => $administrasi,
        'perizinan' => $perizinan,
        'nonperizinan' => $nonperizinan,
        'pertanahan' => $pertanahan,
      ]);
    }

    public function perizinan()
    {
      $perizinan = PerizinanModel::where('kategori', 'Administrasi Kependudukan')->count();
      $suketusaha = PerizinanModel::where('nama_ajuan', 'Surat Keterangan Usaha')->count();
      $verifikasi = PerizinanModel::where('verifikasi_id', '1')->count();
      $waiting = PerizinanModel::where('verifikasi_id', '3')->count();

      return view('officer.pages.layanan.perizinan.perizinan', [
        'perizinan' => $perizinan,
        'suketusaha' => $suketusaha,
        'verifikasi' => $verifikasi,
        'waiting' => $waiting,
      ]);
    }

    public function pertanahan()
    {
      return view('officer.pages.layanan.pertanahan.pertanahan');
    }
}
