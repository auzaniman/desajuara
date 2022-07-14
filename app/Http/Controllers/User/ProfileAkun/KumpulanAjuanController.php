<?php

namespace App\Http\Controllers\User\ProfileAkun;

use App\Http\Controllers\Controller;
use App\Models\AdministrasiModel;
use App\Models\User;
use App\Models\FotoProfileModel;
use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use App\Models\Village;
use App\Models\NonPerizinanModel;
use App\Models\PerizinanModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;

class KumpulanAjuanController extends Controller
{
  public function kumpulan_ajuan()
  {
    $user = User::where('id', '=', Auth::user()->id)->first();
    $foto = FotoProfileModel::where('user_id', '=', Auth::user()->id)->first();
    $administrasi = AdministrasiModel::where('user_id', '=', Auth::user()->id)->get();
    $perizinan = PerizinanModel::where('user_id', '=', Auth::user()->id)->get();
    $nonperizinan = NonPerizinanModel::where('user_id', '=', Auth::user()->id)->get();

    $provinsi = Province::select('name')
        ->where('id', '=', Auth::user()->provinsi_ktp)
        ->first();

    $kota = Regency::select('name')
      ->where('id', '=', Auth::user()->kota_ktp)
      ->first();

    $kecamatan = District::select('name')
      ->where('id', '=', Auth::user()->kecamatan_ktp)
      ->first();

    $desa = Village::select('name')
        ->where('id', '=', Auth::user()->desa_ktp)
        ->first();

    return view('superuser.pages.profileakun.ajuan', compact(
      'user',
      'foto',
      'administrasi',
      'perizinan',
      'nonperizinan',
      'provinsi',
      'kota',
      'kecamatan',
      'desa',
    ));
  }

  // Bidang Admnistrasi
  public function kumpulan_administrasi()
  {
    $user = User::where('id', '=', Auth::user()->id)->first();
    $foto = FotoProfileModel::where('user_id', '=', Auth::user()->id)->first();

    return view('superuser.pages.profileakun.sort_ajuan.sort_administrasi', [
      'user' => $user,
      'foto' =>$foto,
    ]);
  }

   public function searchAdministrasi(Request $request)
  {
    $output="Tidak ada hasil yang ditampilkan";
    if($request->ajax())
    {
      $documents=AdministrasiModel::where('user_id', '=', Auth::user()->id)
      ->where(function ($query) use ($request) {
        $query->where('nama_pemohon','LIKE','%'.$request->search."%")
        ->orWhere('nama_ajuan','LIKE','%'.$request->search."%")
        ->orWhere('kategori','LIKE','%'.$request->search."%");
      })
      ->orderBy('created_at', 'desc')
      ->get();

      if($documents)
      {
        foreach ($documents as $document) {
          $verifikasi = 'DIPROSES';
          $icon_verify = '<i class="fa fa-clock-o text-warning text-xs me-1" aria-hidden="true"></i>';
          $file_permohonan = '-';

          if ($document->verifikasi == 'DITERIMA'){
            $icon_verify = '<i class="fas fa-check-circle text-success text-xs me-1" aria-hidden="true"></i>';
            $verifikasi = 'DITERIMA';
          }
          elseif ($document->verifikasi == 'DITOLAK'){
            $icon_verify = '<i class="fas fa-times-circle text-danger text-xs me-1" aria-hidden="true"></i>';
            $verifikasi = 'DITOLAK';
          }
          elseif ($document->verifikasi == 'DIPROSES'){
            $icon_verify = '<i class="fa fa-clock-o text-warning text-xs me-1" aria-hidden="true"></i>';
            $verifikasi = 'DIPROSES';
          }
          if ($document->file_permohonan_surdom != null)
            $file_permohonan = '<a href="'.route('download_surdom', $document->id).'" class="btn btn-primary btn-xs text-white mb-0">Download</a>';
          $output.=
          '<tr>'.
            '<td class="align-middle text-sm">'.
              '<h6 class="mb-0 text-xs">'
                .$document->nama_pemohon.
              '</h6>'.
            '</td>'.
            '<td class="align-middle text-sm">'.
              '<h6 class="mb-0 text-xs">'.
                $document->nama_ajuan.
              '</h6>'.
            '</td>'.
            '<td class="align-middle text-sm">'.
              '<h6 class="mb-0 text-xs">'.
                $document->kategori.
              '</h6>'.
            '</td>'.
            '<td class="align-middle text-sm">'.
              '<h6 class="mb-0 text-xs">'.
                $document->created_at.
              '</h6>'.
            '</td>'.
            '<td class="align-middle text-sm">'.
              '<h6 class="mb-0 text-xs">'.
                $icon_verify.$verifikasi.
              '</h6>'.
            '</td>'.
            '<td class="align-middle text-sm">'.
              $file_permohonan.
            '</td>'.
            '<td class="align-middle text-sm">'.
              '<h6 class="mb-0 text-xs">'.
                $document->keterangan.
              '</h6>'.
            '</td>'.
          '</tr>';
        }
        return Response($output);
      }
    }
  }

