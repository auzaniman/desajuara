<?php

namespace App\Http\Controllers\User\NonPerizinan;

use App\Models\User;
use App\Models\Berkas;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNonPerizinanRequest;
use App\Models\NonPerizinanModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SupengDesaController extends Controller
{
    public function index()
    {
      $user = User::where('id', '=', Auth::user()->id)->first();
      $berkas = Berkas::where('user_id', '=', Auth::user()->id)->first();

      return view('superuser.pages.layanan.non_perizinan.supeng_desa', [
        'user' => $user,
        'berkas' => $berkas
      ]);
    }

    public function create()
    {
        //
    }

    public function store(StoreNonPerizinanRequest $request)
    {
      $supeng_desa = new NonPerizinanModel();

      $supeng_desa->user_id = $request->user_id;
      $supeng_desa->berkas_id = $request->berkas_id;
      $supeng_desa->nama_ajuan = $request->nama_ajuan;
      $supeng_desa->nama_pemohon = $request->nama_pemohon;
      $supeng_desa->email_pemohon = $request->email_pemohon;
      $supeng_desa->alamat_pemohon = $request->alamat_pemohon;
      $supeng_desa->hp_pemohon = $request->hp_pemohon;
      $supeng_desa->nik_pemohon = $request->nik_pemohon;
      $supeng_desa->kk_pemohon = $request->kk_pemohon;
      $supeng_desa->foto_ktp_pemohon = $request->foto_ktp_pemohon;
      $supeng_desa->foto_kk_pemohon = $request->foto_kk_pemohon;
      $supeng_desa->keperluan = $request->keperluan;
      $supeng_desa->tanggal_keperluan = $request->tanggal_keperluan;
      $supeng_desa->tempat_keperluan = $request->tempat_keperluan;

      $supeng_desa->save();

      return redirect()->route('supengdesa')->with([
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
