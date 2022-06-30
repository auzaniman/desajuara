@extends('superuser.layouts.app')

@section('title')
Berkas
@endsection

@section('content')
<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        @if (($berkas) != null)
          @if ($berkas->foto_ktp != null && $berkas->foto_kk != null && $berkas->akta_kelahiran != null && $berkas->paspoto != null && $berkas->foto_diri != null)
            <p class="text-uppercase text-sm mb-0">Hapus Berkas Wajib</p>
            <h6 class="text-uppercase text-xs text-success"><i class="fas fa-check-circle text-success text-xs" aria-hidden="true"></i> Berkas Wajib berhasil tersimpan silahkan cek koleksi berkas diprofile anda</h6>
            <h6 class="text-uppercase text-xs text-danger"><i class="fas fa-exclamation-circle text-danger text-xs" aria-hidden="true"></i> Menghapus seluruh berkas yang di upload</h6>
            <div class="col-md-3 mt-3">
              <button type="button" data-bs-toggle="modal" data-bs-target="#modal-notification" class="btn btn-danger btn-sm ms-auto mb-0">Hapus</button>
            </div>

            {{-- Modal Delete --}}
            <div class="modal fade" id="modal-notification" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
              <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
                <div class="modal-content">
                  <div class="modal-body">
                    <div class="py-3 text-center">
                      <i class="ni ni-fat-remove text-danger ni-3x"></i>
                      <h4 class="text-gradient text-danger mt-4">Anda yakin ingin menghapus berkas?</h4>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <form action="{{route('berkas_delete', $berkas->id)}}" method="POST">
                      @method('delete')
                      @csrf
                      <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                    <button type="button" class="btn btn-link text-primary ml-auto" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          @else
          @endif
        @else
        <form method="POST" action="{{route('berkas_post')}}" enctype="multipart/form-data">
          @csrf
          <p class="text-uppercase text-sm mb-0">Berkas Wajib</p>
          <h6 class="text-uppercase text-xs text-warning"><i class="fas fa-exclamation-circle text-warning text-xs" aria-hidden="true"></i> File Berkas Maksimal 3MB!</h6>
          <h6 class="text-uppercase text-xs text-danger"><i class="fas fa-exclamation-circle text-danger text-xs" aria-hidden="true"></i> Mohon diperhatikan file yang hendak di upload! Jika ada kesalahan file perlu di hapus keseluruhan untuk mengubahnya</h6>
          <div class="row">
            <div class="col-md-4" hidden>
              <div class="form-group">
                <label for="user_id" class="form-control-label">User ID</label>
                <input name="user_id" id="user_id" class="form-control" type="text" value="{{$user->id}}">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="foto_ktp" class="form-control-label">KTP</label>
                <input name="foto_ktp" id="foto_ktp" class="form-control" type="file" value="">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="foto_kk" class="form-control-label">Kartu Keluarga</label>
                <input name="foto_kk" id="foto_kk" class="form-control" type="file" value="">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="foto_diri" class="form-control-label">Foto Diri</label>
                <input name="foto_diri" id="foto_diri" class="form-control" type="file" value="">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="akta_kelahiran" class="form-control-label">Akta Kelahiran</label>
                <input name="akta_kelahiran" id="akta_kelahiran" class="form-control" type="file" value="">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="paspoto" class="form-control-label">Pas Poto 3x4</label>
                <input name="paspoto" id="paspoto" class="form-control" type="file" value="">
              </div>
            </div>
          </div>
          <div class="d-flex align-items-center mt-3">
            <button type="submit" class="btn btn-primary btn-sm">Kirim</button>
          </div>
        </form>
        @endif

      </div>
    </div>
  </div>
  <div class="col-lg-12 mt-4">
    <div class="card">
      <div class="card-body">
        @if (($berkas) != null)
          @if ($berkas->foto_ktp != null && $berkas->foto_kk != null && $berkas->akta_kelahiran != null && $berkas->paspoto != null && $berkas->foto_diri != null)
          <p class="text-uppercase text-sm mb-0">Tambah Berkas (optional)</p>
          <h6 class="text-uppercase text-xs text-warning"><i class="fas fa-exclamation-circle text-warning text-xs" aria-hidden="true"></i> File Berkas Maksimal 3MB!</h6>
          <h6 class="text-uppercase text-xs text-danger"><i class="fas fa-exclamation-circle text-danger text-xs" aria-hidden="true"></i> Mohon diperhatikan file yang hendak di upload! Jika ada kesalahan file perlu di hapus keseluruhan untuk mengubahnya</h6>
          <div class="row">
            <div class="col-md-6">
              <form method="post" action="{{route('berkas_npwp')}}" enctype="multipart/form-data">
                @csrf
                  <div class="form-group">
                    <label for="npwp" class="form-control-label">NPWP</label>
                    <input name="npwp" id="npwp" class="form-control" type="file" value="{{$berkas->npwp}}">
                  </div>
                <div class="d-flex align-items-center mt-3">
                  <button type="submit" class="btn btn-primary btn-sm">Tambah</button>
                </div>
              </form>
            </div>
            <div class="col-md-6">
              <form method="post" action="{{route('berkas_bukunikah')}}" enctype="multipart/form-data">
                @csrf
                  <div class="form-group">
                    <label for="buku_nikah" class="form-control-label">Buku Nikah</label>
                    <input name="buku_nikah" id="buku_nikah" class="form-control" type="file" value="{{$berkas->buku_nikah}}">
                  </div>
                <div class="d-flex align-items-center mt-3">
                  <button type="submit" class="btn btn-primary btn-sm">Tambah</button>
                </div>
              </form>
            </div>
          </div>
          @else
          @endif
        @else
        <p class="text-uppercase text-sm mb-0">Tambah Berkas (optional)</p>
        <h6 class="text-uppercase text-xs text-warning"><i class="fas fa-exclamation-circle text-warning text-xs" aria-hidden="true"></i> Silahkan mengirimkan berkas wajib terdahulu untuk menambahkan berkas tambahan</h6>
        @endif
      </div>
    </div>
  </div>
</div>
@endsection
