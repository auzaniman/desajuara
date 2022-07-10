<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KecamatanModel extends Model
{
    use HasFactory;

    protected $table = 'kecamatan';
    protected $fillable = [
      "kota_id",
      "nama_kecamatan",
    ];

    public function kota()
    {
      return $this->belongsTo(KotaModel::class);
    }
}
