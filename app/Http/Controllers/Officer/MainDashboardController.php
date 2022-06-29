<?php

namespace App\Http\Controllers\Officer;

use App\Http\Controllers\Controller;
use App\Models\AdministrasiModel;
use Illuminate\Http\Request;
use App\Models\Officer;
use Illuminate\Support\Facades\Auth;

class MainDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $administrasi = AdministrasiModel::where('kategori', 'Administrasi Kependudukan')->count();
      $surdom = AdministrasiModel::where('nama_ajuan', 'Surat Domisili')->count();
      $verifikasi = AdministrasiModel::where('verifikasi_id', '1')->count();

      return view('officer.pages.dashboard.maindashboard', [
        'administrasi' => $administrasi,
        'surdom' => $surdom,
        'verifikasi' => $verifikasi,
      ]);
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
        //
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
        //
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
        //

      $officer = Officer::where('id', '=', Auth::user()->id)->first();
      $officer->name = $request->name;

      $officer->save();

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
        //
    }
}
