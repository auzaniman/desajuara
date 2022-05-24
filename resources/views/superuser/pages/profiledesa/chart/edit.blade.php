@extends('superuser.layouts.app')

@section('title')
Edit Data Chart
@endsection

@section('content')
{{-- <div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body p-3">
        <div class="row gx-4">
          <div class="col-auto my-auto">
            <div class="h-100">
              <h5 class="mb-1">
                Syarat Pembuatan Surat Keterangan Usaha
              </h5>
              <p class="mb-0 font-weight-bold text-sm">
                Fotokopi KTP
                Pengantar RT & RW
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> --}}
<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <p class="text-uppercase text-sm">Edit Data Chart</p>
        @foreach ($charts as $chart)
          <form method="POST" action="{{route('chart_edit', $chart->id)}}" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="row align-items-center">
              <div class="col-md-3">
                <div class="form-group">
                  <label for="jumlahwarga" class="form-control-label">Jumlah Warga</label>
                  <input name="jumlahWarga" id="jumlahwarga" class="form-control" type="text" value="{{$chart->jumlahWarga}}">
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="jumlahKepalaKeluarga" class="form-control-label">Jumlah Kepala Keluarga</label>
                  <input name="jumlahKepalaKeluarga" id="jumlahKepalaKeluarga" class="form-control" type="text" value="{{$chart->jumlahKepalaKeluarga}}">
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="rt" class="form-control-label">RT</label>
                  <input name="rt" id="rt" class="form-control" type="text" value="{{$chart->rt}}">
                </div>
              </div>
              <div class="col-md-3 mt-3">
                <button type="submit" class="btn btn-primary btn-sm ms-auto mb-0">Edit</button>
              </div>
            </div>
          </form>
          <form action="{{route('chart_delete', $chart->id)}}" method="POST">
            @method('delete')
            @csrf
            <div class="col-md-3 mt-3">
              <button type="submit" class="btn btn-danger btn-sm ms-auto mb-0">Delete</button>
            </div>
          </form>
        @endforeach
      </div>
    </div>
  </div>
</div>
@endsection
