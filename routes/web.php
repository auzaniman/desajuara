<?php
use App\Http\Controllers\Officer\Auth\LoginController;
use App\Http\Controllers\Officer\DashboardController;
use App\Http\Controllers\Officer\MainDashboardController;
use App\Http\Controllers\Officer\ProfileDesaOfficerController;
use App\Http\Controllers\Officer\TantanganDanPotensiOfficerController;
use App\Http\Controllers\Officer\RencanaJangkaMenengahOfficerController;
use App\Http\Controllers\Officer\KeuanganOfficerController;
use App\Http\Controllers\Officer\AgendaOfficerController;
use App\Http\Controllers\Officer\LayananOfficerController;
use App\Http\Controllers\Officer\ChartBarOfficerController;
use App\Http\Controllers\Officer\BerkasOfficerController;
use App\Http\Controllers\Officer\PetaDesaOfficerController;
use App\Http\Controllers\Officer\SettingController;
use App\Http\Controllers\Officer\Administrasi\AdministrasiOfficerController;
use App\Http\Controllers\Officer\Administrasi\SuratDomisiliOfficerController;
use App\Http\Controllers\Officer\Perizinan\PerizinanOfficerController;
use App\Http\Controllers\Officer\Perizinan\SuketUsahaOfficerController;
use App\Http\Controllers\Officer\NonPerizinan\NonPerizinanOfficerController;
use App\Http\Controllers\Officer\NonPerizinan\SKTMOfficerController;
use App\Http\Controllers\Officer\NonPerizinan\SupengDesaOfficerController;
use App\Http\Controllers\User\ProfileAkun\ProfileAkunController;
use App\Http\Controllers\User\ProfileAkun\KumpulanAjuanController;
use App\Http\Controllers\User\ProfileDesaController;
use App\Http\Controllers\User\TantanganDanPotensiController;
use App\Http\Controllers\User\RencanaJangkaMenengahController;
use App\Http\Controllers\User\KeuanganController;
use App\Http\Controllers\User\AgendaController;
use App\Http\Controllers\User\LayananController;
use App\Http\Controllers\User\ChartBarController;
use App\Http\Controllers\User\BerkasController;
use App\Http\Controllers\User\PetaDesaController;
use App\Http\Controllers\User\Administrasi\SuratDomisiliController;
use App\Http\Controllers\User\Perizinan\SuketUsahaController;
use App\Http\Controllers\User\NonPerizinan\SKTMController;
use App\Http\Controllers\User\NonPerizinan\SupengDesaController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DependantDropdownController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Regist Region
Route::post('/getkabupaten', [RegisterController::class, "getkabupaten"])->name("getkabupaten");
Route::post('/getkecamatan', [RegisterController::class, "getkecamatan"])->name("getkecamatan");
Route::post('/getdesa', [RegisterController::class, "getdesa"])->name("getdesa");

// Landing
Route::get("/", function () {
    return view('home.pages.index');
})->name('home');

// Login Officer
Route::get('/login_officer', [LoginController::class, "index"])->name("login_officer");
Route::post('/login_officer', [LoginController::class, "login"])->name("auth_login_officer");
Route::get('/auth_logout_officer', [LoginController::class, "logout"])->name("auth_logout_officer");

