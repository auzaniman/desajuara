<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\FotoProfileRequest;
use App\Models\Berkas;
use App\Models\FotoProfileModel;
use App\Models\KategoriModel;
use App\Models\NamaAjuanModel;
use App\Models\SKTMModel;
use App\Models\SuketUsahaModel;
use App\Models\SupengDesaModel;
use App\Models\SuratDomisili;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfileAkunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $user = User::where('id', '=', Auth::user()->id)->first();
      $foto = FotoProfileModel::where('user_id', '=', Auth::user()->id)->first();
      return view('superuser.pages.profileakun.profileakun', [
        'user' => $user,
        'foto' => $foto,
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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

    public function kumpulan_ajuan()
    {
      $user = User::where('id', '=', Auth::user()->id)->first();
      $foto = FotoProfileModel::where('user_id', '=', Auth::user()->id)->first();
      $surdom = SuratDomisili::where('user_id', '=', Auth::user()->id)->first();
      // $suket = SuketUsahaModel::where('user_id', '=', Auth::user()->id)->first();
      // $sktm = SKTMModel::where('user_id', '=', Auth::user()->id)->first();
      // $supeng = SupengDesaModel::where('user_id', '=', Auth::user()->id)->first();

      return view('superuser.pages.profileakun.ajuan', [
        'user' => $user,
        'foto' =>$foto,
        'surdom' =>$surdom,
        // 'suket' =>$suket,
        // 'sktm' =>$sktm,
        // 'supeng' =>$supeng,
      ]);
    }
}
