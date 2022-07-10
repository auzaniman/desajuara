@extends('superuser.layouts.app')

@section('title')
Koleksi Berkas
@endsection

@section('content')
<div class="row">
  <div class="col-lg-12">
    {{-- Avatar --}}
    @include('superuser.components.avatar_profile')
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
                </tr>
              </thead>
              @if (($berkas) != null)
                @if ($berkas->foto_ktp != null && $berkas->foto_kk != null && $berkas->akta_kelahiran != null && $berkas->paspoto != null && $berkas->foto_diri != null)
                <tbody>
                  <tr>
                    <td class="align-middle text-center text-sm">
                      <h6 class="mb-0 text-xs">Foto KTP</h6>
                    </td>
                    <td class="align-middle text-center">
                      <img src="{{ asset('storage/'.$berkas->foto_ktp) }}" alt="" style="width: 150px" class="img-thumbnail">
                    </td>
                  </tr>
                  <tr>
                    <td class="align-middle text-center text-sm">
                      <h6 class="mb-0 text-xs">Foto KK</h6>
                    </td>
                    <td class="align-middle text-center">
                      <img src="{{ asset('storage/'.$berkas->foto_kk) }}" alt="" style="width: 150px" class="img-thumbnail">
                    </td>
                  </tr>
                  <tr>
                    <td class="align-middle text-center text-sm">
                      <h6 class="mb-0 text-xs">Foto Diri</h6>
                    </td>
                    <td class="align-middle text-center">
                      <img src="{{ asset('storage/'.$berkas->foto_diri) }}" alt="" style="width: 150px" class="img-thumbnail">
                    </td>
                  </tr>
                  <tr>
                    <td class="align-middle text-center text-sm">
                      <h6 class="mb-0 text-xs">NPWP</h6>
                    </td>
                    <td class="align-middle text-center">
                      <img src="{{ asset('storage/'.$berkas->npwp) }}" alt="" style="width: 150px" class="img-thumbnail">
                    </td>
                  </tr>
                  <tr>
                    <td class="align-middle text-center text-sm">
                      <h6 class="mb-0 text-xs">Buku Nikah</h6>
                    </td>
                    <td class="align-middle text-center">
                      <img src="{{ asset('storage/'.$berkas->buku_nikah) }}" alt="" style="width: 150px" class="img-thumbnail">
                    </td>
                  </tr>
                  <tr>
                    <td class="align-middle text-center text-sm">
                      <h6 class="mb-0 text-xs">Akta Kelahiran</h6>
                    </td>
                    <td class="align-middle text-center">
                      <img src="{{ asset('storage/'.$berkas->akta_kelahiran) }}" alt="" style="width: 150px" class="img-thumbnail">
                    </td>
                  </tr>
                  <tr>
                    <td class="align-middle text-center text-sm">
                      <h6 class="mb-0 text-xs">PasPoto</h6>
                    </td>
                    <td class="align-middle text-center">
                      <img src="{{ asset('storage/'.$berkas->paspoto) }}" alt="" style="width: 150px" class="img-thumbnail">
                    </td>
                  </tr>
                </tbody>
                @else
                <tbody>
                  <tr>
                    <td colspan="3" class="align-middle text-center text-sm">
                      <h6 class="mb-0 text-xs">Anda Belum Upload Berkas</h6>
                    </td>
                  </tr>
                </tbody>
                @endif
              @else
              @endif
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
          @if ($berkas->foto_ktp != null)

          @else
          <div class="d-flex pb-3">
            <div>
              <i class="fas fa-times-circle text-danger text-sm" aria-hidden="true"></i>
            </div>
            <div class="ps-3">
              <span class="text-sm">Kamu belum mengirim berkas Foto KTP</span>
            </div>
          </div>
          @endif
        @else
        <div class="d-flex pb-3">
          <div>
            <i class="fas fa-times-circle text-danger text-sm" aria-hidden="true"></i>
          </div>
          <div class="ps-3">
            <span class="text-sm">Kamu belum mengirim berkas Foto KTP</span>
          </div>
        </div>
        @endif
        @if (($berkas) != null)
          @if ($berkas->foto_kk != null)

          @else
          <div class="d-flex pb-3">
            <div>
              <i class="fas fa-times-circle text-danger text-sm" aria-hidden="true"></i>
            </div>
            <div class="ps-3">
              <span class="text-sm">Kamu belum mengirim berkas Foto Kartu Keluarga</span>
            </div>
          </div>
          @endif
        @else
        <div class="d-flex pb-3">
          <div>
            <i class="fas fa-times-circle text-danger text-sm" aria-hidden="true"></i>
          </div>
          <div class="ps-3">
            <span class="text-sm">Kamu belum mengirim berkas Foto Kartu Keluarga</span>
          </div>
        </div>
        @endif
        @if (($berkas) != null)
          @if ($berkas->akta_kelahiran != null)

          @else
          <div class="d-flex pb-3">
            <div>
              <i class="fas fa-times-circle text-danger text-sm" aria-hidden="true"></i>
            </div>
            <div class="ps-3">
              <span class="text-sm">Kamu belum mengirim berkas Akta Kelahira</span>
            </div>
          </div>
          @endif
        @else
        <div class="d-flex pb-3">
          <div>
            <i class="fas fa-times-circle text-danger text-sm" aria-hidden="true"></i>
          </div>
          <div class="ps-3">
            <span class="text-sm">Kamu belum mengirim berkas Akta Kelahiran</span>
          </div>
        </div>
        @endif
        @if (($berkas) != null)
          @if ($berkas->foto_diri != null)

          @else
          <div class="d-flex pb-3">
            <div>
              <i class="fas fa-times-circle text-danger text-sm" aria-hidden="true"></i>
            </div>
            <div class="ps-3">
              <span class="text-sm">Kamu belum mengirim berkas Foto Diri</span>
            </div>
          </div>
          @endif
        @else
        <div class="d-flex pb-3">
          <div>
            <i class="fas fa-times-circle text-danger text-sm" aria-hidden="true"></i>
          </div>
          <div class="ps-3">
            <span class="text-sm">Kamu belum mengirim berkas Foto Diri</span>
          </div>
        </div>
        @endif
        @if (($berkas) != null)
          @if ($berkas->paspoto != null)

          @else
          <div class="d-flex pb-3">
            <div>
              <i class="fas fa-times-circle text-danger text-sm" aria-hidden="true"></i>
            </div>
            <div class="ps-3">
              <span class="text-sm">Kamu belum mengirim berkas Paspoto 3x4</span>
            </div>
          </div>
          @endif
        @else
        <div class="d-flex pb-3">
          <div>
            <i class="fas fa-times-circle text-danger text-sm" aria-hidden="true"></i>
          </div>
          <div class="ps-3">
            <span class="text-sm">Kamu belum mengirim berkas Paspoto 3x4</span>
          </div>
        </div>
        @endif

        @if (($berkas) != null)
          @if ($berkas->npwp != null)

          @else
          <div class="d-flex pb-3">
            <div>
              <i class="fas fa-exclamation-circle text-warning text-sm" aria-hidden="true"></i>
            </div>
            <div class="ps-3">
              <span class="text-sm">Kamu belum mengirim berkas NPWP</span>
            </div>
          </div>
          @endif
        @else
        <div class="d-flex pb-3">
          <div>
            <i class="fas fa-exclamation-circle text-warning text-sm" aria-hidden="true"></i>
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
              <i class="fas fa-exclamation-circle text-warning text-sm" aria-hidden="true"></i>
            </div>
            <div class="ps-3">
              <span class="text-sm">Kamu belum mengirim berkas Buku Nikah</span>
            </div>
          </div>
          @endif
        @else
        <div class="d-flex pb-3">
          <div>
            <i class="fas fa-exclamation-circle text-warning text-sm" aria-hidden="true"></i>
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
