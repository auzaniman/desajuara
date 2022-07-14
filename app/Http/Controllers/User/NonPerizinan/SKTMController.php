<?php

namespace App\Http\Controllers\User\NonPerizinan;

use App\Models\User;
use App\Models\Berkas;
use App\Http\Requests\StoreNonPerizinanRequest;
use App\Models\NonPerizinanModel;
use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use App\Models\Village;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SKTMController extends Controller
{
    public function index()
    {
      $user = User::where('id', '=', Auth::user()->id)->first();
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

      return view('superuser.pages.layanan.non_perizinan.sktm', compact(
        'user' ,
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

    public function store(StoreNonPerizinanRequest $request)
    {
      $sktm = new NonPerizinanModel();

      $sktm->user_id = $request->user_id;
      $sktm->berkas_id = $request->berkas_id;
      $sktm->nama_ajuan = $request->nama_ajuan;
      $sktm->nama_pemohon = $request->nama_pemohon;
      $sktm->email_pemohon = $request->email_pemohon;
      $sktm->alamat_pemohon = $request->alamat_pemohon;
      $sktm->hp_pemohon = $request->hp_pemohon;
      $sktm->nik_pemohon = $request->nik_pemohon;
      $sktm->kk_pemohon = $request->kk_pemohon;
      $sktm->foto_ktp_pemohon = $request->foto_ktp_pemohon;
      $sktm->foto_kk_pemohon = $request->foto_kk_pemohon;
      $sktm['foto_rumah_depan'] = $request->file('foto_rumah_depan')->store('', 'public');
      $sktm['foto_rumah_samping'] = $request->file('foto_rumah_samping')->store('', 'public');
      $sktm['tanda_pbb'] = $request->file('tanda_pbb')->store('', 'public');
      $sktm['pengantar_rtrw'] = $request->file('pengantar_rtrw')->store('', 'public');

      $sktm->save();

      return redirect()->route('sktm')->with([
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
