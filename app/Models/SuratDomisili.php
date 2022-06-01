<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratDomisili extends Model
{
    use HasFactory;

    protected $table = 'suratdomisili';

    protected $fillable = [
      'user_id',
      'berkas_id',
      'verifikasi_id',
      'nama_pemohon',
      'email_pemohon',
      'bukti_pengantar',
      'file_surdom',
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
