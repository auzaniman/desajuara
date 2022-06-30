<button class="btn btn-icon btn-3 btn-xs @if (\Request::is('user/kumpulan_administrasi')) btn-primary @else btn-warning @endif me-2 mb-0" type="button">
  <a href="{{route('kumpulan_administrasi')}}" class="btn-inner--text text-decoration-none text-reset">Administrasi</a>
</button>
<button class="btn btn-icon btn-3 btn-xs @if (\Request::is('user/kumpulan_perizinan')) btn-primary @else btn-warning @endif me-2 mb-0" type="button">
  <a href="{{route('kumpulan_perizinan')}}" class="btn-inner--text text-decoration-none text-reset">Perizinan</a>
</button>
<button class="btn btn-icon btn-3 btn-xs @if (\Request::is('user/kumpulan_nonperizinan')) btn-primary @else btn-warning @endif me-2 mb-0" type="button">
  <a href="{{route('kumpulan_nonperizinan')}}" class="btn-inner--text text-decoration-none text-reset">Non Perizinan</a>
</button>
<button class="btn btn-icon btn-3 btn-xs @if (\Request::is('user/kumpulan_pertanahan')) btn-primary @else btn-warning @endif me-2 mb-0" type="button">
  <a href="{{route('kumpulan_pertanahan')}}" class="btn-inner--text text-decoration-none text-reset">Pertanahan</a>
</button>
