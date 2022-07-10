@extends('superuser.layouts.app')

@section('title')
Profil Akun
@endsection

@section('content')
<div class="row">
  <div class="col-lg-12 mb-lg-0 mb-4">
    <div class="card card-background">
      <div class="full-background" style="background-image: url('/frontend/assets/img/2.jpg')"></div>
      <div class="card-body text-left">
        <h4 class="text-white">Selamat Datang di Desa Warungboto</h4>
        <p class=" text-white bold">Awali harimu dengan senyum. Selamat melakukan aktifitas warga desa warungboto. Kami melayani sepenuh hati.</p>
      </div>
    </div>
  </div>
</div>
<div class="row mt-4">
  <div class="col-lg-12">
    {{-- Avatar --}}
    @include('superuser.components.avatar_profile')
    {{-- End Avatar --}}
  </div>
</div>
<div class="row mt-4 flex-lg-row flex-column-reverse">
  {{-- Detail Profile --}}
  <div class="col-md-8 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body">
        <p class="text-uppercase text-sm">Edit Detail Akun</p>
        <form action="{{route('profile_edit', $user->id)}}" method="POST">
          @method('put')
          @csrf
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="username" class="form-control-label">Username</label>
                <input id="username" name="username" class="form-control" type="text" value="{{$user->username}}">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="name" class="form-control-label">Nama</label>
                <input id="name" name="name" class="form-control" type="text" value="{{$user->name}}">
              </div>
            </div>
          </div>
          <hr class="horizontal dark">
          <p class="text-uppercase text-sm">Nomor Kependudukan</p>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="nik" class="form-control-label">NIK</label>
                <input id="nik" name="nik" class="form-control" type="text" value="{{$user->nik}}">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="kk" class="form-control-label">No KK</label>
                <input id="kk" name="kk" class="form-control" type="text" value="{{$user->kk}}">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="npwp" class="form-control-label">No NPWP</label>
                <input id="npwp" name="npwp" class="form-control" type="text" value="{{$user->npwp}}">
              </div>
            </div>
          </div>

          <hr class="horizontal dark">
          <p class="text-uppercase text-sm">Biodata</p>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="tempat_lahir" class="form-control-label">Tempat Lahir</label>
                <input id="tempat_lahir" name="tempat_lahir" class="form-control" type="text" value="{{$user->tempat_lahir}}">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="tanggal_lahir" class="form-control-label">Tanggal Lahir</label>
                <input id="tanggal_lahir" name="tanggal_lahir" class="form-control" type="text" value="{{$user->tanggal_lahir}}">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="kelamin" class="form-control-label">Jenis Kelamin</label>
                <input id="kelamin" name="kelamin" class="form-control" type="text" value="{{$user->kelamin}}">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="agama" class="form-control-label">Agama</label>
                <input id="agama" name="agama" class="form-control" type="text" value="{{$user->agama}}">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="perkawinan" class="form-control-label">Status Perkawinan</label>
                <input id="perkawinan" name="perkawinan" class="form-control" type="text" value="{{$user->perkawinan}}">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="kewarganegaraan" class="form-control-label">Kewarganegaraan</label>
                <input id="kewarganegaraan" name="kewarganegaraan" class="form-control" type="text" value="{{$user->kewarganegaraan}}">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="pekerjaan" class="form-control-label">Pekerjaan</label>
                <input id="pekerjaan" name="pekerjaan" class="form-control" type="text" value="{{$user->pekerjaan}}">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="pendidikan" class="form-control-label">Pendidikan</label>
                <input id="pendidikan" name="pendidikan" class="form-control" type="text" value="{{$user->pendidikan}}">
              </div>
            </div>
          </div>

          <hr class="horizontal dark">
          <p class="text-uppercase text-sm">Alamat KTP</p>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="desa_ktp" class="form-control-label">Desa</label>
                <input id="desa_ktp" name="desa_ktp" class="form-control" type="text" value="{{$user->desa_ktp}}">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="rt_ktp" class="form-control-label">RT</label>
                <input id="rt_ktp" name="rt_ktp" class="form-control" type="text" value="{{$user->rt_ktp}}">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="rw_ktp" class="form-control-label">RW</label>
                <input id="rw_ktp" name="rw_ktp" class="form-control" type="text" value="{{$user->rw_ktp}}">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="kecamatan_ktp" class="form-control-label">Kecamatan</label>
                <input id="kecamatan_ktp" name="kecamatan_ktp" class="form-control" type="text" value="{{$kecamatan->nama_kecamatan}}">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="kota_ktp" class="form-control-label">Kota Kabupaten</label>
                <input id="kota_ktp" name="kota_ktp" class="form-control" type="text" value="{{$kota->nama_kota}}">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="provinsi_ktp" class="form-control-label">Provinsi</label>
                <input id="provinsi_ktp" name="provinsi_ktp" class="form-control" type="text" value="{{$provinsi->nama_provinsi}}">
              </div>
            </div>
          </div>
          <p class="text-uppercase text-sm">Alamat Domisili</p>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="desa_domisili" class="form-control-label">Desa</label>
                <input id="desa_domisili" name="desa_domisili" class="form-control" type="text" value="{{$user->desa_domisili}}">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="rt_domisili" class="form-control-label">RT</label>
                <input id="rt_domisili" name="rt_domisili" class="form-control" type="text" value="{{$user->rt_domisili}}">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="rw_domisili" class="form-control-label">RW</label>
                <input id="rw_domisili" name="rw_domisili" class="form-control" type="text" value="{{$user->rw_domisili}}">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="kecamatan_domisili" class="form-control-label">Kecamatan</label>
                <input id="kecamatan_domisili" name="kecamatan_domisili" class="form-control" type="text" value="{{$user->kecamatan_domisili}}">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="kota_domisili" class="form-control-label">Kota/Kabupaten</label>
                <input id="kota_domisili" name="kota_domisili" class="form-control" type="text" value="{{$user->kota_domisili}}">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="provinsi_domisili" class="form-control-label">Provinsi</label>
                <input id="provinsi_domisili" name="provinsi_domisili" class="form-control" type="text" value="{{$user->provinsi_domisili}}">
              </div>
            </div>
          </div>

          <hr class="horizontal dark">
          <p class="text-uppercase text-sm">Kontak</p>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="email" class="form-control-label">Email address</label>
                <input id="email" name="email" class="form-control" type="email" value="{{$user->email}}">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="no_telpon" class="form-control-label">No Telpon</label>
                <input id="no_telpon" name="no_telpon" class="form-control" type="text" value="{{$user->no_telpon}}">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="no_wa" class="form-control-label">No Whatsapp</label>
                <input id="no_wa" name="no_wa" class="form-control" type="text" value="{{$user->no_wa}}">
              </div>
            </div>
          </div>
          <div class="d-flex align-items-center mt-3">
            <button type="submit" class="btn btn-primary btn-sm">Update</button>
          </div>
        </form>

        <hr class="horizontal dark">
        @if (($foto) != null)
        <p class="text-uppercase text-sm mb-0">Hapus Foto Profile</p>
        <h6 class="text-uppercase text-xs text-danger"><i class="fas fa-exclamation-circle text-danger text-xs" aria-hidden="true"></i> Anda ingin menghapus foto profile</h6>
        <div class="col-md-3 mt-3">
          <button type="button" data-bs-toggle="modal" data-bs-target="#modal-notification" class="btn btn-danger btn-sm">Hapus</button>
        </div>

        {{-- Modal Delete --}}
        <div class="modal fade" id="modal-notification" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
          <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
            <div class="modal-content">
              <div class="modal-body">
                <div class="py-3 text-center">
                  <i class="ni ni-fat-remove text-danger ni-3x"></i>
                  <h4 class="text-gradient text-danger mt-4">Anda yakin ingin menghapus foto profile?</h4>
                </div>
              </div>
              <div class="modal-footer">
                <form action="{{route('foto_profile_delete', $foto->id)}}" method="POST">
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
        <p class="text-uppercase text-sm">Tambahkan Foto Profile</p>
        <form action="{{route('tambah_foto')}}" method="POST"  enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="col-md-12" hidden>
              <div class="form-group">
                <label for="user_id" class="form-control-label">User ID</label>
                <input id="user_id" name="user_id" class="form-control" type="text" value="{{$user->id}}">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label for="foto_profile" class="form-control-label">Foto Profile (UKURAN GAMBAR < 2MB)</label>
                <input id="foto_profile" name="foto_profile" class="form-control" type="file" value="">
              </div>
            </div>
          </div>
          <div class="d-flex align-items-center mt-3">
            <button type="submit" class="btn btn-primary btn-sm">Tambah Foto</button>
          </div>
        </form>
        @endif
      </div>
    </div>
  </div>
  {{-- End Detail Profile --}}
  <div class="col-md-4 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-header text-sm-left pt-4 px-4">
        <h5 class="mb-1">Informasi Akun</h5>
      </div>
      <hr class="horizontal dark my-0">
      <div class="card-body">
        @if (($user) != null)
          @if ($user->npwp != null)

          @else
          <div class="d-flex pb-3">
            <div>
              <i class="fas fa-times-circle text-danger text-sm" aria-hidden="true"></i>
            </div>
            <div class="ps-3">
              <span class="text-sm">Kamu belum mengisi NPWP</span>
            </div>
          </div>
          @endif
        @else
        <div class="d-flex pb-3">
          <div>
            <i class="fas fa-times-circle text-danger text-sm" aria-hidden="true"></i>
          </div>
          <div class="ps-3">
            <span class="text-sm">Kamu belum mengisi NPWP</span>
          </div>
        </div>
        @endif
        @if (($user) != null)
          @if ($user->no_wa != null)

          @else
          <div class="d-flex pb-3">
            <div>
              <i class="fas fa-times-circle text-danger text-sm" aria-hidden="true"></i>
            </div>
            <div class="ps-3">
              <span class="text-sm">Kamu belum mengisi Nomor Whatsapp</span>
            </div>
          </div>
          @endif
        @else
        <div class="d-flex pb-3">
          <div>
            <i class="fas fa-times-circle text-danger text-sm" aria-hidden="true"></i>
          </div>
          <div class="ps-3">
            <span class="text-sm">Kamu belum mengisi Nomor Whatsapp</span>
          </div>
        </div>
        @endif
        @if (($foto) != null)
          @if ($foto->foto_profile != null)

          @else
          <div class="d-flex pb-3">
            <div>
              <i class="fas fa-exclamation-circle text-warning text-sm" aria-hidden="true"></i>
            </div>
            <div class="ps-3">
              <span class="text-sm">Kamu belum menambahkan Foto Profile</span>
            </div>
          </div>
          @endif
        @else
        <div class="d-flex pb-3">
          <div>
            <i class="fas fa-exclamation-circle text-warning text-sm" aria-hidden="true"></i>
          </div>
          <div class="ps-3">
            <span class="text-sm">Kamu belum menambahkan Foto Profile</span>
          </div>
        </div>
        @endif
      </div>
    </div>

  </div>
</div>
@endsection
