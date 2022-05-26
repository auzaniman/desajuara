<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Berkas;
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
      return view('superuser.pages.profileakun.profileakun', [
        'user' => $user
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
      $berkas = Berkas::where('user_id', '=', Auth::user()->id)->first();

      return view('superuser.pages.profileakun.berkas2', [
        'user' => $user,
        'berkas' =>$berkas
      ]);
    }
}
