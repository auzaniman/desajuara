<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuketUsahaModel extends Model
{
    use HasFactory;

    protected $table = 'surat_keterangan_usaha';

    protected $fillable = [
      'user_id',
      'berkas_id',
      'nama_pemohon',
      'email_pemohon',
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
