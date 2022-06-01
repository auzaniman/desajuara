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
  <div class="col-md-12 mt-4">
    <div class="card">
      <div class="card-header pb-0 px-3">
        <h6 class="mb-0">Detail Pemohon</h6>
      </div>
      <div class="card-body pt-4 p-3">
        <ul class="list-group">
          <li class="list-group-item border-0 p-4 mb-2 bg-gray-100 border-radius-lg">
            <div class="d-flex flex-column mb-3">
              <h6 class="mb-3">{{$surdom->nama_pemohon}}</h6>
              <span class="mb-2">NIK: <span class="text-dark ms-sm-2 font-weight-bold">{{$user->nik}}</span></span>
              <span class="mb-2">No KK: <span class="text-dark ms-sm-2 font-weight-bold">{{$user->kk}}</span></span>
              <span class="mb-2">Email Address: <span class="text-dark ms-sm-2 font-weight-bold">{{$surdom->email_pemohon}}</span></span>
              <span class="mb-2">No Telpon: <span class="text-dark ms-sm-2 font-weight-bold">{{$user->no_telpon}}</span></span>
            </div>
            <h6 class="mb-3">Berkas</h6>
            <div class="mb-3">
              <img src="{{ asset('storage/'.$berkas->foto_ktp)}}" alt="" style="width: 150px" class="img-thumbnail me-3">
              <img src="{{ asset('storage/'.$berkas->foto_kk)}}" alt="" style="width: 150px" class="img-thumbnail me-3">
              <img src="{{ asset('storage/'.$surdom->bukti_pengantar)}}" alt="" style="width: 150px" class="img-thumbnail me-3">
            </div>
            <h6 class="mb-3">Verifikasi Pengajuan Pemohon</h6>
            <div class="ms-auto text-end mb-3">
              <form action="{{route('officer.update_surdom', $surdom->id)}}" method="POST" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="d-flex">
                  <select class="form-control me-3 @error('verifikasi_id') is-invalid @enderror" id="verifikasi_id" name="verifikasi_id">
                    <option data-display="STATUS">-</option>
                    @foreach ($verifikasi as $verifi)
                    <option value="{{ $verifi->id }}">
                    {{ $verifi->status_verifikasi }}
                    </option>
                    @endforeach
                  </select>
                  <button type="submit" class="btn btn-success mb-0">
                    Verifikasi
                  </button>
                </div>
              </form>
            </div>
            <h6 class="mb-3">Upload File</h6>
            <div class="ms-auto text-end">
              <form action="{{route('officer.update_surdom', $surdom->id)}}" method="POST" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="d-flex">
                  <input name="file_surdom" id="file_surdom" class="form-control me-3" type="file" value="">
                  <button type="submit" class="btn btn-success mb-0">
                    Upload
                  </button>
                </div>
              </form>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
@endsection
