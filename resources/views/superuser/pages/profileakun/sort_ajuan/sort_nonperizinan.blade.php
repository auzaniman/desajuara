@extends('superuser.layouts.app')

@section('title')
Permohonan Non Perizinan
@endsection

@section('content')
<div class="row">
  <div class="col-lg-12">
    {{-- Avatar --}}
    @include('superuser.components.avatar_profile')
    {{-- End Avatar --}}
  </div>
</div>
<div class="row mt-4 mb-4">
  <div class="col-md-12">
    <div class="card">
      <div class="card-body">
        <p class="text-uppercase text-sm">Riwayat Pengajuan Permohonan Bidang Non Perizinan</p>
        @include('superuser.components.dropdown_ajuan')
        <div class="col-md-6 mt-4">
          <div class="form-group">
            <input id="search" name="search" type="text" class="form-control form-control-sm" placeholder="Search">
          </div>
        </div>
        <div class="table-responsive">
          <table class="table align-items-center mb-3">
            <thead>
              <tr>
                <th class="text-uppercase px-2 text-secondary text-xxs font-weight-bolder">Nama Pemohon</th>
                <th class="text-uppercase px-2 text-secondary text-xxs font-weight-bolder">Nama Ajuan</th>
                <th class="text-uppercase px-2 text-secondary text-xxs font-weight-bolder">Kategori Ajuan</th>
                <th class="text-uppercase px-2 text-secondary text-xxs font-weight-bolder">Tanggal Pengajuan</th>
                <th class="text-uppercase px-2 text-secondary text-xxs font-weight-bolder">Status</th>
                <th class="text-uppercase px-2 text-secondary text-xxs font-weight-bolder">File</th>
                <th class="text-uppercase px-2 text-secondary text-xxs font-weight-bolder">Ket</th>
              </tr>
            </thead>
            <tbody>

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<a href="{{route('layanan')}}" class="btn btn-success btn-icon">
  <span class="btn-inner--icon"><i class="ni ni-bold-left text-white"></i></span>
  <span class="btn-inner--text text-white">Pengajuan Baru</span>
</a>
@endsection

@push('search')
<script type="text/javascript">
  $('#search').on('keyup',function(){
    $value=$(this).val();
    $.ajax({
      type : 'get',
      url : '{{URL::to('user/search_nonperizinan')}}',
      data:{'search':$value},
      success:function(data){
      $('tbody').html(data);
      }
    });
  })
</script>

<script type="text/javascript">
  $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
</script>
@endpush
