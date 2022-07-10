<?php

namespace App\Http\Controllers\Officer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ChartBar;
use App\Models\SettingSejKampModel;
use App\Models\User;

class ChartBarOfficerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $charts = ChartBar::all();
      // $profiledesa = SettingSejKampModel::where('id')->first();

      $total_warga = User::select('id')->count();
      $total_kk = User::distinct()->count('kk');

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
      view('officer.pages.profiledesa.profiledesa',
        [
          'rt' => $rt,
          'total_warga' => $total_warga,
          'total_kk' => $total_kk,
          'warga_laki' => $warga_laki,
          'warga_perempuan' => $warga_perempuan,
          'sd' => $sd,
          'smp' => $smp,
          'sma' => $sma,
          'd1' => $d1,
          'd2' => $d2,
          'd3' => $d3,
          'd4' => $d4,
          's1' => $s1,
          's2' => $s2,
          's3' => $s3,
          'jmlwarga' => $jmlwarga,
          'jmlkepala' => $jmlkepala,
          // 'profiledesa' => $profiledesa

        ]
      );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $chartbar = new ChartBar([
        'jumlahWarga' => $request->get('jumlahWarga'),
        'jumlahKepalaKeluarga' => $request->get('jumlahKepalaKeluarga'),
        'rt' => $request->get('rt'),
      ]);
      $chartbar->save();

      return redirect()->back()
      ->with([
          'message' => 'berhasil ditambahkan',
          'status' => 'Sukses! Data chart berhasil ditambahkan'
      ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      ChartBar::where('id', $id)
        ->update([
          'jumlahWarga' => $request->jumlahWarga,
          'jumlahKepalaKeluarga' => $request->jumlahKepalaKeluarga,
          'rt' => $request->rt,
        ]);

      return redirect()->back()
      ->with([
          'message' => 'berhasil diubah',
          'status' => 'Data chart berhasil diubah'
      ]);
      // return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $chart = ChartBar::where('id', $id)->first();
      $chart->delete();

      return redirect()->back()
      ->with([
          'message' => 'berhasil dihapus',
          'status' => 'Data chart berhasil dihapus'
      ]);

    }

    public function index_edit()
      {
        $charts = ChartBar::all();
        return view('officer.pages.profiledesa.chart.edit', [
          'charts' => $charts
        ]);
      }
}
