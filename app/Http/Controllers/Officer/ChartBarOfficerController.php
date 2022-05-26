<?php

namespace App\Http\Controllers\Officer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ChartBar;
use App\Models\SettingSejKampModel;

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
          'status' => 'success'
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
          'status' => 'success'
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
          'status' => 'success'
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
