@extends('superuser.layouts.app')

@section('title')
Riwayat Permohonan
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
        <p class="text-uppercase text-sm">Riwayat Pengajuan Permohonan</p>
        @include('superuser.components.dropdown_ajuan')
        {{-- <div class="col-md-6">
          <div class="form-group">
            <div class="input-group mb-4">
              <span class="input-group-text"><i class="ni ni-zoom-split-in"></i></span>
              <input class="form-control" placeholder="Search" type="text" >
            </div>
          </div>
        </div> --}}
        {{-- <div class="table-responsive">
          <table class="table align-items-center mb-3">
            <thead>
              <tr>
                <th class="text-uppercase px-2 text-secondary text-xxs font-weight-bolder">Nama Pemohon</th>
                <th class="text-uppercase px-2 text-secondary text-xxs font-weight-bolder">Nama Ajuan</th>
                <th class="text-uppercase px-2 text-secondary text-xxs font-weight-bolder">Kategori Ajuan</th>
                <th class="text-uppercase px-2 text-secondary text-xxs font-weight-bolder">Tanggal Pengajuan</th>
                <th class="text-uppercase px-2 text-secondary text-xxs font-weight-bolder">File</th>
                <th class="text-uppercase px-2 text-secondary text-xxs font-weight-bolder">Status</th>
              </tr>
            </thead>
            <tbody>
              @if ($nonperizinan != null)
              @foreach ($nonperizinan as $item)
              <tr>
                <td class="align-middle text-sm">
                  <h6 class="mb-0 text-xs">{{$item->nama_pemohon}}</h6>
                </td>
                <td class="align-middle text-sm">
                  <h6 class="mb-0 text-xs">{{$item->nama_ajuan}}</h6>
                </td>
                <td class="align-middle">
                  <h6 class="mb-0 text-xs">{{$item->kategori}}</h6>
                </td>
                <td class="align-middle">
                  <h6 class="mb-0 text-xs">{{$item->created_at}}</h6>
                </td>
                <td class="align-middle">
                  <a href="{{route('download_sktm')}}" class="btn btn-primary btn-xs text-white mb-0">Download</a>
                </td>
                @if ($item->verifikasi_id == '1')
                <td class="align-middle">
                  <h6 class="mb-0 text-xs"><i class="fas fa-check-circle text-success text-xs" aria-hidden="true"></i> Terverifikasi</h6>
                </td>
                @elseif ($item->verifikasi_id == '2')
                <td class="align-middle">
                  <h6 class="mb-0 text-xs"><i class="fas fa-times-circle text-danger text-xs" aria-hidden="true"></i> Ditolak</h6>
                </td>
                @elseif ($item->verifikasi_id == '3')
                <td class="align-middle">
                  <h6 class="mb-0 text-xs"><i class="fa fa-clock-o text-warning text-xs" aria-hidden="true"></i> Menunggu Proses</h6>
                </td>
                @endif
              </tr>
              @endforeach
              @else
              <tr>
                <td colspan="6" class="align-middle text-center">
                  <h6 class="mb-0">Belum ada riwayat pengajuan</h6>
                </td>
              </tr>
              @endif
            </tbody>
          </table>
        </div> --}}
      </div>
    </div>
  </div>
</div>
<a href="{{route('layanan')}}" class="btn btn-success btn-icon">
  <span class="btn-inner--icon"><i class="ni ni-bold-left text-white"></i></span>
  <span class="btn-inner--text text-white">Pengajuan Baru</span>
</a>
@endsection
