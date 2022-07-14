<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
      'name',
      'email',
      'username',
      'tempat_lahir',
      'tanggal_lahir',
      'nik',
      'kk',
      'jabatan_keluarga',
      'npwp',
      'kelamin',
      'pekerjaan',
      'jurusan',
      'agama',
      'perkawinan',
      'kewarganegaraan',
      'status',
      'provinsi_ktp',
      'kota_ktp',
      'kecamatan_ktp',
      'desa_ktp',
      'rt_ktp',
      'rw_ktp',
      'provinsi_domisili',
      'kota_domisili',
      'kecamatan_domisili',
      'desa_domisili',
      'rt_domisili',
      'rw_domisili',
      'no_telpon',
      'no_wa',
      'pendidikan',
      'foto_profile',
      'password'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
