@extends('home.layouts.app')

@section('content')
<section class="section section-shaped section-lg">
  <div class="shape shape-style-1 bg-gradient-default">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-5">
        <div class="card bg-secondary shadow border-0">
          <div class="card-body px-lg-5 py-lg-5">
            <div class="text-center text-muted mb-4">
              <h3>{{ __('Register') }}</h3>
            </div>
            <form role="form" action="{{ route('register') }}" method="post">
              @csrf
              <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                  </div>
                  <input class="form-control @error('username') is-invalid @enderror" id="username" name="username" placeholder="Username" type="text">
                  @error('username')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <h6>Biodata</h6>
              <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                  </div>
                  <input class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Name" type="text">
                  @error('name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                  </div>
                  <input class="form-control @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir" type="text">
                  @error('tempat_lahir')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                  </div>
                  <input class="form-control datepicker @error('tanggal_lahir') is-invalid @enderror" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir" type="text">
                  @error('tanggal_lahir')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                  </div>
                  <input class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik" placeholder="NIK" type="text">
                  @error('nik')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                  </div>
                  <input class="form-control @error('kk') is-invalid @enderror" id="kk" name="kk" placeholder="No Kartu Keluarga" type="text">
                  @error('kk')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
               <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                  </div>
                  <select class="form-control @error('jabatan_keluarga') is-invalid @enderror" id="jabatan_keluarga" name="Status Dalam KK" placeholder="jabatan_keluarga">
                    <option value="Kepala Keluarga">Kepala Keluarga</option>
                    <option value="Suami">Suami</option>
                    <option value="Istri">Istri</option>
                    <option value="Anak Kandung">Anak Kandung</option>
                    <option value="Anak Tiri">Anak Tiri</option>
                  </select>
                  @error('Status Keluarga')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                  </div>
                  <select class="form-control @error('kelamin') is-invalid @enderror" id="kelamin" name="kelamin" placeholder="Jenis Kelamin">
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                  @error('kelamin')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                  </div>
                  <select class="form-control @error('pendidikan') is-invalid @enderror" id="pendidikan" name="pendidikan" placeholder="Pendidikan">
                    <option value="SD">SD</option>
                    <option value="SMP">SMP</option>
                    <option value="SMA">SMA</option>
                    <option value="D1">D1</option>
                    <option value="D2">D2</option>
                    <option value="D3">D3</option>
                    <option value="D4">D4</option>
                    <option value="S1">S1</option>
                    <option value="S2">S2</option>
                    <option value="S3">S3</option>
                  </select>
                  @error('pendidikan')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                  </div>
                  <input class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" name="jurusan" placeholder="Jurusan" type="text">
                  @error('jurusan')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                  </div>
                  <input class="form-control @error('pekerjaan') is-invalid @enderror" id="pekerjaan" name="pekerjaan" placeholder="Pekerjaan" type="text">
                  @error('pekerjaan')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                  </div>
                  <select class="form-control @error('agama') is-invalid @enderror" name="agama" placeholder="Agama">
                    <option value="Islam">Islam</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                  </select>
                  @error('agama')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                  </div>
                  <select class="form-control @error('perkawinan') is-invalid @enderror" name="perkawinan" placeholder="Perkawinan">
                    <option value="BelumMenikah">Belum Menikah</option>
                    <option value="Menikah">Menikah</option>
                    <option value="PernahMenikah">Pernah Menikah</option>
                  </select>
                  @error('perkawinan')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                  </div>
                  <select class="form-control @error('kewarganegaraan') is-invalid @enderror" name="kewarganegaraan" placeholder="Kewarganegaraan">
                    <option value="WNI">WNI</option>
                    <option value="WNA">WNA</option>
                  </select>
                  @error('kewarganegaraan')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              {{-- Alamat KTP --}}
              <h6>Alamat KTP</h6>
              {{-- <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                  </div>
                  <input class="form-control @error('desa_ktp') is-invalid @enderror" id="desa_ktp" name="desa_ktp" placeholder="Tulis Nama Desa Anda Tinggal" type="text">
                  @error('desa_ktp')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                  </div>
                  <input class="form-control @error('rt_ktp') is-invalid @enderror" id="rt_ktp" name="rt_ktp" placeholder="RT" type="text">
                  @error('rt_ktp')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                  </div>
                  <input class="form-control @error('rw_ktp') is-invalid @enderror" id="rw_ktp" name="rw_ktp" placeholder="RW" type="text">
                  @error('rw_ktp')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                  </div>
                  <input class="form-control @error('provinsi_ktp') is-invalid @enderror" id="provinsi_ktp" name="provinsi_ktp" placeholder="Provinsi" type="text">
                  <select class="form-control me-3 @error('provinsi_ktp') is-invalid @enderror" id="provinsi_ktp" name="provinsi_ktp" placeholder="Provinsi">
                    <option data-display="STATUS">-</option>
                    @foreach ($provinsi as $item)
                    <option value="{{ $item->id }}">
                    {{ $item->nama_provinsi }}
                    </option>
                    @endforeach
                  </select>
                  @error('provinsi_ktp')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                  </div>
                  <input class="form-control @error('kota_ktp') is-invalid @enderror" id="kota_ktp" name="kota_ktp" placeholder="Kota" type="text">
                  @error('kota_ktp')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                  </div>
                  <input class="form-control @error('kecamatan_ktp') is-invalid @enderror" id="kecamatan_ktp" name="kecamatan_ktp" placeholder="Kecamatan" type="text">
                  @error('kecamatan_ktp')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div> --}}

              {{-- UJI COBA --}}
              <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                  </div>
                  <input class="form-control @error('desa_ktp') is-invalid @enderror" id="desa_ktp" name="desa_ktp" placeholder="Tulis Nama Desa Anda Tinggal" type="text">
                  @error('desa_ktp')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                  </div>
                  <select class="form-control @error('rt_ktp') is-invalid @enderror" id="rt_ktp" name="rt_ktp" placeholder="RT">
                    <option data-display="RT">-</option>
                    <option value="RT1">RT1</option>
                    <option value="RT2">RT2</option>
                    <option value="RT3">RT3</option>
                    <option value="RT4">RT4</option>
                  </select>
                  @error('rt_ktp')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                  </div>
                  <select class="form-control @error('rw_ktp') is-invalid @enderror" id="rw_ktp" name="rw_ktp" placeholder="RW">
                    <option data-display="RW">-</option>
                    <option value="RW1">RW1</option>
                    <option value="RW2">RW2</option>
                    <option value="RW3">RW3</option>
                    <option value="RW4">RW4</option>
                  </select>
                  @error('rw_ktp')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                  </div>
                  <select class="form-control me-3 @error('provinsi_ktp') is-invalid @enderror" id="provinsi_ktp" name="provinsi_ktp" placeholder="Provinsi">
                    <option data-display="STATUS">-</option>
                    @foreach ($provinsi as $item)
                    <option value="{{ $item->id }}">
                    {{ $item->nama_provinsi }}
                    </option>
                    @endforeach
                  </select>
                  @error('provinsi_ktp')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                  </div>
                  <select class="form-control me-3 @error('kota_ktp') is-invalid @enderror" id="kota_ktp" name="kota_ktp" placeholder="Kota">
                    <option data-display="STATUS">-</option>
                    @foreach ($kota as $item)
                    <option value="{{ $item->id }}">
                    {{ $item->nama_kota }}
                    </option>
                    @endforeach
                  </select>
                  @error('kota_ktp')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                  </div>
                  <select class="form-control me-3 @error('kecamatan_ktp') is-invalid @enderror" id="kecamatan_ktp" name="kecamatan_ktp" placeholder="Kecamatan">
                    <option data-display="STATUS">-</option>
                    @foreach ($kecamatan as $item)
                    <option value="{{ $item->id }}">
                    {{ $item->nama_kecamatan }}
                    </option>
                    @endforeach
                  </select>
                  @error('kecamatan_ktp')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              {{-- Alamat Domisili--}}
              <h6>Alamat Domisili</h6>
              <div class="custom-control custom-checkbox mb-3">
                <input class="custom-control-input" onclick="document.getElementById('sembunyikan').hidden=this.checked;" id="customCheck1" type="checkbox">
                <label class="custom-control-label" for="customCheck1">Alamat Domisili sama dengan Alamat KTP</label>
              </div>
              <div id="sembunyikan">
                {{-- <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                    </div>
                    <input class="form-control @error('desa_domisili') is-invalid @enderror" id="desa_domisili" name="desa_domisili" placeholder="Desa" type="text">
                    @error('desa_domisili')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                    </div>
                    <input class="form-control @error('rt_domisili') is-invalid @enderror" id="rt_domisili" name="rt_domisili" placeholder="RT" type="text">
                    @error('rt_domisili')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                    </div>
                    <input class="form-control @error('rw_domisili') is-invalid @enderror" id="rw_domisili" name="rw_domisili" placeholder="RW" type="text">
                    @error('rw_domisili')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                    </div>
                    <input class="form-control @error('provinsi_domisili') is-invalid @enderror" id="provinsi_domisili" name="provinsi_domisili" placeholder="Provinsi" type="text">
                    @error('provinsi_domisili')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                    </div>
                    <input class="form-control @error('kota_domisili') is-invalid @enderror" id="kota_domisili" name="kota_domisili" placeholder="Kota" type="text">
                    @error('kota_domisili')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                    </div>
                    <input class="form-control @error('kecamatan_domisili') is-invalid @enderror" id="kecamatan_domisili" name="kecamatan_domisili" placeholder="Kecamatan" type="text">
                    @error('kecamatan_domisili')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                </div> --}}

                {{-- UJI COBA --}}
                <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                  </div>
                  <input class="form-control @error('desa_domisili') is-invalid @enderror" id="desa_domisili" name="desa_domisili" placeholder="Tulis Nama Desa Anda Tinggal" type="text">
                  @error('desa_domisili')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                  </div>
                  <select class="form-control @error('rt_domisili') is-invalid @enderror" id="rt_domisili" name="rt_domisili" placeholder="RT">
                    <option data-display="RT">-</option>
                    <option value="RT1">RT1</option>
                    <option value="RT2">RT2</option>
                    <option value="RT3">RT3</option>
                    <option value="RT4">RT4</option>
                  </select>
                  @error('rt_domisili')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                  </div>
                  <select class="form-control @error('rw_domisili') is-invalid @enderror" id="rw_domisili" name="rw_domisili" placeholder="RW">
                    <option data-display="RW">-</option>
                    <option value="RW1">RW1</option>
                    <option value="RW2">RW2</option>
                    <option value="RW3">RW3</option>
                    <option value="RW4">RW4</option>
                  </select>
                  @error('rw_domisili')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                  </div>
                  <select class="form-control me-3 @error('provinsi_domisili') is-invalid @enderror" id="provinsi_domisili" name="provinsi_domisili" placeholder="Provinsi">
                    <option data-display="STATUS">-</option>
                    @foreach ($provinsi as $item)
                    <option value="{{ $item->id }}">
                    {{ $item->nama_provinsi }}
                    </option>
                    @endforeach
                  </select>
                  @error('provinsi_domisili')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                  </div>
                  <select class="form-control me-3 @error('kota_domisili') is-invalid @enderror" id="kota_domisili" name="kota_domisili" placeholder="Kota">
                    <option data-display="STATUS">-</option>
                    @foreach ($kota as $item)
                    <option value="{{ $item->id }}">
                    {{ $item->nama_kota }}
                    </option>
                    @endforeach
                  </select>
                  @error('kota_domisili')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                  </div>
                  <select class="form-control me-3 @error('kecamatan_domisili') is-invalid @enderror" id="kecamatan_domisili" name="kecamatan_domisili" placeholder="Kecamatan">
                    <option data-display="STATUS">-</option>
                    @foreach ($kecamatan as $item)
                    <option value="{{ $item->id }}">
                    {{ $item->nama_kecamatan }}
                    </option>
                    @endforeach
                  </select>
                  @error('kecamatan_domisili')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              </div>
              <h6>Kontak</h6>
              <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                  </div>
                  <input class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email" type="email">
                  @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                  </div>
                  <input class="form-control @error('no_telpon') is-invalid @enderror" id="no_telpon" name="no_telpon" placeholder="No Telpon" type="text">
                  @error('no_telpon')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                  </div>
                  <input class="form-control @error('no_wa') is-invalid @enderror" id="no_wa" name="no_wa" placeholder="No Whatsapp" type="text">
                  @error('no_wa')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <h6>Password</h6>
              <div class="form-group focused">
                <div class="input-group input-group-alternative">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                  </div>
                  <input class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" type="password">
                  @error('password')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              {{-- <div class="text-muted font-italic"><small>password strength: <span class="text-success font-weight-700">strong</span></small></div> --}}
              <div class="text-center">
                <button type="submit" class="btn btn-primary mt-4">{{ __('Register') }}</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection


