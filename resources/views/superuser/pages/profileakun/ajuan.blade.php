@extends('superuser.layouts.app')

@section('title')
Riwayat Pengajuan Permohonan
@endsection

@section('content')
<div class="row">
  <div class="col-lg-12">
    {{-- Avatar --}}
    @include('superuser.components.avatar_profile')
    {{-- End Avatar --}}
  </div>
</div>
<div class="row mt-4 mb-4">
  <div class="col-md-12">
    <div class="card">
      <div class="card-body">
        <p class="text-uppercase text-sm">Riwayat</p>
        <div class="table-responsive">
          <table class="table align-items-center mb-3">
            <thead>
              <tr>
                <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder">Nama Pemohon</th>
                <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder">Nama Ajuan</th>
                <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder">Kategori Ajuan</th>
                <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder">Tanggal Pengajuan</th>
                <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder">Status</th>
                <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder">File</th>
              </tr>
            </thead>
            <tbody>
              @if ($surdom != null)
              <tr>
                <td class="align-middle text-center text-sm">
                  <h6 class="mb-0 text-xs">{{$surdom->nama_pemohon}}</h6>
                </td>
                <td class="align-middle text-center text-sm">
                  <h6 class="mb-0 text-xs">{{$surdom->nama_ajuan}}</h6>
                </td>
                <td class="align-middle text-center">
                  <h6 class="mb-0 text-xs ps-2">{{$surdom->kategori}}</h6>
                </td>
                <td class="align-middle text-center">
                  <h6 class="mb-0 text-xs ps-2">{{$surdom->created_at}}</h6>
                </td>
                @if ($surdom->verifikasi_id == '1')
                  <td class="align-middle text-center">
                  <h6 class="mb-0 text-xs ps-2"><i class="fas fa-check-circle text-success text-sm" aria-hidden="true"></i> Terverifikasi</h6>
                </td>
                @elseif ($surdom->verifikasi_id == '2')
                <td class="align-middle text-center">
                  <h6 class="mb-0 text-xs ps-2"><i class="fas fa-times-circle text-danger text-sm" aria-hidden="true"></i> Ditolak</h6>
                </td>
                @else
                <td class="align-middle text-center">
                  <h6 class="mb-0 text-xs ps-2">Menunggu Proses</h6>
                </td>
                @endif
                @if ($surdom->file_surdom != null)
                <td class="align-middle text-center">
                  <h6 class="mb-0 text-xs ps-2">{{$surdom->file_surdom}}</h6>
                </td>
                @else
                <td class="align-middle text-center">
                  <h6 class="mb-0 text-xs ps-2"></h6>
                </td>
                @endif
              </tr>
              @else
              <tr>
                <td colspan="6" class="align-middle text-center">
                  <h6 class="mb-0">Belum ada riwayat pengajuan</h6>
                </td>
              </tr>
              @endif
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<a href="{{route('layanan')}}" class="btn btn-success btn-icon">
  <span class="btn-inner--icon"><i class="ni ni-bold-left text-white"></i></span>
  <span class="btn-inner--text text-white">Pengajuan Baru</span>
</a>
@endsection
