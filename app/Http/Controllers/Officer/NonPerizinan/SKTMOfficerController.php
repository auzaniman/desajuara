<?php

namespace App\Http\Controllers\Officer\NonPerizinan;

use App\Models\User;
use App\Models\Berkas;
use App\Models\VerifikasiModel;
use App\Models\NonPerizinanModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SKTMOfficerController extends Controller
{
   // Menampilkan Semua Data Permohonan
  public function index(Request $request)
  {
    $pagination = 15;
    $users = User::all();
    $berkas = Berkas::where('user_id')->first();
    $sktm = NonPerizinanModel::where('nama_ajuan', 'Surat Keterangan Tidak Mampu')->orderBy('created_at', 'desc')->paginate($pagination);
    $verifikasi = VerifikasiModel::all();

    return
    view('officer.pages.layanan.non_perizinan.sktm.sktm',
      [
        'users' => $users,
        'berkas' => $berkas,
        'sktm' => $sktm,
        'verifikasi' => $verifikasi,
      ]
    )->with('i', ($request->input('page', 1) - 1) * $pagination);
  }

  // Menampilkan Detail Permohonan User
  public function show($id)
  {
      $sktm = NonPerizinanModel::findOrFail($id);
      $verifikasi = VerifikasiModel::all();

      return view('officer.pages.layanan.non_perizinan.sktm.verify', [
        'sktm' => $sktm,
        'verifikasi' => $verifikasi,
      ]);
  }

  // Verifikasi Permohonan
  public function update(Request $request, $id)
  {
    $sktm = NonPerizinanModel::findOrFail($id);

    $sktm->verifikasi_id = $request->verifikasi_id;

    $sktm->save();

    return redirect()->back()->with([
      'message' => 'Permohonan berhasil diverifikasi',
      'status' => 'Berhasil memverifikasi permohonan'
    ]);
  }

  // Mengirimkan File Permohonan Yang Telah Terverifikasi
  public function update_alt(Request $request, $id)
  {
    $sktm = NonPerizinanModel::findOrFail($id);
    $sktm['file_permohonan'] = $request->file('file_permohonan')->store('', 'public');

    $sktm->save();

    return redirect()->back()->with([
      'message' => 'File Permohonan berhasil dikirim',
      'status' => 'Berhasil mengirimkan dokumen permohonan'
    ]);
  }

  // Mengirimkan File Permohonan Yang Telah Terverifikasi
  public function update_keterangan(Request $request, $id)
  {
    $sktm = NonPerizinanModel::findOrFail($id);
    $sktm->keterangan = $request->keterangan;

    $sktm->save();

    return redirect()->back()->with([
      'message' => 'File Permohonan berhasil dikirim',
      'status' => 'Berhasil mengirimkan keterangan permohonan'
    ]);
  }

  // Menampilkan Data Permohonan dengan Status Waiting
  public function waiting(Request $request)
  {
    $pagination = 15;
    $users = User::all();
    $berkas = Berkas::where('user_id')->first();
    $sktm = NonPerizinanModel::where('verifikasi_id', '3')->get();
    $ordersktm = NonPerizinanModel::orderBy('created_at', 'desc')->paginate($pagination);
    $verifikasi = VerifikasiModel::all();

    return
    view('officer.pages.layanan.non_perizinan.sktm.status.waiting',
      [
        'users' => $users,
        'berkas' => $berkas,
        'sktm' => $sktm,
        'ordersktm' => $ordersktm,
        'verifikasi' => $verifikasi,
      ]
    )->with('i', ($request->input('page', 1) - 1) * $pagination);
  }

  // Menampilkan Data Permohonan dengan Status Verifikasi
  public function terverifikasi(Request $request)
  {
    $pagination = 15;
    $users = User::all();
    $berkas = Berkas::where('user_id')->first();
    $sktm = NonPerizinanModel::where('verifikasi_id', '1')->get();
    $ordersktm = NonPerizinanModel::orderBy('created_at', 'desc')->paginate($pagination);
    $verifikasi = VerifikasiModel::all();

    return
    view('officer.pages.layanan.non_perizinan.sktm.status.verifikasi',
      [
        'users' => $users,
        'berkas' => $berkas,
        'sktm' => $sktm,
        'ordersktm' => $ordersktm,
        'verifikasi' => $verifikasi,
      ]
    )->with('i', ($request->input('page', 1) - 1) * $pagination);
  }

  // Menampilkan Data Permohonan dengan Status Ditolak
  public function ditolak(Request $request)
  {
    $pagination = 15;
    $users = User::all();
    $berkas = Berkas::where('user_id')->first();
    $sktm = NonPerizinanModel::where('verifikasi_id', '2')->get();
    $ordersktm = NonPerizinanModel::orderBy('created_at', 'desc')->paginate($pagination);
    $verifikasi = VerifikasiModel::all();

    return
    view('officer.pages.layanan.non_perizinan.sktm.status.ditolak',
      [
        'users' => $users,
        'berkas' => $berkas,
        'sktm' => $sktm,
        'ordersktm' => $ordersktm,
        'verifikasi' => $verifikasi,
      ]
    )->with('i', ($request->input('page', 1) - 1) * $pagination);
  }
}
