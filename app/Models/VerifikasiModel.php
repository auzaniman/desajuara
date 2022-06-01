<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VerifikasiModel extends Model
{
    use HasFactory;

    protected $table = 'verifikasi';

    protected $fillable = [
      'status_verifikasi',
    ];
}
