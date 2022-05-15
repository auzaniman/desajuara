<?php
use App\Http\Controllers\ProfileAkunController;
use App\Http\Controllers\ProfileDesaController;
use App\Http\Controllers\TantanganDanPotensiController;
use App\Http\Controllers\RencanaJangkaMenengahController;
use App\Http\Controllers\KeuanganController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\ChartBarController;
use App\Http\Controllers\BerkasController;
use App\Http\Controllers\Administrasi\SuratDomisiliController;
use App\Http\Controllers\PetaDesaController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Dashboard
Route::prefix("user")
->namespace("User")
->middleware(["auth", "user"])
->group(function() {

  // Profile Akun
  Route::get("/", [ProfileAkunController::class, "index"])->name("dashboard");

  // Profile Desa
  // Route::get("/desa", [ProfileDesaController::class, "Index"])->name("profile_desa");
  Route::post('/chart_add', [ChartBarController::class, "store"])->name("chart_add");
  Route::get('chart', [ChartBarController::class, "chart"])->name("chart");

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
  Route::get("/administrasi", [LayananController::class, "administrasi"])->name("administrasi");
  Route::get("/surdom", [SuratDomisiliController::class, "index"])->name("surdom");
  Route::post("/post_surdom", [SuratDomisiliController::class, "store"])->name("post_surdom");
  // End Layanan

  // Peta Desa
  Route::get("/peta", [PetaDesaController::class, "Index"])->name("peta");

  // Berkas
  Route::get("/berkas", [BerkasController::class, "Index"])->name("berkas");

});

Auth::routes();

