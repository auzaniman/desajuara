<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ChartBar;
use App\Models\User;

class ProfileDesaController extends Controller
{
  public function index()
  {
    $charts = ChartBar::all();

    $total_warga = User::select('id')->count();
    $total_kk = User::distinct()->count('kk');
    $umbulharjo = User::where('kecamatan_ktp', '=', 1)->count();
    $warga_luar = User::where('kelamin', 'Laki-Laki')->count();

    $warga_laki = User::where('kelamin', 'Laki-Laki')->count();
    $warga_perempuan = User::where('kelamin', 'Perempuan')->count();

    $warga_sd = User::where('pendidikan', 'SD')->count();
    $warga_smp = User::where('pendidikan', 'SMP')->count();
    $warga_sma = User::where('pendidikan', 'SMA')->count();
    $warga_d1 = User::where('pendidikan', 'D1')->count();
    $warga_d2 = User::where('pendidikan', 'D2')->count();
    $warga_d3 = User::where('pendidikan', 'D3')->count();
    $warga_d4 = User::where('pendidikan', 'D4')->count();
    $warga_s1 = User::where('pendidikan', 'S1')->count();
    $warga_s2 = User::where('pendidikan', 'S2')->count();
    $warga_s3 = User::where('pendidikan', 'S3')->count();

    $sd[] = $warga_sd;
    $smp[] = $warga_smp;
    $sma[] = $warga_sma;
    $d1[] = $warga_d1;
    $d2[] = $warga_d2;
    $d3[] = $warga_d3;
    $d4[] = $warga_d4;
    $s1[] = $warga_s1;
    $s2[] = $warga_s2;
    $s3[] = $warga_s3;

    $rt = [];
    $jmlwarga = [];
    $jmlkepala = [];

    foreach($charts as $row) {
      $rt[] = $row->rt;
      $jmlwarga[] = $row->jumlahWarga;
      $jmlkepala[] = $row->jumlahKepalaKeluarga;
    }

    return
    view('superuser.pages.profiledesa.profiledesa', compact(
        'rt',
        'total_warga',
        'total_kk',
        'umbulharjo',
        'warga_laki',
        'warga_perempuan',
        'sd',
        'smp',
        'sma',
        'd1',
        'd2',
        'd3',
        'd4',
        's1',
        's2',
        's3',
        'jmlwarga',
        'jmlkepala',
      ));
  }
}
