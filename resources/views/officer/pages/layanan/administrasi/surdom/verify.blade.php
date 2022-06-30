@extends('officer.layouts.app')

@section('title')
Detail Pemohon
@endsection

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header pb-0 px-3">
        <h4 class="mb-0">Detail Pemohon Surat Domisili</h4>
      </div>
      <div class="card-body pt-4 p-3">
        <ul class="list-group">
          <li class="list-group-item border-0 p-4 mb-2 bg-gray-100 border-radius-lg">
            <div class="d-flex flex-column mb-3">
              <h5 class="mb-3">{{$surdom->nama_pemohon}}</h5>
              <table class="table align-items-center mb-3 table-borderless">
                <tbody>
                  <tr>
                    <td class="ps-0">
                      <span>NIK<h6>
                    </td>
                    <td>
                      <span class="text-dark ms-sm-2 font-weight-bold">:  {{$surdom->nik_pemohon}}</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="ps-0">
                      <span>No KK<h6>
                    </td>
                    <td>
                      <span class="text-dark ms-sm-2 font-weight-bold">:  {{$surdom->kk_pemohon}}</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="ps-0">
                      <span>Alamat<h6>
                    </td>
                    <td>
                      <span class="text-dark ms-sm-2 font-weight-bold">:  {{$surdom->alamat_pemohon}}</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="ps-0">
                      <span>Email<h6>
                    </td>
                    <td>
                      <span class="text-dark ms-sm-2 font-weight-bold">:  {{$surdom->email_pemohon}}</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="ps-0">
                      <span>No Telpon<h6>
                    </td>
                    <td>
                      <span class="text-dark ms-sm-2 font-weight-bold">:  {{$surdom->hp_pemohon}}</span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <h6 class="mb-3">Berkas</h6>
            <div class="mb-3">
              <img src="{{ asset('storage/'.$surdom->foto_ktp_pemohon)}}" alt="" style="width: 150px" class="img-thumbnail me-3 mb-2">
              <img src="{{ asset('storage/'.$surdom->foto_kk_pemohon)}}" alt="" style="width: 150px" class="img-thumbnail me-3 mb-2">
              <img src="{{ asset('storage/'.$surdom->bukti_pengantar)}}" alt="" style="width: 150px" class="img-thumbnail me-3 mb-2">
            </div>
            @if ($surdom->verifikasi_id = '3')
            <h6 class="mb-3">Verifikasi Permohonan</h6>
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
            @else
            @endif
            <h6 class="mb-3">Upload File</h6>
            <div class="ms-auto text-end mb-3">
              <form action="{{route('officer.update_alt_surdom', $surdom->id)}}" method="POST" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="d-flex">
                  <input name="file_permohonan_surdom" id="file_permohonan_surdom" class="form-control me-3" type="file" value="">
                  <button type="submit" class="btn btn-success mb-0">
                    Upload
                  </button>
                </div>
              </form>
            </div>
            <h6 class="mb-3">Keterangan</h6>
            <div class="ms-auto text-end">
              <form action="{{route('officer.update_keterangan_surdom', $surdom->id)}}" method="POST">
                @method('put')
                @csrf
                <div class="d-flex">
                  <textarea name="keterangan" id="keterangan" class="form-control me-3" type="text" value=""></textarea>
                  <button type="submit" class="btn btn-success mb-0">
                    Kirim
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
<a href="{{route('officer.surdom')}}" class="btn btn-warning btn-icon mt-3">
  <span class="btn-inner--icon"><i class="ni ni-bold-left text-white"></i></span>
  <span class="btn-inner--text text-white">Kembali</span>
</a>
@endsection