//Dashboard Officer
Route::middleware(["officer"])
->name("officer.")
->prefix("officer")
->namespace("Officer")
->group(function () {
  //Profile
  Route::get("/", [MainDashboardController::class, "index"])->name("dashboard");

  // Profile Desa
  // Route::get("/desa", [ProfileDesaController::class, "Index"])->name("profile_desa");
  Route::get('/chart', [ChartBarOfficerController::class, "index"])->name("chart");
  Route::post('/chart_add', [ChartBarOfficerController::class, "store"])->name("chart_add");
  Route::get('/chart_edit_page', [ChartBarOfficerController::class, "index_edit"])->name("chart_edit_page");
  Route::put('/chart_edit/{id}', [ChartBarOfficerController::class, "update"])->name("chart_edit");
  Route::delete('/chart_delete/{id}', [ChartBarOfficerController::class, "destroy"])->name("chart_delete");

  // TDP
  Route::get("/tdp", [TantanganDanPotensiOfficerController::class, "Index"])->name("tantangan");

  // RJM
  Route::get("/rjm", [RencanaJangkaMenengahOfficerController::class, "Index"])->name("rencana");

  // Agenda
  Route::get("/agenda", [AgendaOfficerController::class, "Index"])->name("agenda");

  // Keuangan
  Route::get("/keuangan", [KeuanganOfficerController::class, "Index"])->name("keuangan");

  // Layanan
  Route::get("/layanan", [LayananOfficerController::class, "Index"])->name("layanan");

  // Administrasi Kependudukan
  Route::get("/administrasi", [AdministrasiOfficerController::class, "administrasi"])->name("administrasi");

  // Administrasi Kependudukan - Surat Domisili
  Route::get("/surdom", [SuratDomisiliOfficerController::class, "index"])->name("surdom");
  Route::get("/surdom_waiting", [SuratDomisiliOfficerController::class, "waiting"])->name("waiting_surdom");
  Route::get("/surdom_verified", [SuratDomisiliOfficerController::class, "terverifikasi"])->name("terverifikasi_surdom");
  Route::get("/surdom_tolak", [SuratDomisiliOfficerController::class, "ditolak"])->name("ditolak_surdom");
  Route::post("/post_surdom", [SuratDomisiliOfficerController::class, "store"])->name("post_surdom");
  Route::get("/show_surdom/{id}", [SuratDomisiliOfficerController::class, "show"])->name("show_surdom");
  Route::put("/update_surdom/{id}", [SuratDomisiliOfficerController::class, "update"])->name("update_surdom");
  Route::put("/update_alt_surdom/{id}", [SuratDomisiliOfficerController::class, "update_alt"])->name("update_alt_surdom");
  Route::put("/update_keterangan_surdom/{id}", [SuratDomisiliOfficerController::class, "update_keterangan"])->name("update_keterangan_surdom");

  // End Administrasi

  // Perizinan
  Route::get("/perizinan", [PerizinanOfficerController::class, "perizinan"])->name("perizinan");

  // Perizinan - Surat Keterangan Usaha
  Route::get("/suketusaha", [SuketUsahaOfficerController::class, "index"])->name("suketusaha");
  Route::get("/suketusaha_waiting", [SuketUsahaOfficerController::class, "waiting"])->name("waiting_suketusaha");
  Route::get("/suketusaha_verified", [SuketUsahaOfficerController::class, "terverifikasi"])->name("terverifikasi_suketusaha");
  Route::get("/suketusaha_tolak", [SuketUsahaOfficerController::class, "ditolak"])->name("ditolak_suketusaha");
  Route::post("/post_suketusaha", [SuketUsahaOfficerController::class, "store"])->name("post_suketusaha");
  Route::get("/show_suketusaha/{id}", [SuketUsahaOfficerController::class, "show"])->name("show_suketusaha");
  Route::put("/update_suketusaha/{id}", [SuketUsahaOfficerController::class, "update"])->name("update_suketusaha");
  Route::put("/update_alt_suketusaha/{id}", [SuketUsahaOfficerController::class, "update_alt"])->name("update_alt_suketusaha");
  Route::put("/update_keterangan_suketusaha/{id}", [SuketUsahaOfficerController::class, "update_keterangan"])->name("update_keterangan_suketusaha");

  // End Perizinan

  // Non Perizinan
  Route::get("/nonperizinan", [NonPerizinanOfficerController::class, "non_perizinan"])->name("non_perizinan");

  // Non Perizinan - Surat Keterangan Tidak Mampu
  Route::get("/sktm", [SKTMOfficerController::class, "index"])->name("sktm");
  Route::get("/sktm_waiting", [SKTMOfficerController::class, "waiting"])->name("waiting_sktm");
  Route::get("/sktm_verified", [SKTMOfficerController::class, "terverifikasi"])->name("terverifikasi_sktm");
  Route::get("/sktm_tolak", [SKTMOfficerController::class, "ditolak"])->name("ditolak_sktm");
  Route::post("/post_sktm", [SKTMOfficerController::class, "store"])->name("post_sktm");
  Route::get("/show_sktm/{id}", [SKTMOfficerController::class, "show"])->name("show_sktm");
  Route::put("/update_sktm/{id}", [SKTMOfficerController::class, "update"])->name("update_sktm");
  Route::put("/update_alt_sktm/{id}", [SKTMOfficerController::class, "update_alt"])->name("update_alt_sktm");
  Route::put("/update_keterangan_sktm/{id}", [SupengDesaOfficerController::class, "update_keterangan"])->name("update_keterangan_sktm");

  // Non Perizinan - Surat Pengantar Desa
  Route::get("/supengdesa", [SupengDesaOfficerController::class, "index"])->name("supengdesa");
  Route::get("/supengdesa_waiting", [SupengDesaOfficerController::class, "waiting"])->name("waiting_supengdesa");
  Route::get("/supengdesa_verified", [SupengDesaOfficerController::class, "terverifikasi"])->name("terverifikasi_supengdesa");
  Route::get("/supengdesa_tolak", [SupengDesaOfficerController::class, "ditolak"])->name("ditolak_supengdesa");
  Route::post("/post_supengdesa", [SupengDesaOfficerController::class, "store"])->name("post_supengdesa");
  Route::get("/show_supengdesa/{id}", [SupengDesaOfficerController::class, "show"])->name("show_supengdesa");
  Route::put("/update_supengdesa/{id}", [SupengDesaOfficerController::class, "update"])->name("update_supengdesa");
  Route::put("/update_alt_supengdesa/{id}", [SupengDesaOfficerController::class, "update_alt"])->name("update_alt_supengdesa");
  Route::put("/update_keterangan_supengdesa/{id}", [SupengDesaOfficerController::class, "update_keterangan"])->name("update_keterangan_supengdesa");

  // End Non Perizinan

  // Pertanahan
  Route::get("/pertanahan", [LayananOfficerController::class, "pertanahan"])->name("pertanahan");

  // End Pertanahan

  // End Layanan

  // Peta Desa
  Route::get("/peta", [PetaDesaOfficerController::class, "Index"])->name("peta");

  // Berkas
  Route::get("/berkas", [BerkasOfficerController::class, "Index"])->name("berkas");

  // Setting
  Route::get("/setting", [SettingController::class, "index"])->name("setting");
  Route::post("/set_profiledesa", [SettingController::class, "store"])->name("setprofiledesa");
});

