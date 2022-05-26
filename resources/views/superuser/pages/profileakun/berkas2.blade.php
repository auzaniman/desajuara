@extends('superuser.layouts.app')

@section('title')
Koleksi Berkas
@endsection

@section('content')
<div class="row">
  <div class="col-lg-12">
    {{-- Avatar --}}
    <div class="card">
      <div class="card-body p-3">
        <div class="row gx-4">
          <div class="col-auto">
            <div class="avatar avatar-xl position-relative">
              <img src="{{url('frontend/assets/img/user.jpg')}}" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
              <div class="w-100 border-radius-lg shadow-sm bg-gradient-primary h-100"></div>
            </div>
          </div>
          <div class="col-auto my-auto">
            <div class="h-100">
              <h5 class="mb-1">
                {{$user->name}}
              </h5>
              <p class="mb-0 font-weight-bold text-sm">
                {{$user->email}}
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
            <div class="nav-wrapper position-relative end-0">
              <ul class="nav nav-pills nav-fill p-1" role="tablist">
                <li class="nav-item">
                  <ul class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                    <i class="ni ni-app"></i>
                    <a href="{{route('dashboard')}}">
                      <span class="ms-2">Akun</span>
                    </a>
                  </ul>
                </li>
                <li class="nav-item">
                  <ul class="nav-link mb-0 px-0 py-1 active d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="true">
                    <i class="ni ni-email-83"></i>
                    <a href="{{route('kumpulan_berkas')}}">
                      <span class="ms-2">Berkas</span>
                    </a>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                    <i class="ni ni-settings-gear-65"></i>
                    <span class="ms-2">Settings</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- End Avatar --}}
  </div>
</div>
<div class="row mt-4">
  {{-- Detail Profile --}}
  <div class="col-md-8">
    <div class="card">
      <div class="card-body">
        <p class="text-uppercase text-sm">Koleksi Berkas</p>
        <div class="card">
          <div class="table-responsive">
            <table class="table align-items-center mb-3">
              <thead>
                <tr>
                  <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder">Nama Berkas</th>
                  <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder ps-2">File Berkas</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="align-middle text-center text-sm">
                    <h6 class="mb-0 text-xs">Foto KTP</h6>
                  </td>
                  <td class="align-middle text-center">
                    <img src="{{ asset('storage/'.$berkas->foto_ktp) }}" alt="" style="width: 150px" class="img-thumbnail">
                  </td>
                  <td class="align-middle text-center">
                    <a href="{{route('berkas')}}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                      Edit
                    </a>
                  </td>
                </tr>
                <tr>
                  <td class="align-middle text-center text-sm">
                    <h6 class="mb-0 text-xs">Foto KK</h6>
                  </td>
                  <td class="align-middle text-center">
                    <img src="{{ asset('storage/'.$berkas->foto_kk) }}" alt="" style="width: 150px" class="img-thumbnail">
                  </td>
                  <td class="align-middle text-center">
                    <a href="{{route('berkas')}}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                      Edit
                    </a>
                  </td>
                </tr>
                <tr>
                  <td class="align-middle text-center text-sm">
                    <h6 class="mb-0 text-xs">Foto Diri</h6>
                  </td>
                  <td class="align-middle text-center">
                    <img src="{{ asset('storage/'.$berkas->foto_diri) }}" alt="" style="width: 150px" class="img-thumbnail">
                  </td>
                  <td class="align-middle text-center">
                    <a href="{{route('berkas')}}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                      Edit
                    </a>
                  </td>
                </tr>
                <tr>
                  <td class="align-middle text-center text-sm">
                    <h6 class="mb-0 text-xs">NPWP</h6>
                  </td>
                  <td class="align-middle text-center">
                    <img src="{{ asset('storage/'.$berkas->npwp) }}" alt="" style="width: 150px" class="img-thumbnail">
                  </td>
                  <td class="align-middle text-center">
                    <a href="{{route('berkas')}}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                      Edit
                    </a>
                  </td>
                </tr>
                <tr>
                  <td class="align-middle text-center text-sm">
                    <h6 class="mb-0 text-xs">Buku Nikah</h6>
                  </td>
                  <td class="align-middle text-center">
                    <img src="{{ asset('storage/'.$berkas->buku_nikah) }}" alt="" style="width: 150px" class="img-thumbnail">
                  </td>
                  <td class="align-middle text-center">
                    <a href="{{route('berkas')}}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                      Edit
                    </a>
                  </td>
                </tr>
                <tr>
                  <td class="align-middle text-center text-sm">
                    <h6 class="mb-0 text-xs">Akta Kelahiran</h6>
                  </td>
                  <td class="align-middle text-center">
                    <img src="{{ asset('storage/'.$berkas->akta_kelahiran) }}" alt="" style="width: 150px" class="img-thumbnail">
                  </td>
                  <td class="align-middle text-center">
                    <a href="{{route('berkas')}}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                      Edit
                    </a>
                  </td>
                </tr>
                <tr>
                  <td class="align-middle text-center text-sm">
                    <h6 class="mb-0 text-xs">PasPoto</h6>
                  </td>
                  <td class="align-middle text-center">
                    <img src="{{ asset('storage/'.$berkas->paspoto) }}" alt="" style="width: 150px" class="img-thumbnail">
                  </td>
                  <td class="align-middle text-center">
                    <a href="{{route('berkas')}}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                      Edit
                    </a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  {{-- End Detail Profile --}}
  <div class="col-md-4">
    <div class="card">
      <div class="card-header text-sm-left pt-4 px-4">
        <h5 class="mb-1">Informasi Akun</h5>
      </div>
      <hr class="horizontal dark my-0">
      <div class="card-body">
        @if (($berkas) != null)
          @if ($berkas->npwp != null)

          @else
          <div class="d-flex pb-3">
            <div>
              <i class="fas fa-times text-danger text-sm" aria-hidden="true"></i>
            </div>
            <div class="ps-3">
              <span class="text-sm">Kamu belum mengirim berkas NPWP</span>
            </div>
          </div>
          @endif
        @else
        <div class="d-flex pb-3">
          <div>
            <i class="fas fa-times text-danger text-sm" aria-hidden="true"></i>
          </div>
          <div class="ps-3">
            <span class="text-sm">Kamu belum mengirim berkas NPWP</span>
          </div>
        </div>
        @endif
        @if (($berkas) != null)
          @if ($berkas->buku_nikah != null)

          @else
          <div class="d-flex pb-3">
            <div>
              <i class="fas fa-times text-danger text-sm" aria-hidden="true"></i>
            </div>
            <div class="ps-3">
              <span class="text-sm">Kamu belum mengirim berkas Buku Nikah</span>
            </div>
          </div>
          @endif
        @else
        <div class="d-flex pb-3">
          <div>
            <i class="fas fa-times text-danger text-sm" aria-hidden="true"></i>
          </div>
          <div class="ps-3">
            <span class="text-sm">Kamu belum mengirim berkas Buku Nikah</span>
          </div>
        </div>
        @endif
      </div>
    </div>

  </div>
</div>
@endsection
