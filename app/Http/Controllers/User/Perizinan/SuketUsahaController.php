<?php

namespace App\Http\Controllers\User\Perizinan;

use App\Models\User;
use App\Models\Berkas;
use App\Http\Requests\StorePerizinanRequest;
use App\Models\PerizinanModel;
use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use App\Models\Village;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuketUsahaController extends Controller
{
    public function index()
    {
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

      return view('superuser.pages.layanan.perizinan.suket_usaha', compact(
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

    public function store(StorePerizinanRequest $request)
    {
      $suket_usaha = new PerizinanModel();

      $suket_usaha->user_id = $request->user_id;
      $suket_usaha->berkas_id = $request->berkas_id;
      $suket_usaha->nama_ajuan = $request->nama_ajuan;
      $suket_usaha->nama_pemohon = $request->nama_pemohon;
      $suket_usaha->email_pemohon = $request->email_pemohon;
      $suket_usaha->alamat_pemohon = $request->alamat_pemohon;
      $suket_usaha->hp_pemohon = $request->hp_pemohon;
      $suket_usaha->nik_pemohon = $request->nik_pemohon;
      $suket_usaha->kk_pemohon = $request->kk_pemohon;
      $suket_usaha->foto_ktp_pemohon = $request->foto_ktp_pemohon;
      $suket_usaha->foto_kk_pemohon = $request->foto_kk_pemohon;
      $suket_usaha->bidang_usaha = $request->bidang_usaha;
      $suket_usaha->nama_usaha = $request->nama_usaha;
      $suket_usaha->alamat_usaha = $request->alamat_usaha;
      $suket_usaha->tahun_memulai = $request->tahun_memulai;
      $suket_usaha->jumlah_karyawan = $request->jumlah_karyawan;
      $suket_usaha->omzet = $request->omzet;
      $suket_usaha->aset = $request->aset;
      $suket_usaha['pengantar_rtrw'] = $request->file('pengantar_rtrw')->store('', 'public');

      $suket_usaha->save();

      return redirect()->route('suketusaha')->with([
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
