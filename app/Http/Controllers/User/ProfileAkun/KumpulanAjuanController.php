<?php

namespace App\Http\Controllers\User\ProfileAkun;

use App\Http\Controllers\Controller;
use App\Models\AdministrasiModel;
use App\Models\User;
use App\Models\FotoProfileModel;
use App\Models\KategoriModel;
use App\Models\NamaAjuanModel;
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

    return view('superuser.pages.profileakun.ajuan', [
      'user' => $user,
      'foto' =>$foto,
    ]);
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

      // $documents=SuratDomisili::join('sktm', 'suratdomisili.id', '=', 'suratdomisili.id')
      // ->join('surat_keterangan_usaha', 'suratdomisili.id', '=', 'suratdomisili.id')
      // ->join('supeng_desa', 'suratdomisili.id', '=', 'suratdomisili.id')
      // ->where('suratdomisili.user_id', '=', Auth::user()->id)
      // ->where('surat_keterangan_usaha.user_id', '=', Auth::user()->id)
      // ->where('supeng_desa.user_id', '=', Auth::user()->id)
      // ->where('sktm.user_id', '=', Auth::user()->id)
      // ->where(function ($query) use ($request) {
      //   $query->where('nama_pemohon','LIKE','%'.$request->search."%")
      //   ->orWhere('nama_ajuan','LIKE','%'.$request->search."%")
      //   ->orWhere('kategori','LIKE','%'.$request->search."%");
      // })
      // ->orderBy('created_at', 'desc')
      // ->get();

      if($documents)
      {
        foreach ($documents as $document) {
          $verifikasi_id = 'Menunggu Proses';
          $icon_verify = '<i class="fa fa-clock-o text-warning text-xs me-1" aria-hidden="true"></i>';
          $file_permohonan = '-';

          if ($document->verifikasi_id == '1'){
            $icon_verify = '<i class="fas fa-check-circle text-success text-xs me-1" aria-hidden="true"></i>';
            $verifikasi_id = 'Terverifikasi';
          }
          elseif ($document->verifikasi_id == '2'){
            $icon_verify = '<i class="fas fa-times-circle text-danger text-xs me-1" aria-hidden="true"></i>';
            $verifikasi_id = 'Ditolak';
          }
          elseif ($document->verifikasi_id == '3'){
            $icon_verify = '<i class="fa fa-clock-o text-warning text-xs me-1" aria-hidden="true"></i>';
            $verifikasi_id = 'Menunggu Proses';
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
                $icon_verify.$verifikasi_id.
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

  public function downloadSurdom()
  {
    $file = AdministrasiModel::where('user_id', '=', Auth::user()->id)->first();

    if ($file->file_permohonan)
      {
        $file_path = public_path() . "/storage/" . $file->file_permohonan;

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
          $verifikasi_id = 'Menunggu Proses';
          $icon_verify = '<i class="fa fa-clock-o text-warning text-xs me-1" aria-hidden="true"></i>';
          $file_permohonan = '-';

          if ($document->verifikasi_id == '1'){
            $icon_verify = '<i class="fas fa-check-circle text-success text-xs me-1" aria-hidden="true"></i>';
            $verifikasi_id = 'Terverifikasi';
          }
          elseif ($document->verifikasi_id == '2'){
            $icon_verify = '<i class="fas fa-times-circle text-danger text-xs me-1" aria-hidden="true"></i>';
            $verifikasi_id = 'Ditolak';
          }
          elseif ($document->verifikasi_id == '3'){
            $icon_verify = '<i class="fa fa-clock-o text-warning text-xs me-1 me-1" aria-hidden="true"></i>';
            $verifikasi_id = 'Menunggu Proses';
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
                $icon_verify.$verifikasi_id.
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
  public function downloadSuketusaha()
  {
    $file = PerizinanModel::where('user_id', '=', Auth::user()->id)->first();

    if ($file->file_suketusaha)
      {
        $file_path = public_path() . "/storage/" . $file->file_suketusaha;

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
          $verifikasi_id = 'Menunggu Proses';
          $icon_verify = '<i class="fa fa-clock-o text-warning text-xs me-1" aria-hidden="true"></i>';
          $file_permohonan = '-';

          if ($document->verifikasi_id == '1'){
            $icon_verify = '<i class="fas fa-check-circle text-success text-xs me-1" aria-hidden="true"></i>';
            $verifikasi_id = 'Terverifikasi';
          }
          elseif ($document->verifikasi_id == '2'){
            $icon_verify = '<i class="fas fa-times-circle text-danger text-xs me-1" aria-hidden="true"></i>';
            $verifikasi_id = 'Ditolak';
          }
          elseif ($document->verifikasi_id == '3'){
            $icon_verify = '<i class="fa fa-clock-o text-warning text-xs me-1" aria-hidden="true"></i>';
            $verifikasi_id = 'Menunggu Proses';
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
                $icon_verify.$verifikasi_id.
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

  // Bidang NonPerizinan - Surat Keterangan Tidak Mampu
  public function downloadSktm()
  {
    $file = NonPerizinanModel::where('user_id', '=', Auth::user()->id)->first();

    if ($file->file_sktm)
      {
        $file_path = public_path() . "/storage/" . $file->file_sktm;

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

  // Bidang NonPerizinan - Surat Pengantar Desa
  public function downloadSupengdesa()
  {
    $file = NonPerizinanModel::where('user_id', '=', Auth::user()->id)->first();

    if ($file->file_supeng)
      {
        $file_path = public_path() . "/storage/" . $file->file_supeng;

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
          $verifikasi_id = 'Menunggu Proses';
          $icon_verify = '<i class="fa fa-clock-o text-warning text-xs me-1" aria-hidden="true"></i>';
          $file_permohonan = '-';

          if ($document->verifikasi_id == '1'){
            $icon_verify = '<i class="fas fa-check-circle text-success text-xs me-1" aria-hidden="true"></i>';
            $verifikasi_id = 'Terverifikasi';
          }
          elseif ($document->verifikasi_id == '2'){
            $icon_verify = '<i class="fas fa-times-circle text-danger text-xs me-1" aria-hidden="true"></i>';
            $verifikasi_id = 'Ditolak';
          }
          elseif ($document->verifikasi_id == '3'){
            $icon_verify = '<i class="fa fa-clock-o text-warning text-xs me-1" aria-hidden="true"></i>';
            $verifikasi_id = 'Menunggu Proses';
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
                $icon_verify.$verifikasi_id.
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
