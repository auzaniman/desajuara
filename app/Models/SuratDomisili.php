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
      'nama_pemohon',
      'email_pemohon',
      'bukti_ktp',
      'bukti_kk',
      'bukti_pengantar',
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
