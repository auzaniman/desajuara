<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupengDesaModel extends Model
{
    use HasFactory;

    protected $table = 'supeng_desa';

    protected $fillable = [
      'user_id',
      'berkas_id',
      'verifikasi_id',
      'nama_pemohon',
      'email_pemohon',
      'foto_ktp_pemohon',
      'foto_kk_pemohon',
      'alamat_pemohon',
      'hp_pemohon',
      'nik_pemohon',
      'kk_pemohon',
      'keperluan',
      'tanggal_keperluan',
      'tempat_keperluan',
      'file_supeng',
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
}
