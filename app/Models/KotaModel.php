<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KotaModel extends Model
{
    use HasFactory;
    protected $table = 'kota';
    protected $fillable = [
      "provinsi_id",
      "nama_kota",
    ];

    public function provinsi()
    {
      return $this->belongsTo(ProvinsiModel::class);
    }
}