  // Bidang Admnistrasi - Surat Domisili

  public function downloadSurdom($id)
  {
    $file = AdministrasiModel::where('user_id', '=', Auth::user()->id)->where('id', $id)->where('nama_ajuan', 'Surat Domisili')->firstOrFail();

    if ($file->file_permohonan_surdom)
      {
        $file_path = public_path() . "/storage/" . $file->file_permohonan_surdom;

        return response()->download($file_path);
      }
    else
      {
        $headers = array(
          'Content-Type: application/docx',
        );
        return Response::download($file, "Surat Domisili.docx", $headers);
      }
  }
  // End Bidang Administrasi

  // Bidang Perizinan
  public function kumpulan_perizinan()
  {
    $user = User::where('id', '=', Auth::user()->id)->first();
    $foto = FotoProfileModel::where('user_id', '=', Auth::user()->id)->first();

    return view('superuser.pages.profileakun.sort_ajuan.sort_perizinan', [
      'user' => $user,
      'foto' =>$foto,
    ]);
  }

  public function searchPerizinan(Request $request)
  {
    $output="Tidak ada hasil yang ditampilkan";
    if($request->ajax())
    {
      $documents=PerizinanModel::where('user_id', '=', Auth::user()->id)
      ->where(function ($query) use ($request) {
        $query->where('nama_pemohon','LIKE','%'.$request->search."%")
        ->orWhere('nama_ajuan','LIKE','%'.$request->search."%")
        ->orWhere('kategori','LIKE','%'.$request->search."%");
      })
      ->orderBy('created_at', 'desc')
      ->get();

      if($documents)
      {
        foreach ($documents as $document) {
          $verifikasi = 'DIPROSES';
          $icon_verify = '<i class="fa fa-clock-o text-warning text-xs me-1" aria-hidden="true"></i>';
          $file_permohonan = '-';

          if ($document->verifikasi == 'DITERIMA'){
            $icon_verify = '<i class="fas fa-check-circle text-success text-xs me-1" aria-hidden="true"></i>';
            $verifikasi = 'Terverifikasi';
          }
          elseif ($document->verifikasi == 'DITOLAK'){
            $icon_verify = '<i class="fas fa-times-circle text-danger text-xs me-1" aria-hidden="true"></i>';
            $verifikasi = 'Ditolak';
          }
          elseif ($document->verifikasi == 'DIPROSES'){
            $icon_verify = '<i class="fa fa-clock-o text-warning text-xs me-1 me-1" aria-hidden="true"></i>';
            $verifikasi = 'DIPROSES';
          }
          if ($document->file_permohonan_suketusaha != null)
            $file_permohonan = '<a href="'.route('download_suketusaha', $document->id).'" class="btn btn-primary btn-xs text-white mb-0">Download</a>';
          $output.=
          '<tr>'.
            '<td class="align-middle text-sm">'.
              '<h6 class="mb-0 text-xs">'
                .$document->nama_pemohon.
              '</h6>'.
            '</td>'.
            '<td class="align-middle text-sm">'.
              '<h6 class="mb-0 text-xs">'.
                $document->nama_ajuan.
              '</h6>'.
            '</td>'.
            '<td class="align-middle text-sm">'.
              '<h6 class="mb-0 text-xs">'.
                $document->kategori.
              '</h6>'.
            '</td>'.
            '<td class="align-middle text-sm">'.
              '<h6 class="mb-0 text-xs">'.
                $document->created_at.
              '</h6>'.
            '</td>'.
            '<td class="align-middle text-sm">'.
              '<h6 class="mb-0 text-xs">'.
                $icon_verify.$verifikasi.
              '</h6>'.
            '</td>'.
            '<td class="align-middle text-sm">'.
              $file_permohonan.
            '</td>'.
            '<td class="align-middle text-sm">'.
              '<h6 class="mb-0 text-xs">'.
                $document->keterangan.
              '</h6>'.
            '</td>'.
          '</tr>';
        }
        return Response($output);
      }
    }
  }

