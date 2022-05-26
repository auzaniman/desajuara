<?php

namespace App\Http\Controllers\User\Perizinan;

use App\Models\User;
use App\Models\Berkas;
use App\Models\SuketUsahaModel;
use App\Http\Requests\StoreSuketUsahaRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuketUsahaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $users = User::where('id', '=', Auth::user()->id)->first();
      $berkas = Berkas::where('user_id', '=', Auth::user()->id)->first();

      return view('superuser.pages.layanan.perizinan.suket_usaha', [
        'users' => $users,
        'berkas' => $berkas
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
    public function store(StoreSuketUsahaRequest $request)
    {
      $suket_usaha = new SuketUsahaModel();

      $suket_usaha->user_id = $request->user_id;
      $suket_usaha->berkas_id = $request->berkas_id;;
      $suket_usaha->nama_pemohon = $request->nama_pemohon;
      $suket_usaha->email_pemohon = $request->email_pemohon;
      $suket_usaha->bidang_usaha = $request->bidang_usaha;
      $suket_usaha->nama_usaha = $request->nama_usaha;
      $suket_usaha->alamat_usaha = $request->alamat_usaha;
      $suket_usaha->tahun_memulai = $request->tahun_memulai;
      $suket_usaha->jumlah_karyawan = $request->jumlah_karyawan;
      $suket_usaha->omzet = $request->omzet;
      $suket_usaha->aset = $request->aset;
      $suket_usaha->pengantar = $request->image;
      $suket_usaha['pengantar'] = $request->file('pengantar')->store('', 'public');

      $suket_usaha->save();

      return redirect()->route('suketusaha')->with([
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
