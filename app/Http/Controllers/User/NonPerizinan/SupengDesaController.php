<?php

namespace App\Http\Controllers\User\NonPerizinan;

use App\Models\User;
use App\Models\Berkas;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSupengDesaRequest;
use App\Models\SupengDesaModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SupengDesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $user = User::where('id', '=', Auth::user()->id)->first();
      $berkas = Berkas::where('user_id', '=', Auth::user()->id)->first();

      return view('superuser.pages.layanan.non_perizinan.supeng_desa', [
        'user' => $user,
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
    public function store(StoreSupengDesaRequest $request)
    {
      $supeng_desa = new SupengDesaModel();

      $supeng_desa->user_id = $request->user_id;
      $supeng_desa->berkas_id = $request->berkas_id;;
      $supeng_desa->nama_pemohon = $request->nama_pemohon;
      $supeng_desa->email_pemohon = $request->email_pemohon;
      $supeng_desa->keperluan = $request->keperluan;
      $supeng_desa->tanggal_keperluan = $request->tanggal_keperluan;
      $supeng_desa->tempat_keperluan = $request->tempat_keperluan;

      $supeng_desa->save();

      return redirect()->route('supengdesa')->with([
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
