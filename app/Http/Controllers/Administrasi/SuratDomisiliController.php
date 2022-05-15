<?php

namespace App\Http\Controllers\Administrasi;

use App\Models\SuratDomisili;
use App\Models\User;
use App\Http\Requests\StoreSuratDomisiliRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SuratDomisiliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $users = User::all();

      return view('superuser.pages.layanan.administrasi.suratdomisili', [
        'users' => $users
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
    public function store(StoreSuratDomisiliRequest $request)
    {
      $suratdomisili = new SuratDomisili();

      $suratdomisili->user_id = $request->user_id;
      $suratdomisili->nama_pemohon = $request->nama_pemohon;
      $suratdomisili->email_pemohon = $request->email_pemohon;
      $suratdomisili->bukti_ktp = $request->image;
      $suratdomisili->bukti_kk = $request->image;
      $suratdomisili->bukti_pengantar = $request->image;
      $suratdomisili['bukti_ktp'] = $request->file('bukti_ktp')->store('', 'public');
      $suratdomisili['bukti_kk'] = $request->file('bukti_kk')->store('', 'public');
      $suratdomisili['bukti_pengantar'] = $request->file('bukti_pengantar')->store('', 'public');

      $suratdomisili->save();

      return redirect()->route('surdom')->with([
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
