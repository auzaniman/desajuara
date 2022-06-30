<?php

namespace App\Http\Controllers\Officer;

use App\Http\Controllers\Controller;
use App\Models\AdministrasiModel;
use App\Models\NonPerizinanModel;
use App\Models\PerizinanModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainDashboardController extends Controller
{
    public function index()
    {
      $administrasi = AdministrasiModel::where('kategori', 'Administrasi Kependudukan')->count();
      $surdom = AdministrasiModel::where('nama_ajuan', 'Surat Domisili')->count();
      $verifikasi_surdom = AdministrasiModel::where('verifikasi_id', '1')->where('nama_ajuan', 'Surat Domisili')->count();
      $waiting_surdom = AdministrasiModel::where('verifikasi_id', '3')->where('nama_ajuan', 'Surat Domisili')->count();

      $perizinan = PerizinanModel::where('kategori', 'Bidang Perizinan')->count();
      $suketusaha = PerizinanModel::where('nama_ajuan', 'Surat Keterangan Usaha')->count();
      $verifikasi_suketusaha = PerizinanModel::where('verifikasi_id', '1')->where('nama_ajuan', 'Surat Keterangan Usaha')->count();
      $waiting_suketusaha = PerizinanModel::where('verifikasi_id', '3')->where('nama_ajuan', 'Surat Keterangan Usaha')->count();

      $nonperizinan = NonPerizinanModel::where('kategori', 'Bidang Non Perizinan')->count();
      $sktm = NonPerizinanModel::where('nama_ajuan', 'Surat Keterangan Tidak Mampu')->count();
      $verifikasi_sktm = NonPerizinanModel::where('verifikasi_id', '1')->where('nama_ajuan', 'Surat Keterangan Tidak Mampu')->count();
      $waiting_sktm = NonPerizinanModel::where('verifikasi_id', '3')->where('nama_ajuan', 'Surat Keterangan Tidak Mampu')->count();

      $supengdesa = NonPerizinanModel::where('nama_ajuan', 'Surat Pengantar Desa')->count();
      $verifikasi_supengdesa = NonPerizinanModel::where('verifikasi_id', '1')->where('nama_ajuan', 'Surat Pengantar Desa')->count();
      $waiting_supengdesa = NonPerizinanModel::where('verifikasi_id', '3')->where('nama_ajuan', 'Surat Pengantar Desa')->count();

      return view('officer.pages.dashboard.maindashboard', [
        'administrasi' => $administrasi,
        'perizinan' => $perizinan,
        'nonperizinan' => $nonperizinan,
        'surdom' => $surdom,
        'verifikasi_surdom' => $verifikasi_surdom,
        'waiting_surdom' => $waiting_surdom,
        'suketusaha' => $suketusaha,
        'verifikasi_suketusaha' => $verifikasi_suketusaha,
        'waiting_suketusaha' => $waiting_suketusaha,
        'sktm' => $sktm,
        'verifikasi_sktm' => $verifikasi_sktm,
        'waiting_sktm' => $waiting_sktm,
        'supengdesa' => $supengdesa,
        'verifikasi_supengdesa' => $verifikasi_supengdesa,
        'waiting_supengdesa' => $waiting_supengdesa,
      ]);
    }
}
