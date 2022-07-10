@extends('officer.layouts.app')

@section('title')
Detail Pemohon
@endsection

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header pb-0 px-3">
        <h4 class="mb-0">Detail Pemohon Surat Keterangan Usaha</h4>
      </div>
      <div class="card-body pt-4 p-3">
        <ul class="list-group">
          <li class="list-group-item border-0 p-4 mb-2 bg-gray-100 border-radius-lg">
            <div class="table-responsive mb-4">
              <h5 class="mb-3">{{$suketusaha->nama_pemohon}}</h5>
              <table class="table align-items-center mb-3 table-borderless">
                <tbody>
                  <tr>
                    <td class="ps-0 col-1">
                      <span>NIK</span>
                    </td>
                    <td>
                      <span class="text-dark ms-sm-2 font-weight-bold">:  {{$suketusaha->nik_pemohon}}</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="ps-0">
                      <span>No KK</span>
                    </td>
                    <td>
                      <span class="text-dark ms-sm-2 font-weight-bold">:  {{$suketusaha->kk_pemohon}}</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="ps-0">
                      <span>Alamat</span>
                    </td>
                    <td>
                      <span class="text-dark ms-sm-2 font-weight-bold">:  {{$suketusaha->alamat_pemohon}}</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="ps-0">
                      <span>Email</span>
                    </td>
                    <td>
                      <span class="text-dark ms-sm-2 font-weight-bold">:  {{$suketusaha->email_pemohon}}</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="ps-0">
                      <span>No Telpon</span>
                    </td>
                    <td>
                      <span class="text-dark ms-sm-2 font-weight-bold">:  {{$suketusaha->hp_pemohon}}</span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <h5 class="mb-3">Profile Usaha</h5>
            <div class="table-responsive mb-4">
              <table class="table align-items-center mb-3 table-borderless">
                <tbody>
                  <tr>
                    <td class="ps-0 col-1">
                      <span>Bidang Usaha</span>
                    </td>
                    <td>
                      <span class="text-dark ms-sm-2 font-weight-bold">:  {{$suketusaha->bidang_usaha}}</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="ps-0">
                      <span>Nama Usaha</span>
                    </td>
                    <td>
                      <span class="text-dark ms-sm-2 font-weight-bold">:  {{$suketusaha->nama_usaha}}</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="ps-0">
                      <span>Alamat Usaha</span>
                    </td>
                    <td>
                      <span class="text-dark ms-sm-2 font-weight-bold">:  {{$suketusaha->alamat_usaha}}</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="ps-0">
                      <span>Tahun Memulai</span>
                    </td>
                    <td>
                      <span class="text-dark ms-sm-2 font-weight-bold">:  {{$suketusaha->tahun_memulai}}</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="ps-0">
                      <span>Jumlah Karyawan</span>
                    </td>
                    <td>
                      <span class="text-dark ms-sm-2 font-weight-bold">:  {{$suketusaha->jumlah_karyawan}}</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="ps-0">
                      <span>Omzet</span>
                    </td>
                    <td>
                      <span class="text-dark ms-sm-2 font-weight-bold">:  {{$suketusaha->omzet}}</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="ps-0">
                      <span>Aset</span>
                    </td>
                    <td>
                      <span class="text-dark ms-sm-2 font-weight-bold">:  {{$suketusaha->aset}}</span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <h5 class="mb-3">Berkas</h5>
            <div class="mb-3">
              <img src="{{ asset('storage/'.$suketusaha->foto_ktp_pemohon)}}" alt="" style="width: 150px" class="img-thumbnail me-3 mb-2">
              <img src="{{ asset('storage/'.$suketusaha->foto_kk_pemohon)}}" alt="" style="width: 150px" class="img-thumbnail me-3 mb-2">
              <img src="{{ asset('storage/'.$suketusaha->bukti_pengantar)}}" alt="" style="width: 150px" class="img-thumbnail me-3 mb-2">
            </div>
            @if ($suketusaha->verifikasi_id = '3')
            <h5 class="mb-3">Verifikasi Permohonan</h5>
            <div class="ms-auto text-end mb-3">
              <form action="{{route('officer.update_suketusaha', $suketusaha->id)}}" method="POST" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="d-flex">
                  <select class="form-control me-3 @error('verifikasi') is-invalid @enderror" id="verifikasi" name="verifikasi">
                    <option data-display="STATUS">-</option>
                    <option value="DITERIMA">DITERIMA</option>
                    <option value="DITOLAK">DITOLAK</option>
                    <option value="DIPROSES">DIPROSES</option>
                  </select>
                  <button type="submit" class="btn btn-success mb-0">
                    Verifikasi
                  </button>
                </div>
              </form>
            </div>
            @else
            @endif
            <h5 class="mb-3">Upload File</h5>
            <div class="ms-auto text-end mb-3">
              <form action="{{route('officer.update_alt_suketusaha', $suketusaha->id)}}" method="POST" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="d-flex">
                  <input name="file_permohonan_suketusaha" id="file_permohonan_suketusaha" class="form-control me-3" type="file" value="">
                  <button type="submit" class="btn btn-success mb-0">
                    Upload
                  </button>
                </div>
              </form>
            </div>
            <h5 class="mb-3">Keterangan</h5>
            <div class="ms-auto text-end">
              <form action="{{route('officer.update_keterangan_suketusaha', $suketusaha->id)}}" method="POST">
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
<a href="{{route('officer.suketusaha')}}" class="btn btn-warning btn-icon mt-3">
  <span class="btn-inner--icon"><i class="ni ni-bold-left text-white"></i></span>
  <span class="btn-inner--text text-white">Kembali</span>
</a>
@endsection
