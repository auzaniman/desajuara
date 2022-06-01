@extends('officer.layouts.app')

@section('title')
Profil Akun
@endsection

@section('content')
<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body p-3">
        <div class="row gx-4">
          <div class="col-auto my-auto">
            <div class="h-100">
              <h5 class="mb-1">
                Data Pemohon Surat Domisili
              </h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row mt-4">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <p class="text-uppercase text-sm">Table Data</p>
        <div class="table-responsive">
          @forelse ($surdom as $item)
          <table class="table align-items-center mb-3">
            <thead>
              <tr>
                <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder">Nama Pemohon</th>
                <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder">Email Pemohon</th>
                <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder">Berkas</th>
                {{-- <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder">Berkas KTP</th>
                <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder">Berkas KK</th>
                <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder">Berkas Pengantar</th> --}}
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="align-middle text-center text-sm">
                  <h6 class="mb-0 text-xs">{{$item->nama_pemohon}}</h6>
                </td>
                <td class="align-middle text-center text-sm">
                  <h6 class="mb-0 text-xs">{{$item->email_pemohon}}</h6>
                </td>
                @foreach ($berkas as $berkass)
                @if ($berkass != null)
                <td class="align-middle text-center text-sm">
                  <h6 class="mb-0 text-xs"><i class="fas fa-check-circle text-success text-sm" aria-hidden="true"></i> Lengkap</h6>
                </td>
                @else
                <td class="align-middle text-center text-sm">
                  <h6 class="mb-0 text-xs">Tidak Lengkap</h6>
                </td>
                @endif
                @endforeach
                {{-- <td class="align-middle text-center">
                  <img src="{{ asset('storage/'.$berkass->foto_ktp)}}" alt="" style="width: 150px" class="img-thumbnail">
                </td>
                <td class="align-middle text-center">
                  <img src="{{ asset('storage/'.$berkass->foto_kk)}}" alt="" style="width: 150px" class="img-thumbnail">
                </td> --}}
                {{-- <td class="align-middle text-center">
                  <img src="{{ asset('storage/'.$item->bukti_pengantar)}}" alt="" style="width: 150px" class="img-thumbnail">
                </td> --}}
                <td class="align-middle text-center">
                  <a href="{{route('officer.show_surdom', $item->id)}}" class="btn btn-sm btn-success text-xs mb-0" data-toggle="tooltip" data-original-title="Edit user">
                    Verifikasi
                  </a>
                </td>
              </tr>
            </tbody>
          </table>
          @empty

          @endforelse
        </div>
      </div>
    </div>
  </div>
</div>
@endsection