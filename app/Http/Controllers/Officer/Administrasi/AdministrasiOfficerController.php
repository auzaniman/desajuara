<?php

namespace App\Http\Controllers\Officer\Administrasi;

use App\Models\AdministrasiModel;
use App\Models\User;
use App\Models\Berkas;
use App\Models\VerifikasiModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdministrasiOfficerController extends Controller
{
  public function administrasi()
    {
      $administrasi = AdministrasiModel::where('kategori', 'Administrasi Kependudukan')->count();
      $surdom = AdministrasiModel::where('nama_ajuan', 'Surat Domisili')->count();
      $verifikasi_surdom = AdministrasiModel::where('verifikasi', 'DITERIMA')->where('nama_ajuan', 'Surat Domisili')->count();
      $waiting_surdom = AdministrasiModel::where('verifikasi', 'DIPROSES')->where('nama_ajuan', 'Surat Domisili')->count();

      return view('officer.pages.layanan.administrasi.administrasi', [
        'administrasi' => $administrasi,
        'surdom' => $surdom,
        'verifikasi_surdom' => $verifikasi_surdom,
        'waiting_surdom' => $waiting_surdom,
      ]);
    }
}
