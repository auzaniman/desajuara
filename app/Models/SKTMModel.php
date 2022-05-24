<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SKTMModel extends Model
{
    use HasFactory;

    protected $table = 'sktm';

    protected $fillable = [
      'user_id',
      'berkas_id',
      'nama_pemohon',
      'email_pemohon',
      'bidang_usaha',
      'foto_rumah_depan',
      'foto_rumah_samping',
      'tanda_pbb',
      'pengantar',
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
