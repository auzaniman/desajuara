<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use App\Models\Village;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'tempat_lahir' => ['required', 'string'],
            'tanggal_lahir' => ['required', 'string'],
            'nik' => ['required', 'string', 'max:16', 'unique:users'],
            'kk' => ['required', 'string', 'max:16'],
            'jabatan_keluarga' => ['required', 'string', 'in:Kepala Keluarga,Suami,Istri,Anak Kandung,Anak Tiri'],
            'kelamin' => ['required', 'string', 'in:Laki-Laki,Perempuan'],
            'pendidikan' => ['required', 'string', 'in:SD,SMP,SMA,D1,D2,D3,D4,S1,S2,S3'],
            'jurusan' => ['required', 'string', 'max:255'],
            'pekerjaan' => ['required', 'string', 'max:255'],
            'agama' => ['required', 'string', 'in:Islam,Katolik,Kristen,Hindu,Budha'],
            'perkawinan' => ['required', 'string', 'in:BelumMenikah,Menikah,PernahMenikah'],
            'kewarganegaraan' => ['required', 'string', 'in:WNI,WNA'],
            'provinsi_ktp' => ['required', 'string'],
            'kota_ktp' => ['required', 'string'],
            'kecamatan_ktp' => ['required', 'string'],
            'desa_ktp' => ['required', 'string'],
            'rt_ktp' => ['required', 'string'],
            'rw_ktp' => ['required', 'string'],
            'status' => ['required', 'string', 'in:Warga,Bukan Warga'],
            'no_telpon' => ['required', 'string', 'max:13', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'username' => $data['username'],
            'tempat_lahir' => $data['tempat_lahir'],
            'tanggal_lahir' => $data['tanggal_lahir'],
            'nik' => $data['nik'],
            'kk' => $data['kk'],
            'jabatan_keluarga' => $data['jabatan_keluarga'],
            'kelamin' => $data['kelamin'],
            'pendidikan' => $data['pendidikan'],
            'jurusan' => $data['jurusan'],
            'pekerjaan' => $data['pekerjaan'],
            'agama' => $data['agama'],
            'perkawinan' => $data['perkawinan'],
            'kewarganegaraan' => $data['kewarganegaraan'],
            'status' => $data['status'],
            'provinsi_ktp' => $data['provinsi_ktp'],
            'kota_ktp' => $data['kota_ktp'],
            'kecamatan_ktp' => $data['kecamatan_ktp'],
            'desa_ktp' => $data['desa_ktp'],
            'rt_ktp' => $data['rt_ktp'],
            'rw_ktp' => $data['rw_ktp'],
            'no_telpon' => $data['no_telpon'],
            'no_wa' => $data['no_wa'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function getkabupaten(Request $request) {
      $id_provinsi = $request->id_provinsi;

      $kabupatens = Regency::where('province_id',$id_provinsi)->get();

      $option = "<option>== Pilih Kota/Kabupaten ==</option>";

      foreach($kabupatens as $kabupaten) {
        $option.= "<option value='$kabupaten->id'>$kabupaten->name</option>";
      }
      echo $option;
    }

    public function getkecamatan(Request $request) {
      $id_kabupaten = $request->id_kabupaten;

      $kecamatans = District::where('regency_id',$id_kabupaten)->get();

      $option = "<option>== Pilih Kecamatan ==</option>";

      foreach($kecamatans as $kecamatan) {
        $option.= "<option value='$kecamatan->id'>$kecamatan->name</option>";
      }
      echo $option;
    }

    public function getdesa(Request $request) {
      $id_kecamatan = $request->id_kecamatan;

      $desas = Village::where('district_id',$id_kecamatan)->get();

      $option = "<option>== Pilih Desa ==</option>";

      foreach($desas as $desa) {
        $option.= "<option value='$desa->id'>$desa->name</option>";
      }
      echo $option;
    }
}
