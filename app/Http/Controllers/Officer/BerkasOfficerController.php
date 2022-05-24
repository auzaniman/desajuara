<?php

namespace App\Http\Controllers\Officer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Berkas;

class BerkasOfficerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $user = User::all();
      $berkas = Berkas::all();
      return view('officer.pages.berkas', [
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
    public function store(Request $request)
    {
      $berkas = new berkas();

      $berkas->user_id = Auth::user()->id;
      $berkas['foto_ktp'] = $request->file('foto_ktp')->store('', 'public');
      $berkas['foto_kk'] = $request->file('foto_kk')->store('', 'public');
      $berkas['foto_diri'] = $request->file('foto_diri')->store('', 'public');
      $berkas['akta_kelahiran'] = $request->file('akta_kelahiran')->store('', 'public');
      $berkas['paspoto'] = $request->file('paspoto')->store('', 'public');

      $berkas->save();

      return redirect()->route('berkas')->with([
        'message' => 'Berkas berhasil ditambahkan',
        'status' => 'Berkas berhasil ditambahkan'
      ]);
    }

    public function berkas_alt(Request $request)
    {
      $berkas = new berkas();

      $berkas->user_id = Auth::user()->id;
      $berkas['npwp'] = $request->file('npwp')->store('', 'public');
      $berkas['buku_nikah'] = $request->file('buku_nikah')->store('', 'public');

      $berkas->save();

      return redirect()->route('berkas')->with([
        'message' => 'Berkas berhasil ditambahkan',
        'status' => 'Berkas berhasil ditambahkan'
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
