<?php

namespace App\Http\Controllers\Officer;

use App\Http\Controllers\Controller;
use App\Models\SuratDomisili;
use Illuminate\Http\Request;

class LayananOfficerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $administrasi = SuratDomisili::where('kategori', 'Administrasi Kependudukan')->count();

      return view('officer.pages.layanan.layanan', [
        'administrasi' => $administrasi,
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

    public function administrasi()
    {
      $administrasi = SuratDomisili::where('kategori', 'Administrasi Kependudukan')->count();
      $surdom = SuratDomisili::where('nama_ajuan', 'Surat Domisili')->count();
      $verifikasi = SuratDomisili::where('verifikasi_id', '1')->count();

      return view('officer.pages.layanan.administrasi.administrasi', [
        'administrasi' => $administrasi,
        'surdom' => $surdom,
        'verifikasi' => $verifikasi,
      ]);
    }
    public function perizinan()
    {
      return view('officer.pages.layanan.perizinan.perizinan');
    }
    public function non_perizinan()
    {
      return view('officer.pages.layanan.non_perizinan.non_perizinan');
    }
    public function pertanahan()
    {
      return view('officer.pages.layanan.pertanahan.pertanahan');
    }
}
