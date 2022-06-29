<?php

namespace App\Http\Controllers\User\ProfileAkun;

use App\Http\Controllers\Controller;
use App\Http\Requests\FotoProfileRequest;
use App\Models\Berkas;
use App\Models\FotoProfileModel;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfileAkunController extends Controller
{
    public function index()
    {
      $user = User::where('id', '=', Auth::user()->id)->first();
      $foto = FotoProfileModel::where('user_id', '=', Auth::user()->id)->first();
      return view('superuser.pages.profileakun.profileakun', [
        'user' => $user,
        'foto' => $foto,
      ]);
    }

    public function create()
    {
        //
    }

    public function store(FotoProfileRequest $request)
    {
      $foto = new FotoProfileModel();
      $foto->user_id = $request->user_id;
      $foto['foto_profile'] = $request->file('foto_profile')->store('', 'public');

      $foto->save();

      return redirect()->back()->with([
        'message' => 'Permohonan berhasil ditambahkan',
        'status' => 'Sukses! Foto Profile berhasil ditambahkan'
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
      $user = User::where('id', '=', Auth::user()->id)->first();
      $user->name = $request->name;
      $user->email = $request->email;
      $user->username = $request->username;
      $user->tempat_lahir = $request->tempat_lahir;
      $user->tanggal_lahir = $request->tanggal_lahir;
      $user->nik = $request->nik;
      $user->kk = $request->kk;
      $user->npwp = $request->npwp;
      $user->kelamin = $request->kelamin;
      $user->pekerjaan = $request->pekerjaan;
      $user->agama = $request->agama;
      $user->perkawinan = $request->perkawinan;
      $user->kewarganegaraan = $request->kewarganegaraan;
      $user->desa_ktp = $request-> desa_ktp;
      $user->rt_ktp = $request-> rt_ktp;
      $user->rw_ktp = $request-> rw_ktp;
      $user->provinsi_ktp = $request-> provinsi_ktp;
      $user->kota_ktp = $request-> kota_ktp;
      $user->kecamatan_ktp = $request-> kecamatan_ktp;
      $user->desa_domisili = $request-> desa_domisili;
      $user->rt_domisili = $request-> rt_domisili;
      $user->rw_domisili = $request-> rw_domisili;
      $user->provinsi_domisili = $request-> provinsi_domisili;
      $user->kota_domisili = $request-> kota_domisili;
      $user->kecamatan_domisili = $request-> kecamatan_domisili;
      $user->no_telpon = $request->no_telpon;
      $user->no_wa = $request->no_wa;
      $user->pendidikan = $request->pendidikan;

      $user->save();

      return redirect()->back()
      ->with([
          'message' => 'berhasil diubah',
          'status' => 'success'
      ]);
    }

    public function destroy($id)
    {
      $foto = FotoProfileModel::where('id', $id)->first();
      $foto->delete();

      return redirect()->back()
      ->with([
          'message' => 'berhasil dihapus',
          'status' => 'Sukses! Foto Profile Berhasil dihapus'
      ]);
    }

    public function kumpulan_berkas()
    {
      $user = User::where('id', '=', Auth::user()->id)->first();
      $foto = FotoProfileModel::where('user_id', '=', Auth::user()->id)->first();
      $berkas = Berkas::where('user_id', '=', Auth::user()->id)->first();

      return view('superuser.pages.profileakun.berkas2', [
        'user' => $user,
        'berkas' =>$berkas,
        'foto' =>$foto,
      ]);
    }
}
