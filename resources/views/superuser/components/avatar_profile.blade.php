 <div class="card">
  <div class="card-body p-3">
    <div class="row gx-4">
      <div class="col-auto">
        <div class="avatar avatar-xl position-relative">
          @if (($foto) != null)
            @if ($foto->foto_profile != null)
            <img src="{{asset('storage/'.$foto->foto_profile)}}" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
            <div class="w-100 border-radius-lg shadow-sm bg-gradient-primary h-100"></div>
            @else
            <img src="{{url('frontend/assets/img/user.jpg')}}" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
            <div class="w-100 border-radius-lg shadow-sm bg-gradient-primary h-100"></div>
            @endif
          @else
          <img src="{{url('frontend/assets/img/user.jpg')}}" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
          <div class="w-100 border-radius-lg shadow-sm bg-gradient-primary h-100"></div>
          @endif
        </div>
      </div>
      <div class="col-auto my-auto">
        <div class="h-100">
          <h5 class="mb-1">
            {{$user->name}}
          </h5>
          <p class="mb-0 font-weight-bold text-sm">
            {{$user->desa_ktp}} RT{{$user->rt_ktp}} RW{{$user->rw_ktp}}, {{$user->kecamatan_ktp}}, {{$user->kota_ktp}}, {{$user->provinsi_ktp}}
          </p>
        </div>
      </div>
      <div class="col-auto my-sm-auto ms-sm-auto me-5 mt-3">
        <div class="dropdown">
          <a href="#" class="btn mb-0 bg-primary text-white dropdown-toggle " data-bs-toggle="dropdown" id="navbarDropdownMenuLink2">
              @if (\Request::is('user'))
              <i class="ni ni-circle-08 me-1 text-white"></i>
              Akun Profile
              @elseif (\Request::is('user/kumpulan_berkas'))
              <i class="ni ni-collection me-1 text-white"></i>
              Koleksi Berkas
              @else
              <i class="ni ni-book-bookmark me-1 text-white"></i>
              Riwayat Permohonan
              @endif
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
              <li>
                  <a class="dropdown-item mb-1 mt-1" href="{{route('dashboard')}}">
                    <i class="ni ni-circle-08 me-1"></i>
                    Akun Profile
                  </a>
              </li>
              <li>
                  <a class="dropdown-item mb-1" href="{{route('kumpulan_berkas')}}">
                    <i class="ni ni-collection me-1"></i>
                    Koleksi Berkas
                  </a>
              </li>
              <li>
                  <a class="dropdown-item mb-1" href="{{route('kumpulan_ajuan', $user->id)}}">
                    <i class="ni ni-book-bookmark me-1"></i>
                    Riwayat Permohonan
                  </a>
              </li>
          </ul>
        </div>
        {{-- <div class="nav-wrapper position-relative end-0">
          <ul class="nav nav-pills nav-fill p-1" role="tablist">
            <li class="nav-item">
              <ul class="nav-link mb-0 px-0 py-1 active d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="true">
                <i class="ni ni-circle-08"></i>
                <a href="{{route('dashboard')}}">
                  <span class="ms-2">Akun</span>
                </a>
              </ul>
            </li>
            <li class="nav-item">
              <ul class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="{{route('berkas')}}" role="tab" aria-selected="false">
                <i class="ni ni-collection"></i>
                <a href="{{route('kumpulan_berkas')}}">
                  <span class="ms-2">Berkas</span>
                </a>
              </ul>
            </li>
            <li class="nav-item">
              <ul class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                <i class="ni ni-book-bookmark"></i>
                <a href="{{route('kumpulan_ajuan', $user->id)}}">
                  <span class="ms-2">Ajuan</span>
                </a>
              </ul>
            </li>
          </ul>
        </div> --}}
      </div>
    </div>
  </div>
</div>
