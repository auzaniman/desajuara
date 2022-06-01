@extends('superuser.layouts.app')

@section('title')
Surat Keterangan Tidak Mampu
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
                Syarat Pembuatan Surat Keterangan Tidak Mampu
              </h5>
              <p class="mb-0 font-weight-bold text-sm">
                Fotokopi KTP & KK
                Pengantar RT & RW
                Upload Foto Rumah (Depan dan Samping)
                Tanda Lunas PBB
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
        <p class="text-uppercase text-sm">Formulir Pembuatan Surat Keterangan Tidak Mampu</p>
        <form method="POST" action="{{route('sktm_post')}}" enctype="multipart/form-data">
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
                @if (($berkas) != null)
                  @if ($berkas->id != null)
                  <input name="berkas_id" id="berkas_id" class="form-control" type="text" value="{{$berkas->id}}" hidden>
                  @else
                  <input name="berkas_id" id="berkas_id" class="form-control" type="text" value="" hidden>
                  @endif
                @else
                <input name="berkas_id" id="berkas_id" class="form-control" type="text" value="" hidden>
                @endif
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
            <div class="col-md-4">
              <div class="form-group">
                <label for="pengantar" class="form-control-label">Surat Pengantar RT & RW</label>
                <input name="pengantar" id="pengantar" class="form-control" type="file" value="">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="foto_rumah_depan" class="form-control-label">Foto Rumah Depan</label>
                <input name="foto_rumah_depan" id="foto_rumah_depan" class="form-control" type="file" value="">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="foto_rumah_samping" class="form-control-label">Foto Rumah Samping</label>
                <input name="foto_rumah_samping" id="foto_rumah_samping" class="form-control" type="file" value="">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="tanda_pbb" class="form-control-label">Tanda Lunas PBB</label>
                <input name="tanda_pbb" id="tanda_pbb" class="form-control" type="file" value="">
              </div>
            </div>
          </div>
          <div class="d-flex align-items-center mt-3">
            <a href="{{route('non_perizinan')}}" class="btn btn-sm btn-warning btn-icon">
              <span class="btn-inner--icon"><i class="ni ni-bold-left text-white"></i></span>
              <span class="btn-inner--text text-white">Kembali</span>
            </a>
            @if (($berkas) != null)
              @if ($berkas->foto_ktp != null && $berkas->foto_kk != null)
                <button type="submit" class="btn btn-primary btn-sm ms-auto">Kirim</button>
              @else
                <button type="submit" class="btn btn-primary btn-sm ms-auto" disabled>Kirim</button>
              @endif
            @else
              <button type="submit" class="btn btn-primary btn-sm ms-auto" disabled>Kirim</button>
            @endif
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