  // Bidang Perizinan - Surat Keterangan Usaha
  public function downloadSuketusaha($id)
  {
    $file = PerizinanModel::where('user_id', '=', Auth::user()->id)->where('id', $id)->where('nama_ajuan', 'Surat Keterangan Usaha')->firstOrFail();

    if ($file->file_permohonan_suketusaha)
      {
        $file_path = public_path() . "/storage/" . $file->file_permohonan_suketusaha;

        return response()->download($file_path);
      }
    else
      {
        $headers = array(
          'Content-Type: application/docx',
        );
        return Response::download($file, "Surat SuketUsaha.docx", $headers);
      }
  }
  // End Bidang Perizinan

  // Bidang NonPerizinan
  public function kumpulan_nonperizinan()
  {
    $user = User::where('id', '=', Auth::user()->id)->first();
    $foto = FotoProfileModel::where('user_id', '=', Auth::user()->id)->first();

    return view('superuser.pages.profileakun.sort_ajuan.sort_nonperizinan', [
      'user' => $user,
      'foto' =>$foto,
    ]);
  }

  public function searchNonPerizinan(Request $request)
  {
    $output="Tidak ada hasil yang ditampilkan";
    if($request->ajax())
    {
      $documents = NonPerizinanModel::where('user_id', '=', Auth::user()->id)
      ->where(function ($query) use ($request) {
        $query->where('nama_pemohon','LIKE','%'.$request->search."%")
        ->orWhere('nama_ajuan','LIKE','%'.$request->search."%")
        ->orWhere('kategori','LIKE','%'.$request->search."%");
      })
      ->orderBy('created_at', 'desc')
      ->get();

      if($documents)
      {
        foreach ($documents as $document) {
          $verifikasi = 'DIPROSES';
          $icon_verify = '<i class="fa fa-clock-o text-warning text-xs me-1" aria-hidden="true"></i>';
          $download_file = '-';

          if ($document->verifikasi == 'DITERIMA'){
            $icon_verify = '<i class="fas fa-check-circle text-success text-xs me-1" aria-hidden="true"></i>';
            $verifikasi = 'Terverifikasi';
          }
          elseif ($document->verifikasi == 'DITOLAK'){
            $icon_verify = '<i class="fas fa-times-circle text-danger text-xs me-1" aria-hidden="true"></i>';
            $verifikasi = 'Ditolak';
          }
          elseif ($document->verifikasi == 'DIPROSES'){
            $icon_verify = '<i class="fa fa-clock-o text-warning text-xs me-1" aria-hidden="true"></i>';
            $verifikasi = 'DIPROSES';
          }

          if ($document->file_permohonan_supengdesa != null) {
             $download_file = '<a href="'.route('download_supengdesa', $document->id).'" class="btn btn-primary btn-xs text-white mb-0">Download</a>';
          }
          if ($document->file_permohonan_sktm != null) {
             $download_file = '<a href="'.route('download_sktm', $document->id).'" class="btn btn-primary btn-xs text-white mb-0">Download</a>';
          }
          $output.=
          '<tr>'.
            '<td class="align-middle text-sm">'.
              '<h6 class="mb-0 text-xs">'
                .$document->nama_pemohon.
              '</h6>'.
            '</td>'.
            '<td class="align-middle text-sm">'.
              '<h6 class="mb-0 text-xs">'.
                $document->nama_ajuan.
              '</h6>'.
            '</td>'.
            '<td class="align-middle text-sm">'.
              '<h6 class="mb-0 text-xs">'.
                $document->kategori.
              '</h6>'.
            '</td>'.
            '<td class="align-middle text-sm">'.
              '<h6 class="mb-0 text-xs">'.
                $document->created_at.
              '</h6>'.
            '</td>'.
            '<td class="align-middle text-sm">'.
              '<h6 class="mb-0 text-xs">'.
                $icon_verify.$verifikasi.
              '</h6>'.
            '</td>'.
            '<td class="align-middle text-sm">'.
              $download_file.
            '</td>'.
            '<td class="align-middle text-sm">'.
              '<h6 class="mb-0 text-xs">'.
                $document->keterangan.
              '</h6>'.
            '</td>'.
          '</tr>';
        }
        return Response($output);
      }
    }
  }

