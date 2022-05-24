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
            'ttl' => ['required', 'string', 'max:255'],
            'nik' => ['required', 'string', 'max:16', 'unique:users'],
            'kk' => ['required', 'string', 'max:16'],
            'kelamin' => ['required', 'string', 'in:Laki-Laki,Perempuan'],
            'pekerjaan' => ['required', 'string', 'max:255'],
            'agama' => ['required', 'string', 'in:Islam,Katolik,Kristen,Hindu,Budha'],
            'perkawinan' => ['required', 'string', 'in:BelumMenikah,Menikah,PernahMenikah'],
            'kewarganegaraan' => ['required', 'string', 'in:WNI,WNA'],
            'alamat_ktp' => ['required', 'string', 'max:255'],
            'alamat_domisili' => ['required', 'string', 'max:255'],
            'provinsi' => ['required', 'string', 'max:255'],
            'kota' => ['required', 'string', 'max:255'],
            'kecamatan' => ['required', 'string', 'max:255'],
            'pendidikan' => ['required', 'string', 'max:255'],
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
            'ttl' => $data['ttl'],
            'nik' => $data['nik'],
            'kk' => $data['kk'],
            'kelamin' => $data['kelamin'],
            'pekerjaan' => $data['pekerjaan'],
            'agama' => $data['agama'],
            'perkawinan' => $data['perkawinan'],
            'kewarganegaraan' => $data['kewarganegaraan'],
            'alamat_ktp' => $data['alamat_ktp'],
            'alamat_domisili' => $data['alamat_domisili'],
            'provinsi' => $data['provinsi'],
            'kota' => $data['kota'],
            'kecamatan' => $data['kecamatan'],
            'no_telpon' => $data['no_telpon'],
            'no_wa' => $data['no_wa'],
            'pendidikan' => $data['pendidikan'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
