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
                  <input class="form-control @error('username') is-invalid @enderror" id="username" name="username" placeholder="Username" type="text" value="{{old('username')}}">
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
                  <input class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Name" type="text" value="{{old('name')}}">
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
                  <input class="form-control @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir" type="text" value="{{old('tempat_lahir')}}">
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
                  <input class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik" placeholder="NIK" type="text" value="{{old('nik')}}">
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
                  <input class="form-control @error('kk') is-invalid @enderror" id="kk" name="kk" placeholder="No Kartu Keluarga" type="text" value="{{old('kk')}}">
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
                  <select class="form-control @error('jabatan_keluarga') is-invalid @enderror" id="jabatan_keluarga" name="jabatan_keluarga">
                    <option value="">Jabatan Keluarga</option>
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
                  <select class="form-control @error('kelamin') is-invalid @enderror" id="kelamin" name="kelamin">
                    <option value="">Jenis Kelamin<option>
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
                  <select class="form-control @error('pendidikan') is-invalid @enderror" id="pendidikan" name="pendidikan">
                    <option value="">Pendidikan Terakhir<option>
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
                  <input class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" name="jurusan" placeholder="Jurusan" type="text" value="{{old('jurusan')}}">
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
                  <input class="form-control @error('pekerjaan') is-invalid @enderror" id="pekerjaan" name="pekerjaan" placeholder="Pekerjaan" type="text" value="{{old('pekerjaan')}}">
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
                  <select class="form-control @error('agama') is-invalid @enderror" name="agama">
                    <option value="">Pilih Agama<option>
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
                  <select class="form-control @error('perkawinan') is-invalid @enderror" name="perkawinan">
                    <option value="">Status Perkawinan<option>
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
                  <select class="form-control @error('kewarganegaraan') is-invalid @enderror" name="kewarganegaraan">
                    <option value="">Kewarganegaraan<option>
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
              <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                  </div>
                  <select class="form-control @error('status') is-invalid @enderror" name="status" placeholder="status">
                    <option value="">Status Warga Desa<option>
                    <option value="Warga">Warga(KTP Desa)</option>
                    <option value="Bukan Warga">Domisili(KTP Luar Desa)</option>
                  </select>
                  @error('status')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              {{-- Alamat KTP --}}
              <h6>Alamat KTP</h6>
              <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                  </div>
                  <select class="form-control me-3 @error('provinsi_ktp') is-invalid @enderror" id="provinsi" name="provinsi_ktp" placeholder="Provinsi">
                    <option value="">== Pilih Provinsi ==</option>
                    @foreach ($provinces as $id => $name)
                      <option value="{{ $id }}">{{ $name }}</option>
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
                  <select class="form-control me-3 @error('kota_ktp') is-invalid @enderror" id="kabupaten" name="kota_ktp" placeholder="Kota">

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
                  <select class="form-control me-3 @error('kecamatan_ktp') is-invalid @enderror" id="kecamatan" name="kecamatan_ktp" placeholder="Kecamatan">

                  </select>
                  @error('kecamatan_ktp')
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
                  <select class="form-control me-3 @error('desa_ktp') is-invalid @enderror" id="desa" name="desa_ktp" placeholder="Desa">

                  </select>
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
                    <option value="">== Pilih RT ==</option>
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
                    <option value="">== Pilih RW ==</option>
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
              {{-- Alamat KTP Domisili --}}
              <h6>Alamat Domisili</h6>
              <div class="custom-control custom-checkbox mb-3">
                <input class="custom-control-input" onclick="document.getElementById('sembunyikan').hidden=this.checked;" id="customCheck1" type="checkbox">
                <label class="custom-control-label" for="customCheck1">Alamat Domisili sama dengan Alamat KTP</label>
              </div>
              <div id="sembunyikan">
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                    </div>
                    <select class="form-control me-3 @error('provinsi_domisili') is-invalid @enderror" id="1provinsi" name="provinsi_domisili">
                      <option value="">== Pilih Provinsi ==</option>
                      @foreach ($provinces as $id => $name)
                        <option value="{{ $id }}">{{ $name }}</option>
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
                    <select class="form-control me-3 @error('kota_domisili') is-invalid @enderror" id="1kabupaten" name="kota_domisili">
                      <option value="">== Pilih Kota ==</option>
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
                    <select class="form-control me-3 @error('kecamatan_domisili') is-invalid @enderror" id="1kecamatan" name="kecamatan_domisili">
                      <option value="">== Pilih Kecamatan ==</option>
                    </select>
                    @error('kecamatan_domisili')
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
                    <select class="form-control me-3 @error('desa_domisili') is-invalid @enderror" id="1desa" name="desa_domisili">
                      <option value="">== Pilih Desa ==</option>
                    </select>
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
                    <select class="form-control @error('rt_domisili') is-invalid @enderror" id="rt_domisili" name="rt_domisili">
                      <option value="">== Pilih RT ==</option>
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
                    <select class="form-control @error('rw_domisili') is-invalid @enderror" id="rw_domisili" name="rw_domisili">
                      <option value="">== Pilih RW ==</option>
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
              </div>
              <h6>Kontak</h6>
              <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                  </div>
                  <input class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email" type="email" value="{{old('email')}}">
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
                  <input class="form-control @error('no_telpon') is-invalid @enderror" id="no_telpon" name="no_telpon" placeholder="No Telpon" type="text" value="{{old('no_telpon')}}">
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
                  <input class="form-control @error('no_wa') is-invalid @enderror" id="no_wa" name="no_wa" placeholder="No Whatsapp" type="text" value="{{old('no_wa')}}">
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
