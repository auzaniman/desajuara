@extends('officer.layouts.app')

@section('title')
Rencana Jangka Menengah
@endsection

@section('content')
<div class="row">
  <div class="col-lg-12 mb-lg-0 mb-4">
    <div class="card h-100">
      <div class="row">
        <div class="col-lg-4">
          <div class="card-header pb-0 pt-3 bg-transparent">
            <h6 class="text-capitalize text-primary mb-3">Kepala Desa</h6>
            <img src="{{url('frontend/assets/img/1.jpg')}}" class="img-fluid" alt="foto kades">
            <h6>Bapak Fulan</h6>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="card-header pb-0 pt-3 bg-transparent">
            <h6 class="text-capitalize text-primary">Visi</h6>
            <p class="mb-3">
              “Menjadi Kampung CEMARA (Cerdas, Makmur, Kreatif, Berbudaya ) Melalui SDM yang Berkualitas, Pertanian yang Subur, Pariwisata yang Maju dan Kehidupan Yang Berkebudayaan”
            </p>
          </div>
          <div class="card-header pb-0 pt-3 bg-transparent">
            <h6 class="text-capitalize">Misi</h6>
            <ul class="mb-3">
              <li>Membangun sarana dan prasarana kampung yang berkualitas</li>
              <li>Menciptakan tata kelola pemerintahan yang bersih, transparan dan berkualitas</li>
              <li>Meningkatkan kualitas sumber daya manusia</li>
              <li>Meningkatkan perekonomian kampung melalui agrikultur dan kepariwisataan</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
