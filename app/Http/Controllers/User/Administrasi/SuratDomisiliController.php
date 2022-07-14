<?php

namespace App\Http\Controllers\User\Administrasi;

use App\Models\User;
use App\Models\Berkas;
use App\Http\Requests\StoreAdministrasiRequest;
use App\Models\AdministrasiModel;
use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use App\Models\Village;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuratDomisiliController extends Controller
{
    public function index()
    {
      // $users = User::all();
      $users = User::where('id', '=', Auth::user()->id)->first();
      $berkas = Berkas::where('user_id', '=', Auth::user()->id)->first();

      $provinsi = Province::select('name')
        ->where('id', '=', Auth::user()->provinsi_ktp)
        ->first();

      $kota = Regency::select('name')
        ->where('id', '=', Auth::user()->kota_ktp)
        ->first();

      $kecamatan = District::select('name')
        ->where('id', '=', Auth::user()->kecamatan_ktp)
        ->first();

      $desa = Village::select('name')
        ->where('id', '=', Auth::user()->desa_ktp)
        ->first();

      return
      view('superuser.pages.layanan.administrasi.suratdomisili', compact(
        'users',
        'berkas',
        'provinsi',
        'kota',
        'kecamatan',
        'desa',
      ));
    }

    public function create()
    {
        //
    }

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

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
