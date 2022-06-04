<?php

namespace App\Http\Controllers\Officer\Administrasi;

use App\Models\SuratDomisili;
use App\Models\User;
use App\Models\Berkas;
use App\Http\Controllers\Controller;
use App\Models\VerifikasiModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuratDomisiliOfficerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $users = User::all();
      $berkas = Berkas::all();
      $surdom = SuratDomisili::all();
      $verifikasi = VerifikasiModel::all();

      return
      view('officer.pages.layanan.administrasi.surdom.suratdomisili',
        [
          'users' => $users,
          'berkas' => $berkas,
          'surdom' => $surdom,
          'verifikasi' => $verifikasi,
        ]
      );
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

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $surdom = SuratDomisili::findOrFail($id);
        $berkas = Berkas::findOrFail($id);
        $user = User::findOrFail($id);
        $verifikasi = VerifikasiModel::all();

        return view('officer.pages.layanan.administrasi.surdom.verify', [
          'user' => $user,
          'surdom' => $surdom,
          'berkas' => $berkas,
          'verifikasi' => $verifikasi,
        ]);
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
      $surdom = SuratDomisili::findOrFail($id);

      $surdom->verifikasi_id = $request->verifikasi_id;

      $surdom->save();

      return redirect()->back()->with([
        'message' => 'Permohonan berhasil diverifikasi',
        'status' => 'success'
      ]);
    }

    public function update_alt(Request $request, $id)
    {
      $surdom = SuratDomisili::findOrFail($id);
      $surdom->file_surdom = $request->file_surdom;

      $surdom->save();

      return redirect()->back()->with([
        'message' => 'File Permohonan berhasil dikirim',
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
}
