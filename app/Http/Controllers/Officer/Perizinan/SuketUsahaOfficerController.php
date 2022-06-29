<?php

namespace App\Http\Controllers\Officer\Perizinan;

use App\Models\PerizinanModel;
use App\Models\User;
use App\Models\Berkas;
use App\Models\VerifikasiModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuketUsahaOfficerController extends Controller
{
  // Menampilkan Semua Data Permohonan
  public function index(Request $request)
  {
    $pagination = 15;
    $users = User::all();
    $berkas = Berkas::where('user_id')->first();
    $suketusaha = PerizinanModel::where('nama_ajuan', 'Surat Keterangan Usaha')->orderBy('created_at', 'desc')->paginate($pagination);
    $verifikasi = VerifikasiModel::all();

    return
    view('officer.pages.layanan.perizinan.suketusaha.suketusaha',
      [
        'users' => $users,
        'berkas' => $berkas,
        'suketusaha' => $suketusaha,
        'verifikasi' => $verifikasi,
      ]
    )->with('i', ($request->input('page', 1) - 1) * $pagination);
  }

  // Menampilkan Detail Permohonan User
  public function show($id)
  {
      $suketusaha = PerizinanModel::findOrFail($id);
      $verifikasi = VerifikasiModel::all();

      return view('officer.pages.layanan.perizinan.suketusaha.verify', [
        'suketusaha' => $suketusaha,
        'verifikasi' => $verifikasi,
      ]);
  }

  // Verifikasi Permohonan
  public function update(Request $request, $id)
  {
    $suketusaha = PerizinanModel::findOrFail($id);

    $suketusaha->verifikasi_id = $request->verifikasi_id;

    $suketusaha->save();

    return redirect()->back()->with([
      'message' => 'Permohonan berhasil diverifikasi',
      'status' => 'Berhasil memverifikasi permohonan'
    ]);
  }

  // Mengirimkan File Permohonan Yang Telah Terverifikasi
  public function update_alt(Request $request, $id)
  {
    $suketusaha = PerizinanModel::findOrFail($id);
    $suketusaha['file_permohonan'] = $request->file('file_permohonan')->store('', 'public');

    $suketusaha->save();

    return redirect()->back()->with([
      'message' => 'File Permohonan berhasil dikirim',
      'status' => 'Berhasil mengirimkan dokumen permohonan'
    ]);
  }

  // Mengirimkan File Permohonan Yang Telah Terverifikasi
  public function update_keterangan(Request $request, $id)
  {
    $suketusaha = PerizinanModel::findOrFail($id);
    $suketusaha->keterangan = $request->keterangan;

    $suketusaha->save();

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
    $suketusaha = PerizinanModel::where('verifikasi_id', '3')->get();
    $ordersuketusaha = PerizinanModel::orderBy('created_at', 'desc')->paginate($pagination);
    $verifikasi = VerifikasiModel::all();

    return
    view('officer.pages.layanan.perizinan.suketusaha.status.waiting',
      [
        'users' => $users,
        'berkas' => $berkas,
        'suketusaha' => $suketusaha,
        'ordersuketusaha' => $ordersuketusaha,
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
    $suketusaha = PerizinanModel::where('verifikasi_id', '1')->get();
    $ordersuketusaha = PerizinanModel::orderBy('created_at', 'desc')->paginate($pagination);
    $verifikasi = VerifikasiModel::all();

    return
    view('officer.pages.layanan.perizinan.suketusaha.status.verifikasi',
      [
        'users' => $users,
        'berkas' => $berkas,
        'suketusaha' => $suketusaha,
        'ordersuketusaha' => $ordersuketusaha,
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
    $suketusaha = PerizinanModel::where('verifikasi_id', '2')->get();
    $ordersuketusaha = PerizinanModel::orderBy('created_at', 'desc')->paginate($pagination);
    $verifikasi = VerifikasiModel::all();

    return
    view('officer.pages.layanan.perizinan.suketusaha.status.ditolak',
      [
        'users' => $users,
        'berkas' => $berkas,
        'suketusaha' => $suketusaha,
        'ordersuketusaha' => $ordersuketusaha,
        'verifikasi' => $verifikasi,
      ]
    )->with('i', ($request->input('page', 1) - 1) * $pagination);
  }
}
