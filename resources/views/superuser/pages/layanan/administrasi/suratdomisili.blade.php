@extends('superuser.layouts.app')

@section('title')
Profil Akun
@endsection

@section('content')
<main class="main-content position-relative border-radius-lg0">
  @include('superuser.components.topbar')

  <div class="container-fluid py-4">
    {{-- Alert --}}
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif

    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif
    {{-- End Alert --}}

    <div class="row mt-4">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body p-3">
            <div class="row gx-4">
              <div class="col-auto my-auto">
                <div class="h-100">
                  <h5 class="mb-1">
                    Syarat Pembuatan Surat Domisili
                  </h5>
                  <p class="mb-0 font-weight-bold text-sm">
                    KTP
                    KK
                    Pengantar RT & RW
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
            <p class="text-uppercase text-sm">Formulir Pembuatan Surat Domisili</p>
            <form method="POST" action="{{route('post_surdom')}}" enctype="multipart/form-data">
              @csrf
              <div class="row">
                <div class="col-md-2" hidden>
                  <div class="form-group">
                    <label for="user_id" class="form-control-label" hidden>User ID</label>
                    <input name="user_id" id="user_id" class="form-control" type="text" value="{{Auth::user()->id}}" hidden>
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
                    <input name="email_pemohon" id="email_pemohon" class="form-control disabled" type="email" value="{{Auth::user()->email}}">
                  </div>
                </div>
              </div>
              <hr class="horizontal dark">
              <p class="text-uppercase text-sm">Berkas</p>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="bukti_ktp" class="form-control-label">KTP</label>
                    <input name="bukti_ktp" id="bukti_ktp" class="form-control" type="file" value="">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="bukti_kk" class="form-control-label">Kartu Keluarga</label>
                    <input name="bukti_kk" id="bukti_kk" class="form-control" type="file" value="">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="bukti_pengantar" class="form-control-label">Surat Pengantar RT & RW</label>
                    <input name="bukti_pengantar" id="bukti_pengantar" class="form-control" type="file" value="">
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
    @include('superuser.components.footer')
  </div>
</main>
@endsection
