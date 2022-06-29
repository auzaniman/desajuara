<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
            'tempat_lahir' => ['required', 'string', 'max:255'],
            'tanggal_lahir' => ['required', 'string', 'max:255'],
            'nik' => ['required', 'string', 'max:16', 'unique:users'],
            'kk' => ['required', 'string', 'max:16'],
            'kelamin' => ['required', 'string', 'in:Laki-Laki,Perempuan'],
            'pendidikan' => ['required', 'string', 'in:SD,SMP,SMA,D1,D2,D3,D4,S1,S2,S3'],
            'jurusan' => ['required', 'string', 'max:255'],
            'pekerjaan' => ['required', 'string', 'max:255'],
            'agama' => ['required', 'string', 'in:Islam,Katolik,Kristen,Hindu,Budha'],
            'perkawinan' => ['required', 'string', 'in:BelumMenikah,Menikah,PernahMenikah'],
            'kewarganegaraan' => ['required', 'string', 'in:WNI,WNA'],
            'desa_ktp' => ['required', 'string', 'max:255'],
            'rt_ktp' => ['required', 'string', 'max:255'],
            'rw_ktp' => ['required', 'string', 'max:255'],
            'provinsi_ktp' => ['required', 'string', 'max:255'],
            'kota_ktp' => ['required', 'string', 'max:255'],
            'kecamatan_ktp' => ['required', 'string', 'max:255'],
            'no_telpon' => ['required', 'string', 'max:255', 'unique:users'],
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
            'kelamin' => $data['kelamin'],
            'pendidikan' => $data['pendidikan'],
            'jurusan' => $data['jurusan'],
            'pekerjaan' => $data['pekerjaan'],
            'agama' => $data['agama'],
            'perkawinan' => $data['perkawinan'],
            'kewarganegaraan' => $data['kewarganegaraan'],
            'desa_ktp' => $data['desa_ktp'],
            'rt_ktp' => $data['rt_ktp'],
            'rw_ktp' => $data['rw_ktp'],
            'provinsi_ktp' => $data['provinsi_ktp'],
            'kota_ktp' => $data['kota_ktp'],
            'kecamatan_ktp' => $data['kecamatan_ktp'],
            'desa_domisili' => $data['desa_domisili'],
            'rt_domisili' => $data['rt_domisili'],
            'rw_domisili' => $data['rw_domisili'],
            'provinsi_domisili' => $data['provinsi_domisili'],
            'kota_domisili' => $data['kota_domisili'],
            'kecamatan_domisili' => $data['kecamatan_domisili'],
            'no_telpon' => $data['no_telpon'],
            'no_wa' => $data['no_wa'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
