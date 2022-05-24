<?php

namespace App\Http\Controllers\User\NonPerizinan;

use App\Models\User;
use App\Models\Berkas;
use App\Models\SKTMModel;
use App\Http\Requests\StoreSKTMRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SKTMController extends Controller
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

      return view('superuser.pages.layanan.non_perizinan.sktm', [
        'user' =>$user,
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
    public function store(StoreSKTMRequest $request)
    {
      $sktm = new SKTMModel();

      $sktm->user_id = $request->user_id;
      $sktm->berkas_id = $request->berkas_id;;
      $sktm->nama_pemohon = $request->nama_pemohon;
      $sktm->email_pemohon = $request->email_pemohon;
      $sktm->foto_rumah_depan = $request->image;
      $sktm->foto_rumah_samping = $request->image;
      $sktm->tanda_pbb = $request->image;
      $sktm->pengantar = $request->image;
      $sktm['foto_rumah_depan'] = $request->file('foto_rumah_depan')->store('', 'public');
      $sktm['foto_rumah_samping'] = $request->file('foto_rumah_samping')->store('', 'public');
      $sktm['tanda_pbb'] = $request->file('tanda_pbb')->store('', 'public');
      $sktm['pengantar'] = $request->file('pengantar')->store('', 'public');

      $sktm->save();

      return redirect()->route('sktm')->with([
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
