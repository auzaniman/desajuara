<?php

namespace App\Http\Controllers\User\Administrasi;

use App\Models\User;
use App\Models\Berkas;
use App\Http\Requests\StoreAdministrasiRequest;
use App\Http\Controllers\Controller;
use App\Models\AdministrasiModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuratDomisiliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // $users = User::all();
      $users = User::where('id', '=', Auth::user()->id)->first();
      $berkas = Berkas::where('user_id', '=', Auth::user()->id)->first();

      return
      view('superuser.pages.layanan.administrasi.suratdomisili',
        [
          'users' => $users,
          'berkas' => $berkas,
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
    public function store(StoreAdministrasiRequest $request)
    {
      $suratdomisili = new AdministrasiModel();

      $suratdomisili->user_id = $request->user_id;
      $suratdomisili->berkas_id = $request->berkas_id;
      $suratdomisili->nama_ajuan = $request->nama_ajuan;
      $suratdomisili->nama_pemohon = $request->nama_pemohon;
      $suratdomisili->email_pemohon = $request->email_pemohon;
      $suratdomisili->alamat_pemohon = $request->alamat_pemohon;
      $suratdomisili->hp_pemohon = $request->hp_pemohon;
      $suratdomisili->nik_pemohon = $request->nik_pemohon;
      $suratdomisili->kk_pemohon = $request->kk_pemohon;
      $suratdomisili->foto_ktp_pemohon = $request->foto_ktp_pemohon;
      $suratdomisili->foto_kk_pemohon = $request->foto_kk_pemohon;
      $suratdomisili['pengantar_rtrw'] = $request->file('pengantar_rtrw')->store('', 'public');

      $suratdomisili->save();

      return redirect()->route('surdom')->with([
        'message' => 'Permohonan berhasil ditambahkan',
        'status' => 'Sukses! Permohonan berhasil diajukan'
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
}
