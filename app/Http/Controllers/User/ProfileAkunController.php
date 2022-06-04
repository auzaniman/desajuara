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
      $user->ttl = $request->ttl;
      $user->nik = $request->nik;
      $user->kk = $request->kk;
      $user->npwp = $request->npwp;
      $user->kelamin = $request->kelamin;
      $user->pekerjaan = $request->pekerjaan;
      $user->agama = $request->agama;
      $user->perkawinan = $request->perkawinan;
      $user->kewarganegaraan = $request->kewarganegaraan;
      $user->alamat_ktp = $request->alamat_ktp;
      $user->alamat_domisili = $request->alamat_domisili;
      $user->provinsi = $request->provinsi;
      $user->kota = $request->kota;
      $user->kecamatan = $request->kecamatan;
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
        //
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
