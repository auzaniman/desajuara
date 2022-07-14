<?php

namespace App\Http\Controllers\Officer;

use App\Http\Controllers\Controller;
use App\Models\AdministrasiModel;
use App\Models\NonPerizinanModel;
use App\Models\PerizinanModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainDashboardController extends Controller
{
    public function index()
    {
      // Menghitung Layanan Total Berdasarkan Kategori dan Verifikasi
      $administrasi = AdministrasiModel::where('kategori', 'Administrasi Kependudukan')->count();

      $verifikasi_administrasi = AdministrasiModel::where('verifikasi', 'DITERIMA')
        ->where('kategori', 'Administrasi Kependudukan')
        ->count();

      $waiting_administrasi = AdministrasiModel::where('verifikasi', 'DIPROSES')
        ->where('kategori', 'Administrasi Kependudukan')
        ->count();

      $perizinan = PerizinanModel::where('kategori', 'Bidang Perizinan')->count();

      $verifikasi_perizinan = PerizinanModel::where('verifikasi', 'DITERIMA')
        ->where('kategori', 'Bidang Perizinan')
        ->count();

      $waiting_perizinan = PerizinanModel::where('verifikasi', 'DIPROSES')
        ->where('kategori', 'Bidang Perizinan')
        ->count();

      $nonperizinan = NonPerizinanModel::where('kategori', 'Bidang Non Perizinan')->count();

      $verifikasi_nonperizinan = NonPerizinanModel::where('verifikasi', 'DITERIMA')
        ->where('kategori', 'Bidang Non Perizinan')
        ->count();
      $waiting_nonperizinan = NonPerizinanModel::where('verifikasi', 'DIPROSES')
        ->where('kategori', 'Bidang Non Perizinan')
        ->count();

      // Menghitung Layanan Harian
      $administrasitoday = AdministrasiModel::whereDate('created_at', Carbon::today())->count();
      $perizinantoday = PerizinanModel::whereDate('created_at', Carbon::today())->count();
      $nonperizinantoday = NonPerizinanModel::whereDate('created_at', Carbon::today())->count();

      // Menghitung Total Layanan Desa
      $administrasi_total[] = $administrasi;
      $perizinan_total[] = $perizinan;
      $nonperizinan_total[] = $nonperizinan;

      return view('officer.pages.dashboard.maindashboard', compact(
        'administrasi',
        'perizinan',
        'nonperizinan',
        'administrasi_total',
        'perizinan_total',
        'nonperizinan_total',
        'administrasitoday',
        'perizinantoday',
        'nonperizinantoday',
        'verifikasi_administrasi',
        'waiting_administrasi',
        'verifikasi_perizinan',
        'waiting_perizinan',
        'verifikasi_nonperizinan',
        'waiting_nonperizinan',
      ));
    }
}
