@extends('superuser.layouts.app')

@section('title')
Surat Pengantar Desa
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
                Syarat Pembuatan Surat Pengantar Desa
              </h5>
              <p class="mb-0 font-weight-bold text-sm">
                Fotokopi KTP
                Keperluan
                Tanggal & Tempat Keperluan
              </p>
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
        <p class="text-uppercase text-sm">Formulir Pembuatan Surat Pengantar Desa</p>
        <form method="POST" action="{{route('supengdesa_post')}}" enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="col-md-2" hidden>
              <div class="form-group">
                <label for="user_id" class="form-control-label" hidden>User ID</label>
                <input name="user_id" id="user_id" class="form-control" type="text" value="{{$user->id}}" hidden>
              </div>
            </div>
            <div class="col-md-2" hidden>
              <div class="form-group">
                <label for="berkas_id" class="form-control-label" hidden>Berkas ID</label>
                <input name="berkas_id" id="berkas_id" class="form-control" type="text" value="{{$berkas->id}}" hidden>
              </div>
            </div>
            <div class="col-md-5">
              <div class="form-group">
                <label for="nama_pemohon" class="form-control-label">Nama Pemohon</label>
                <input name="nama_pemohon" id="nama_pemohon" class="form-control" type="text" value="">
              </div>
            </div>
            <div class="col-md-5">
              <div class="form-group">
                <label for="email_pemohon" class="form-control-label">Email Pemohon</label>
                <input name="email_pemohon" id="email_pemohon" class="form-control disabled" type="email" value="{{$user->email}}">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="keperluan" class="form-control-label">Keperluan</label>
                <input name="keperluan" id="keperluan" class="form-control" type="text" value="">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="tanggal_keperluan" class="form-control-label">Tanggal Keperluan</label>
                <input name="tanggal_keperluan" id="tanggal_keperluan" class="form-control" type="text" value="">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="tempat_keperluan" class="form-control-label">Tempat Keperluan</label>
                <input name="tempat_keperluan" id="tempat_keperluan" class="form-control" type="text" value="">
              </div>
            </div>
          </div>
          <hr class="horizontal dark">
          <p class="text-uppercase text-sm">Berkas</p>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="bukti_ktp" class="form-control-label">KTP</label>
                @if (($berkas) != null)
                  @if ($berkas->foto_ktp != null)
                    <div class="ms-1">
                      <i class="ni ni-check-bold text-success text-sm"></i>
                      <span class="ms-1">Sudah Upload Berkas</span>
                    </div>
                  @else
                    <div class="ms-1">
                      <i class="ni ni-fat-remove text-danger text-sm"></i>
                      <span class="ms-1">Belum Upload Berkas</span>
                    </div>
                  @endif
                @else
                  <div class="ms-1">
                    <i class="ni ni-fat-remove text-danger text-sm"></i>
                    <span class="ms-1">Belum Upload Berkas</span>
                  </div>
                @endif
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="bukti_kk" class="form-control-label">Kartu Keluarga</label>
                @if (($berkas) != null)
                  @if ($berkas->foto_kk != null)
                    <div class="ms-1">
                      <i class="ni ni-check-bold text-success text-sm"></i>
                      <span class="ms-1">Sudah Upload Berkas</span>
                    </div>
                  @else
                    <div class="ms-1">
                      <i class="ni ni-fat-remove text-danger text-sm"></i>
                      <span class="ms-1">Belum Upload Berkas</span>
                    </div>
                  @endif
                @else
                  <div class="ms-1">
                    <i class="ni ni-fat-remove text-danger text-sm"></i>
                    <span class="ms-1">Belum Upload Berkas</span>
                  </div>
                @endif
              </div>
            </div>
          </div>
          <div class="d-flex align-items-center mt-3">
            <button type="submit" class="btn btn-primary btn-sm ms-auto">Kirim</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
