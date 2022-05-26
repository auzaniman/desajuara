<?php

namespace App\Http\Controllers\Officer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSettingSejKampRequest;
use App\Models\SettingSejKampModel;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $profiledesa = SettingSejKampModel::where('id')->first();
      return view('officer.pages.setting', [
        'profiledesa' => $profiledesa
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
    public function store(StoreSettingSejKampRequest $request)
    {
      $profiledesa = new SettingSejKampModel();

      $profiledesa->sejarah_kampung = $request->sejarah_kampung;
      $profiledesa->video_desa = $request->video_desa;
      $profiledesa['foto_kades'] = $request->file('foto_kades')->store('', 'public');

      $profiledesa->save();

      return redirect()->back()->with([
        'message' => 'Profile Desa berhasil Ditambahkan',
        'status' => 'Profile Desa berhasil Ditambahkan'
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
