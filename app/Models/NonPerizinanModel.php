<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NonPerizinanModel extends Model
{
    use HasFactory;

    protected $table = 'nonperizinan';

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
      'file_permohonan_supengdesa',
      'file_permohonan_sktm',
      'keterangan',
      'foto_rumah_depan',
      'foto_rumah_samping',
      'tanda_pbb',
      'keperluan',
      'tanggal_keperluan',
      'tempat_keperluan',
      'pengantar_rtrw',
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
