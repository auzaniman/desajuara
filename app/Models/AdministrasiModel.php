<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdministrasiModel extends Model
{
    use HasFactory;

    protected $table = 'administrasi';

    protected $fillable = [
      'user_id',
      'berkas_id',
      'verifikasi',
      'nama_ajuan',
      'nama_pemohon',
      'alamat_pemohon',
      'hp_pemohon',
      'nik_pemohon',
      'kk_pemohon',
      'email_pemohon',
      'foto_ktp_pemohon',
      'foto_kk_pemohon',
      'pengantar_rtrw',
      'file_permohonan_surdom',
      'keterangan',
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

    public function verifikasi()
    {
      return $this->belongsTo(VerifikasiModel::class);
    }
}
