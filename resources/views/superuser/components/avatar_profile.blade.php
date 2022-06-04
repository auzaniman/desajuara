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
      <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
        <div class="nav-wrapper position-relative end-0">
          <ul class="nav nav-pills nav-fill p-1" role="tablist">
            <li class="nav-item">
              <ul class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="true">
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
        </div>
      </div>
    </div>
  </div>
</div>
