@extends('officer.layouts.app')

@section('title')
Setting Website
@endsection

@section('content')
<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">

        {{-- Profile Desa --}}
        <form method="POST" action="{{route('officer.setprofiledesa')}}" enctype="multipart/form-data">
          @csrf
          <p class="text-uppercase text-sm">Profile Desa</p>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="sejarah_kampung" class="form-control-label">Sejarah Kampung</label>
                <textarea name="sejarah_kampung" id="sejarah_kampung" class="form-control" type="text" value=""></textarea>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="video_desa" class="form-control-label">Video Desa</label>
                <input name="video_desa" id="video_desa" class="form-control" type="text" value="" placeholder="https://youtube.com/.....">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="foto_kades" class="form-control-label">Foto Kepala Desa</label>
                <input name="foto_kades" id="foto_kades" class="form-control" type="file" value="">
              </div>
            </div>
          </div>
          <div class="d-flex align-items-center mt-3">
            <button type="submit" class="btn btn-primary btn-sm ms-auto">Kirim</button>
          </div>
        </form>

        {{-- Tantangan Dan Potensi --}}
        <form method="" action="" enctype="multipart/form-data">
          @csrf
          <p class="text-uppercase text-sm">Tantangan Dan Potensi</p>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="tantangan_potensi" class="form-control-label">Kategori</label>
                <select class="form-control @error('tantangan_potensi') is-invalid @enderror" id="tantangan_potensi" name="tantangan_potensi">
                    <option value="Laki-Laki">Tantangan</option>
                    <option value="Perempuan">Potensi</option>
                  </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="desc_tdp" class="form-control-label">Deskripsi</label>
                <input name="desc_tdp" id="desc_tdp" class="form-control" type="text" value="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="gambar_tdp" class="form-control-label">Gambar</label>
                <input name="gambar_tdp" id="gambar_tdp" class="form-control" type="file" value="">
              </div>
            </div>
          </div>
          <div class="d-flex align-items-center mt-3">
            <button type="submit" class="btn btn-primary btn-sm ms-auto">Kirim</button>
          </div>
        </form>

        {{-- Rencana Jangka Menengah --}}

        {{-- Agenda --}}

        {{-- Keuangan --}}

      </div>
    </div>
  </div>
</div>
@endsection
