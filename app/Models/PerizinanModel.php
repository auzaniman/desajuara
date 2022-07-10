<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerizinanModel extends Model
{
    use HasFactory;

    protected $table = 'perizinan';

    protected $fillable = [
      'user_id',
      'berkas_id',
      'verifikasi',
      'nama_ajuan',
      'nama_pemohon',
      'email_pemohon',
      'foto_ktp_pemohon',
      'foto_kk_pemohon',
      'alamat_pemohon',
      'hp_pemohon',
      'nik_pemohon',
      'kk_pemohon',
      'pengantar_rtrw',
      'file_permohonan_suketusaha',
      'keterangan',
      'bidang_usaha',
      'nama_usaha',
      'alamat_usaha',
      'tahun_memulai',
      'jumlah_karyawan',
      'omzet',
      'aset',
    ];

    // Relation
    public function user()
    {
      return $this->belongsTo(User::class);
    }
    public function berkas()
    {
      return $this->belongsTo(Berkas::class);
    }
}