  // Bidang NonPerizinan - Surat Keterangan Tidak Mampu
  public function downloadSktm($id)
  {
    $file = NonPerizinanModel::where('user_id', '=', Auth::user()->id)->where('id', $id)->where('nama_ajuan', 'Surat Keterangan Tidak Mampu')->firstOrFail();

    if ($file->file_permohonan_sktm)
      {
        $file_path = public_path() . "/storage/" . $file->file_permohonan_sktm;

        return response()->download($file_path);
      }
    else
      {
        $headers = array(
          'Content-Type: application/docx',
        );
        return Response::download($file, "Surat SKTM.docx", $headers);
      }
  }

  // Bidang NonPerizinan - Surat Pengantar Desa
  public function downloadSupengdesa($id)
  {
    $file = NonPerizinanModel::where('user_id', '=', Auth::user()->id)->where('id', $id)->where('nama_ajuan', 'Surat Pengantar Desa')->firstOrFail();

    if ($file->file_permohonan_supengdesa)
      {
        $file_path = public_path() . "/storage/" . $file->file_permohonan_supengdesa;

        return response()->download($file_path);
      }
    else
      {
        $headers = array(
          'Content-Type: application/docx',
        );
        return Response::download($file, "Surat Pengantar Desa.docx", $headers);
      }
  }

  // End Bidang NonPerizinan

  // Bidang Pertanahan
  public function kumpulan_pertanahan()
  {
    $user = User::where('id', '=', Auth::user()->id)->first();
    $foto = FotoProfileModel::where('user_id', '=', Auth::user()->id)->first();

    return view('superuser.pages.profileakun.sort_ajuan.sort_pertanahan', [
      'user' => $user,
      'foto' =>$foto,
    ]);
  }

  public function searchPertanahan(Request $request)
  {
    $output="Tidak ada hasil yang ditampilkan";
    if($request->ajax())
    {
      $documents=PerizinanModel::where('user_id', '=', Auth::user()->id)
      ->where(function ($query) use ($request) {
        $query->where('nama_pemohon','LIKE','%'.$request->search."%")
        ->orWhere('nama_ajuan','LIKE','%'.$request->search."%")
        ->orWhere('kategori','LIKE','%'.$request->search."%");
      })
      ->orderBy('created_at', 'desc')
      ->get();

      if($documents)
      {
        foreach ($documents as $document) {
          $verifikasi = 'DIPROSES';
          $icon_verify = '<i class="fa fa-clock-o text-warning text-xs me-1" aria-hidden="true"></i>';
          $file_permohonan = '-';

          if ($document->verifikasi == 'DITERIMA'){
            $icon_verify = '<i class="fas fa-check-circle text-success text-xs me-1" aria-hidden="true"></i>';
            $verifikasi = 'Terverifikasi';
          }
          elseif ($document->verifikasi == 'DITOLAK'){
            $icon_verify = '<i class="fas fa-times-circle text-danger text-xs me-1" aria-hidden="true"></i>';
            $verifikasi = 'Ditolak';
          }
          elseif ($document->verifikasi == 'DIPROSES'){
            $icon_verify = '<i class="fa fa-clock-o text-warning text-xs me-1" aria-hidden="true"></i>';
            $verifikasi = 'DIPROSES';
          }
          if ($document->file_permohonan != null)
            $file_permohonan = '<a href="'.route('download_surdom').'" class="btn btn-primary btn-xs text-white mb-0">Download</a>';
          $output.=
          '<tr>'.
            '<td class="align-middle text-sm">'.
              '<h6 class="mb-0 text-xs">'
                .$document->nama_pemohon.
              '</h6>'.
            '</td>'.
            '<td class="align-middle text-sm">'.
              '<h6 class="mb-0 text-xs">'.
                $document->nama_ajuan.
              '</h6>'.
            '</td>'.
            '<td class="align-middle text-sm">'.
              '<h6 class="mb-0 text-xs">'.
                $document->kategori.
              '</h6>'.
            '</td>'.
            '<td class="align-middle text-sm">'.
              '<h6 class="mb-0 text-xs">'.
                $document->created_at.
              '</h6>'.
            '</td>'.
            '<td class="align-middle text-sm">'.
              '<h6 class="mb-0 text-xs">'.
                $icon_verify.$verifikasi.
              '</h6>'.
            '</td>'.
            '<td class="align-middle text-sm">'.
              $file_permohonan.
            '</td>'.
            '<td class="align-middle text-sm">'.
              '<h6 class="mb-0 text-xs">'.
                $document->keterangan.
              '</h6>'.
            '</td>'.
          '</tr>';
        }
        return Response($output);
      }
    }
  }
  // End Bidang Pertanahan
}
