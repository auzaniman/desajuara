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
          <div class="row" hidden>
            <div class="col-md-12">
              <div class="form-group">
                <label for="nama_ajuan" class="form-control-label">Nama Ajuan</label>
                <input name="nama_ajuan" id="nama_ajuan" class="form-control disabled" type="text" value="Surat Keterangan Tidak Mampu">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6" hidden>
              <div class="form-group">
                <label for="foto_kk_pemohon" class="form-control-label" hidden>Berkas KK</label>
                @if (($berkas) != null)
                  @if ($berkas->foto_kk != null)
                  <input name="foto_kk_pemohon" id="foto_kk_pemohon" class="form-control" type="text" value="{{$berkas->foto_kk}}" hidden>
                  @else
                  @endif
                @else
                @endif
              </div>
            </div>
            <div class="col-md-6" hidden>
              <div class="form-group">
                <label for="foto_ktp_pemohon" class="form-control-label" hidden>Berkas KTP</label>
                  @if (($berkas) != null)
                    @if ($berkas->foto_ktp != null)
                    <input name="foto_ktp_pemohon" id="foto_ktp_pemohon" class="form-control" type="text" value="{{$berkas->foto_ktp}}" hidden>
                    @else
                    @endif
                  @else
                  @endif
              </div>
            </div>
          </div>
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
            <div class="col-md-6">
              <div class="form-group">
                <label for="nama_pemohon" class="form-control-label">Nama Pemohon</label>
                <input name="nama_pemohon" id="nama_pemohon" class="form-control" type="text" value="{{$user->name}}">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="email_pemohon" class="form-control-label">Email Pemohon</label>
                <input name="email_pemohon" id="email_pemohon" class="form-control disabled" type="email" value="{{$user->email}}">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="nik_pemohon" class="form-control-label">NIK Pemohon</label>
                <input name="nik_pemohon" id="nik_pemohon" class="form-control disabled" type="text" value="{{Auth::user()->nik}}">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="kk_pemohon" class="form-control-label">No KK Pemohon</label>
                <input name="kk_pemohon" id="kk_pemohon" class="form-control disabled" type="text" value="{{Auth::user()->kk}}">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="alamat_pemohon" class="form-control-label">Alamat Pemohon</label>
                <input name="alamat_pemohon" id="alamat_pemohon" class="form-control disabled" type="text" value="{{Auth::user()->rt_ktp}}, {{Auth::user()->rw_ktp}}, {{$desa->name}}, {{$kecamatan->name}}, {{$kota->name}}, {{$provinsi->name}}">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="hp_pemohon" class="form-control-label">No HP Pemohon</label>
                <input name="hp_pemohon" id="hp_pemohon" class="form-control disabled" type="text" value="{{Auth::user()->no_telpon}}">
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
                <label for="pengantar_rtrw" class="form-control-label">Surat Pengantar RT & RW</label>
                <input name="pengantar_rtrw" id="pengantar_rtrw" class="form-control" type="file" value="">
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
