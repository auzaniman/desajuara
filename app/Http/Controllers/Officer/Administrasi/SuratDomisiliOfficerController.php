<?php

namespace App\Http\Controllers\Officer\Administrasi;

use App\Models\AdministrasiModel;
use App\Models\User;
use App\Models\Berkas;
use App\Models\VerifikasiModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuratDomisiliOfficerController extends Controller
{
  // Menampilkan Semua Data Permohonan
  public function index(Request $request)
  {
    $pagination = 15;
    $users = User::all();
    $berkas = Berkas::where('user_id')->first();
    $surdom = AdministrasiModel::where('nama_ajuan', 'Surat Domisili')->orderBy('created_at', 'desc')->paginate($pagination);
    $verifikasi = VerifikasiModel::all();

    return
    view('officer.pages.layanan.administrasi.surdom.suratdomisili',
      [
        'users' => $users,
        'berkas' => $berkas,
        'surdom' => $surdom,
        'verifikasi' => $verifikasi,
      ]
    )->with('i', ($request->input('page', 1) - 1) * $pagination);
  }

  // Menampilkan Detail Permohonan User
  public function show($id)
  {
      $surdom = AdministrasiModel::findOrFail($id);
      $verifikasi = VerifikasiModel::all();

      return view('officer.pages.layanan.administrasi.surdom.verify', [
        'surdom' => $surdom,
        'verifikasi' => $verifikasi,
      ]);
  }

  // Verifikasi Permohonan
  public function update(Request $request, $id)
  {
    $surdom = AdministrasiModel::findOrFail($id);

    $surdom->verifikasi_id = $request->verifikasi_id;

    $surdom->save();

    return redirect()->back()->with([
      'message' => 'Permohonan berhasil diverifikasi',
      'status' => 'Berhasil memverifikasi permohonan'
    ]);
  }

  // Mengirimkan File Permohonan Yang Telah Terverifikasi
  public function update_alt(Request $request, $id)
  {
    $surdom = AdministrasiModel::findOrFail($id);
    $surdom['file_permohonan_surdom'] = $request->file('file_permohonan_surdom')->store('', 'public');

    $surdom->save();

    return redirect()->back()->with([
      'message' => 'File Permohonan berhasil dikirim',
      'status' => 'Berhasil mengirimkan dokumen permohonan'
    ]);
  }

  // Mengirimkan File Permohonan Yang Telah Terverifikasi
  public function update_keterangan(Request $request, $id)
  {
    $surdom = AdministrasiModel::findOrFail($id);
    $surdom->keterangan = $request->keterangan;

    $surdom->save();

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
    $surdom = AdministrasiModel::where('verifikasi_id', '3')->get();
    $ordersurdom = AdministrasiModel::orderBy('created_at', 'desc')->paginate($pagination);
    $verifikasi = VerifikasiModel::all();

    return
    view('officer.pages.layanan.administrasi.surdom.status.waiting',
      [
        'users' => $users,
        'berkas' => $berkas,
        'surdom' => $surdom,
        'ordersurdom' => $ordersurdom,
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
    $surdom = AdministrasiModel::where('verifikasi_id', '1')->get();
    $ordersurdom = AdministrasiModel::orderBy('created_at', 'desc')->paginate($pagination);
    $verifikasi = VerifikasiModel::all();

    return
    view('officer.pages.layanan.administrasi.surdom.status.verifikasi',
      [
        'users' => $users,
        'berkas' => $berkas,
        'surdom' => $surdom,
        'ordersurdom' => $ordersurdom,
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
    $surdom = AdministrasiModel::where('verifikasi_id', '2')->get();
    $ordersurdom = AdministrasiModel::orderBy('created_at', 'desc')->paginate($pagination);
    $verifikasi = VerifikasiModel::all();

    return
    view('officer.pages.layanan.administrasi.surdom.status.ditolak',
      [
        'users' => $users,
        'berkas' => $berkas,
        'surdom' => $surdom,
        'ordersurdom' => $ordersurdom,
        'verifikasi' => $verifikasi,
      ]
    )->with('i', ($request->input('page', 1) - 1) * $pagination);
  }
}
