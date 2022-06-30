<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBerkasRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Berkas;

class BerkasController extends Controller
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

      return view('superuser.pages.berkas', [
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

      $berkas->user_id = $request->user_id;
      $berkas['foto_ktp'] = $request->file('foto_ktp')->store('', 'public');
      $berkas['foto_kk'] = $request->file('foto_kk')->store('', 'public');
      $berkas['foto_diri'] = $request->file('foto_diri')->store('', 'public');
      $berkas['akta_kelahiran'] = $request->file('akta_kelahiran')->store('', 'public');
      $berkas['paspoto'] = $request->file('paspoto')->store('', 'public');

      $berkas->save();

      return redirect()->route('berkas')->with([
        'message' => 'Berkas berhasil ditambahkan',
        'status' => 'Sukses! Berkas Wajib berhasil ditambahkan'
      ]);
    }

    public function berkas_npwp(Request $request)
    {
      $berkas = Berkas::where('user_id', '=', Auth::user()->id)->first();
      $berkas['npwp'] = $request->file('npwp')->store('', 'public');

      $berkas->save();

      return redirect()->route('berkas')->with([
        'message' => 'Berkas berhasil ditambahkan',
        'status' => 'Sukses! Berkas Optional berhasil ditambahkan'
      ]);
    }

    public function berkas_bukunikah(Request $request)
    {
      $berkas = Berkas::where('user_id', '=', Auth::user()->id)->first();
      $berkas['buku_nikah'] = $request->file('buku_nikah')->store('', 'public');

      $berkas->save();

      return redirect()->route('berkas')->with([
        'message' => 'Berkas berhasil ditambahkan',
        'status' => 'Sukses! Berkas Optional berhasil ditambahkan'
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
      // $berkas = Berkas::where('user_id', '=', Auth::user()->id)->first();

      // $berkas->user_id = $request->user_id;
      // $berkas['foto_ktp'] = $request->file('foto_ktp')->store('', 'public');
      // $berkas['foto_kk'] = $request->file('foto_kk')->store('', 'public');
      // $berkas['foto_diri'] = $request->file('foto_diri')->store('', 'public');
      // $berkas['akta_kelahiran'] = $request->file('akta_kelahiran')->store('', 'public');
      // $berkas['paspoto'] = $request->file('paspoto')->store('', 'public');

      // $berkas->save();

      // return redirect()->route('berkas')->with([
      //   'message' => 'Berkas berhasil diubah',
      //   'status' => 'Berkas berhasil diubah'
      // ]);
    }

    // public function berkas_alt_update(Request $request, $id)
    // {
    //   $berkas = Berkas::where('user_id', '=', Auth::user()->id)->first();
    //   $berkas['npwp'] = $request->file('npwp')->store('', 'public');
    //   $berkas['buku_nikah'] = $request->file('buku_nikah')->store('', 'public');

    //   $berkas->save();

    //   return redirect()->route('berkas')->with([
    //     'message' => 'Berkas berhasil diubah',
    //     'status' => 'Berkas berhasil diubah'
    //   ]);
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $berkas = Berkas::where('id', $id)->first();
      $berkas->delete();

      return redirect()->back()
      ->with([
          'message' => 'berhasil dihapus',
          'status' => 'Sukses! Berkas berhasil dihapus'
      ]);
    }
}
