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
          <form method="POST" action="{{route('berkas_edit', $berkas->id)}}" enctype="multipart/form-data">
            @method('put')
            @csrf
            <p class="text-uppercase text-sm">Edit Berkas Wajib</p>
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
                  <input name="foto_ktp" id="foto_ktp" class="form-control" type="file" value="{{$berkas->foto_ktp}}">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="foto_kk" class="form-control-label">Kartu Keluarga</label>
                  <input name="foto_kk" id="foto_kk" class="form-control" type="file" value="{{$berkas->foto_kk}}">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="foto_diri" class="form-control-label">Foto Diri</label>
                  <input name="foto_diri" id="foto_diri" class="form-control" type="file" value="{{$berkas->foto_diri}}">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="akta_kelahiran" class="form-control-label">Akta Kelahiran</label>
                  <input name="akta_kelahiran" id="akta_kelahiran" class="form-control" type="file" value="{{$berkas->akta_kelahiran}}">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="paspoto" class="form-control-label">Pas Poto 3x4</label>
                  <input name="paspoto" id="paspoto" class="form-control" type="file" value="{{$berkas->paspoto}}">
                </div>
              </div>
            </div>
            <div class="d-flex align-items-center mt-3">
              <button type="submit" class="btn btn-primary btn-sm ms-auto">Edit</button>
            </div>
          </form>
          @else
          <form method="POST" action="{{route('berkas_post')}}" enctype="multipart/form-data">
            @csrf
            <p class="text-uppercase text-sm">Berkas Wajib</p>
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
              <button type="submit" class="btn btn-primary btn-sm ms-auto">Kirim</button>
            </div>
          </form>
          @endif
        @else
        <form method="POST" action="{{route('berkas_post')}}" enctype="multipart/form-data">
          @csrf
          <p class="text-uppercase text-sm">Berkas Wajib</p>
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
            <button type="submit" class="btn btn-primary btn-sm ms-auto">Kirim</button>
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
          @if ($berkas->npwp != null && $berkas->buku_nikah != null)
          <form method="post" action="{{route('berkas_alt_edit', $berkas->id)}}" enctype="multipart/form-data">
            @method('put')
            @csrf
            <p class="text-uppercase text-sm">Edit Berkas (optional)</p>
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="npwp" class="form-control-label">NPWP</label>
                  <input name="npwp" id="npwp" class="form-control" type="file" value="{{$berkas->npwp}}">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="buku_nikah" class="form-control-label">Buku Nikah</label>
                  <input name="buku_nikah" id="buku_nikah" class="form-control" type="file" value="{{$berkas->buku_nikah}}">
                </div>
              </div>
            </div>
            <div class="d-flex align-items-center mt-3">
              <button type="submit" class="btn btn-primary btn-sm ms-auto">Edit</button>
            </div>
          </form>
          @else
          <form method="post" action="{{route('berkas_alt')}}" enctype="multipart/form-data">
            @csrf
            <p class="text-uppercase text-sm">Berkas (optional)</p>
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="npwp" class="form-control-label">NPWP</label>
                  <input name="npwp" id="npwp" class="form-control" type="file" value="">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="buku_nikah" class="form-control-label">Buku Nikah</label>
                  <input name="buku_nikah" id="buku_nikah" class="form-control" type="file" value="">
                </div>
              </div>
            </div>
            <div class="d-flex align-items-center mt-3">
              <button type="submit" class="btn btn-primary btn-sm ms-auto">Kirim</button>
            </div>
          </form>
          @endif
        @else
        <form method="post" action="{{route('berkas_alt')}}" enctype="multipart/form-data">
          @csrf
          <p class="text-uppercase text-sm">Berkas (optional)</p>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="npwp" class="form-control-label">NPWP</label>
                <input name="npwp" id="npwp" class="form-control" type="file" value="">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="buku_nikah" class="form-control-label">Buku Nikah</label>
                <input name="buku_nikah" id="buku_nikah" class="form-control" type="file" value="">
              </div>
            </div>
          </div>
          <div class="d-flex align-items-center mt-3">
            <button type="submit" class="btn btn-primary btn-sm ms-auto">Kirim</button>
          </div>
        </form>
        @endif
      </div>
    </div>
  </div>
</div>
@endsection
