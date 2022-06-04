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
use App\Http\Controllers\Officer\Administrasi\SuratDomisiliOfficerController;
use App\Http\Controllers\Officer\Perizinan\SuketUsahaOfficerController;
use App\Http\Controllers\Officer\NonPerizinan\SKTMOfficerController;
use App\Http\Controllers\Officer\NonPerizinan\SupengDesaOfficerController;
use App\Http\Controllers\User\ProfileAkunController;
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

// Landing
Route::get("/", function () {
    return view('home.pages.index');
});

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
  Route::get("/administrasi", [LayananOfficerController::class, "administrasi"])->name("administrasi");
  Route::get("/surdom", [SuratDomisiliOfficerController::class, "index"])->name("surdom");
  Route::post("/post_surdom", [SuratDomisiliOfficerController::class, "store"])->name("post_surdom");
  Route::get("/show_surdom/{id}", [SuratDomisiliOfficerController::class, "show"])->name("show_surdom");
  Route::put("/update_surdom/{id}", [SuratDomisiliOfficerController::class, "update"])->name("update_surdom");
  Route::put("/update_alt_surdom/{id}", [SuratDomisiliOfficerController::class, "update_alt"])->name("update_alt_surdom");

  // Perizinan
  Route::get("/perizinan", [LayananOfficerController::class, "perizinan"])->name("perizinan");
  Route::get("/suketusaha", [SuketUsahaOfficerController::class, "index"])->name("suketusaha");

  // Non Perizinan
  Route::get("/nonperizinan", [LayananOfficerController::class, "non_perizinan"])->name("non_perizinan");
  Route::get("/sktm", [SKTMOfficerController::class, "index"])->name("sktm");
  Route::get("/supengdesa", [SupengDesaOfficerController::class, "index"])->name("supengdesa");

  // Pertanahan
  Route::get("/pertanahan", [LayananOfficerController::class, "pertanahan"])->name("pertanahan");

  // End Layanan

  // Peta Desa
  Route::get("/peta", [PetaDesaOfficerController::class, "Index"])->name("peta");

  // Berkas
  Route::get("/berkas", [BerkasOfficerController::class, "Index"])->name("berkas");
  Route::post("/berkas_post", [BerkasOfficerController::class, "store"])->name("berkas_post");
  Route::post("/berkas_alt_post", [BerkasOfficerController::class, "berkas_alt"])->name("berkas_alt");

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
  Route::get("/", [ProfileAkunController::class, "index"])->name("dashboard");
  Route::put("/profile_edit/{id}", [ProfileAkunController::class, "update"])->name("profile_edit");
  Route::post("/tambah_foto", [ProfileAkunController::class, "store"])->name("tambah_foto");
  Route::get("/kumpulan_berkas", [ProfileAkunController::class, "kumpulan_berkas"])->name("kumpulan_berkas");
  Route::get("/kumpulan_ajuan/{id}", [ProfileAkunController::class, "kumpulan_ajuan"])->name("kumpulan_ajuan");

  // Profile Desa
  // Route::get("/desa", [ProfileDesaController::class, "Index"])->name("profile_desa");
  Route::post('/chart_add', [ChartBarController::class, "store"])->name("chart_add");
  Route::get('/chart', [ChartBarController::class, "index"])->name("chart");
  Route::get('/chart_edit_page', [ChartBarController::class, "index_edit"])->name("chart_edit_page");
  Route::put('/chart_edit/{id}', [ChartBarController::class, "update"])->name("chart_edit");
  Route::delete('/chart_delete/{id}', [ChartBarController::class, "destroy"])->name("chart_delete");

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

  // Administrasi Kependudukan
  Route::get("/administrasi", [LayananController::class, "administrasi"])->name("administrasi");
  Route::get("/surdom", [SuratDomisiliController::class, "index"])->name("surdom");
  Route::post("/post_surdom", [SuratDomisiliController::class, "store"])->name("post_surdom");

  // Perizinan
  Route::get("/perizinan", [LayananController::class, "perizinan"])->name("perizinan");
  Route::get("/suketusaha", [SuketUsahaController::class, "index"])->name("suketusaha");
  Route::post("/suketusaha", [SuketUsahaController::class, "store"])->name("suketusaha_post");

  // Non Perizinan
  Route::get("/nonperizinan", [LayananController::class, "non_perizinan"])->name("non_perizinan");
  Route::get("/sktm", [SKTMController::class, "index"])->name("sktm");
  Route::post("/sktm", [SKTMController::class, "store"])->name("sktm_post");
  Route::get("/supengdesa", [SupengDesaController::class, "index"])->name("supengdesa");
  Route::post("/supengdesa", [SupengDesaController::class, "store"])->name("supengdesa_post");

  // Pertanahan
  Route::get("/pertanahan", [LayananController::class, "pertanahan"])->name("pertanahan");

  // End Layanan

  // Peta Desa
  Route::get("/peta", [PetaDesaController::class, "Index"])->name("peta");

  // Berkas
  Route::get("/berkas", [BerkasController::class, "Index"])->name("berkas");
  Route::post("/berkas_post", [BerkasController::class, "store"])->name("berkas_post");
  Route::put("/berkas_edit/{id}", [BerkasController::class, "update"])->name("berkas_edit");
  Route::post("/berkas_alt_post", [BerkasController::class, "berkas_alt"])->name("berkas_alt");
  Route::post("/berkas_alt_edit/{id}", [BerkasController::class, "berkas_alt_update"])->name("berkas_alt_edit");

});

Auth::routes();
