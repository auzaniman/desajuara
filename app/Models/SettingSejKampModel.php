<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SettingSejKampModel extends Model
{
    use HasFactory;

    protected $table = 'setting_sejarah_kampung';

    protected $fillable = [
      'sejarah_kampung',
      'video_desa',
      'foto_kades',
    ];
}
