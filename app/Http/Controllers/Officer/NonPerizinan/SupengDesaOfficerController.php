<?php

namespace App\Http\Controllers\Officer\NonPerizinan;

use App\Models\NonPerizinanModel;
use App\Models\User;
use App\Models\Berkas;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SupengDesaOfficerController extends Controller
{
  // Menampilkan Semua Data Permohonan
  public function index(Request $request)
  {
    $pagination = 15;
    $users = User::all();
    $berkas = Berkas::where('user_id')->first();
    $supengdesa = NonPerizinanModel::where('nama_ajuan', 'Surat Pengantar Desa')->orderBy('created_at', 'desc')->paginate($pagination);

    return
    view('officer.pages.layanan.non_perizinan.supengdesa.supengdesa',
      [
        'users' => $users,
        'berkas' => $berkas,
        'supengdesa' => $supengdesa,
      ]
    )->with('i', ($request->input('page', 1) - 1) * $pagination);
  }

  // Menampilkan Detail Permohonan User
  public function show($id)
  {
      $supengdesa = NonPerizinanModel::findOrFail($id);


      return view('officer.pages.layanan.non_perizinan.supengdesa.verify', [
        'supengdesa' => $supengdesa,
      ]);
  }

  // Verifikasi Permohonan
  public function update(Request $request, $id)
  {
    $supengdesa = NonPerizinanModel::findOrFail($id);

    $supengdesa->verifikasi = $request->verifikasi;

    $supengdesa->save();

    return redirect()->back()->with([
      'message' => 'Permohonan berhasil diverifikasi',
      'status' => 'Berhasil memverifikasi permohonan'
    ]);
  }

  // Mengirimkan File Permohonan Yang Telah Terverifikasi
  public function update_alt(Request $request, $id)
  {
    $supengdesa = NonPerizinanModel::findOrFail($id);
    $supengdesa['file_permohonan_supengdesa'] = $request->file('file_permohonan_supengdesa')->store('', 'public');

    $supengdesa->save();

    return redirect()->back()->with([
      'message' => 'File Permohonan berhasil dikirim',
      'status' => 'Berhasil mengirimkan dokumen permohonan'
    ]);
  }

  // Mengirimkan File Permohonan Yang Telah Terverifikasi
  public function update_keterangan(Request $request, $id)
  {
    $supengdesa = NonPerizinanModel::findOrFail($id);
    $supengdesa->keterangan = $request->keterangan;

    $supengdesa->save();

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
    $supengdesa = NonPerizinanModel::where('verifikasi', 'DIPROSES')->get();
    $ordersupengdesa = NonPerizinanModel::orderBy('created_at', 'desc')->paginate($pagination);

    return
    view('officer.pages.layanan.non_perizinan.supengdesa.status.waiting',
      [
        'users' => $users,
        'berkas' => $berkas,
        'supengdesa' => $supengdesa,
        'ordersupengdesa' => $ordersupengdesa,
      ]
    )->with('i', ($request->input('page', 1) - 1) * $pagination);
  }

  // Menampilkan Data Permohonan dengan Status Verifikasi
  public function terverifikasi(Request $request)
  {
    $pagination = 15;
    $users = User::all();
    $berkas = Berkas::where('user_id')->first();
    $supengdesa = NonPerizinanModel::where('verifikasi', 'DITERIMA')->get();
    $ordersupengdesa = NonPerizinanModel::orderBy('created_at', 'desc')->paginate($pagination);

    return
    view('officer.pages.layanan.non_perizinan.supengdesa.status.verifikasi',
      [
        'users' => $users,
        'berkas' => $berkas,
        'supengdesa' => $supengdesa,
        'ordersupengdesa' => $ordersupengdesa,
      ]
    )->with('i', ($request->input('page', 1) - 1) * $pagination);
  }

  // Menampilkan Data Permohonan dengan Status Ditolak
  public function ditolak(Request $request)
  {
    $pagination = 15;
    $users = User::all();
    $berkas = Berkas::where('user_id')->first();
    $supengdesa = NonPerizinanModel::where('verifikasi', 'DITOLAK')->get();
    $ordersupengdesa = NonPerizinanModel::orderBy('created_at', 'desc')->paginate($pagination);

    return
    view('officer.pages.layanan.non_perizinan.supengdesa.status.ditolak',
      [
        'users' => $users,
        'berkas' => $berkas,
        'supengdesa' => $supengdesa,
        'ordersupengdesa' => $ordersupengdesa,
      ]
    )->with('i', ($request->input('page', 1) - 1) * $pagination);
  }
}
