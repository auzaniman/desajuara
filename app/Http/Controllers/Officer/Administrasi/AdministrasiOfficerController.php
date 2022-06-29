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
      $verifikasi = AdministrasiModel::where('verifikasi_id', '1')->count();
      $waiting = AdministrasiModel::where('verifikasi_id', '3')->count();

      return view('officer.pages.layanan.administrasi.administrasi', [
        'administrasi' => $administrasi,
        'surdom' => $surdom,
        'verifikasi' => $verifikasi,
        'waiting' => $waiting,
      ]);
    }
}