// Dashboard User
Route::prefix("user")
->namespace("User")
->middleware(["auth", "user"])
->group(function() {

  // Profile Akun
  Route::post('/getkabupatenprofile', [ProfileAkunController::class, "getkabupatenprofile"])->name("getkabupatenprofile");
  Route::post('/getkecamatanprofile', [ProfileAkunController::class, "getkecamatanprofile"])->name("getkecamatanprofile");
  Route::post('/getdesaprofile', [ProfileAkunController::class, "getdesaprofile"])->name("getdesaprofile");

  Route::get("/", [ProfileAkunController::class, "index"])->name("dashboard");
  Route::put("/profile_edit/{id}", [ProfileAkunController::class, "update"])->name("profile_edit");
  Route::put("/profile_edit_alamatktp/{id}", [ProfileAkunController::class, "updatealamatktp"])->name("profile_edit_alamatktp");
  Route::put("/profile_edit_alamatdomisili/{id}", [ProfileAkunController::class, "updatealamatdomisili"])->name("profile_edit_alamatdomisili");
  Route::post("/tambah_foto", [ProfileAkunController::class, "store"])->name("tambah_foto");
  Route::get("/kumpulan_berkas", [ProfileAkunController::class, "kumpulan_berkas"])->name("kumpulan_berkas");
  Route::delete('/foto_profile_delete/{id}', [ProfileAkunController::class, "destroy"])->name("foto_profile_delete");
  // Profile Akun - Kumpulan Ajuan
  Route::get("/kumpulan_ajuan", [KumpulanAjuanController::class, "kumpulan_ajuan"])->name("kumpulan_ajuan");
  Route::get("/kumpulan_administrasi", [KumpulanAjuanController::class, "kumpulan_administrasi"])->name("kumpulan_administrasi");
  Route::get("/kumpulan_perizinan", [KumpulanAjuanController::class, "kumpulan_perizinan"])->name("kumpulan_perizinan");
  Route::get("/kumpulan_nonperizinan", [KumpulanAjuanController::class, "kumpulan_nonperizinan"])->name("kumpulan_nonperizinan");
  Route::get("/kumpulan_pertanahan", [KumpulanAjuanController::class, "kumpulan_pertanahan"])->name("kumpulan_pertanahan");
  Route::get('/download_surdom/{id}', [KumpulanAjuanController::class, "downloadSurdom"])->name("download_surdom");
  Route::get('/download_suketusaha/{id}', [KumpulanAjuanController::class, "downloadSuketusaha"])->name("download_suketusaha");
  Route::get('/download_sktm/{id}', [KumpulanAjuanController::class, "downloadSktm"])->name("download_sktm");
  Route::get('/download_supengdesa/{id}', [KumpulanAjuanController::class, "downloadSupengdesa"])->name("download_supengdesa");
  Route::get('/search_administrasi', [KumpulanAjuanController::class, "searchAdministrasi"]);
  Route::get('/search_perizinan', [KumpulanAjuanController::class, "searchPerizinan"]);
  Route::get('/search_nonperizinan', [KumpulanAjuanController::class, "searchNonPerizinan"]);
  Route::get('/search_pertanahan', [KumpulanAjuanController::class, "searchPertanahan"]);

  // Profile Desa
  // Route::get("/desa", [ProfileDesaController::class, "Index"])->name("profile_desa");
  Route::get('/profile_desa', [ProfileDesaController::class, "index"])->name("profile_desa");

  // TDP
  Route::get("/tdp", [TantanganDanPotensiController::class, "Index"])->name("tantangan");

  // RJM
  Route::get("/rjm", [RencanaJangkaMenengahController::class, "Index"])->name("rencana");

  // Agenda
  Route::get("/agenda", [AgendaController::class, "Index"])->name("agenda");

  // Keuangan
  Route::get("/keuangan", [KeuanganController::class, "Index"])->name("keuangan");

  // Layanan
  Route::get("/layanan", [LayananController::class, "Index"])->name("layanan");

  // Layanan - Administrasi Kependudukan
  Route::get("/administrasi", [LayananController::class, "administrasi"])->name("administrasi");
  Route::get("/surdom", [SuratDomisiliController::class, "index"])->name("surdom");
  Route::post("/post_surdom", [SuratDomisiliController::class, "store"])->name("post_surdom");

  // Layanan - Perizinan
  Route::get("/perizinan", [LayananController::class, "perizinan"])->name("perizinan");
  Route::get("/suketusaha", [SuketUsahaController::class, "index"])->name("suketusaha");
  Route::post("/suketusaha", [SuketUsahaController::class, "store"])->name("suketusaha_post");

  // Layanan - Non Perizinan
  Route::get("/nonperizinan", [LayananController::class, "non_perizinan"])->name("non_perizinan");
  Route::get("/sktm", [SKTMController::class, "index"])->name("sktm");
  Route::post("/sktm", [SKTMController::class, "store"])->name("sktm_post");
  Route::get("/supengdesa", [SupengDesaController::class, "index"])->name("supengdesa");
  Route::post("/supengdesa", [SupengDesaController::class, "store"])->name("supengdesa_post");

  // Layanan - Pertanahan
  Route::get("/pertanahan", [LayananController::class, "pertanahan"])->name("pertanahan");

  // End Layanan

  // Peta Desa
  Route::get("/peta", [PetaDesaController::class, "Index"])->name("peta");

  // Berkas
  Route::get("/berkas", [BerkasController::class, "Index"])->name("berkas");
  Route::post("/berkas_post", [BerkasController::class, "store"])->name("berkas_post");
  Route::post("/berkas_npwn_post", [BerkasController::class, "berkas_npwp"])->name("berkas_npwp");
  Route::post("/berkas_bukunikah_post", [BerkasController::class, "berkas_bukunikah"])->name("berkas_bukunikah");
  Route::delete('/berkas_delete/{id}', [BerkasController::class, "destroy"])->name("berkas_delete");

});

Auth::routes();
